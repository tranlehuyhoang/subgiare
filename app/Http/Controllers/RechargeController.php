<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\account_banks;
use App\Models\history_bank;
use App\Models\site_config;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use App\Http\Controllers\api\recharge\cards\CardApiController;

class RechargeController extends Controller
{
    public function __construct()
    {
        $this->middleware('XSS');
    }

    public function banking(){
        $title = "Nạp tiền Chuyển Khoản";
        $banks = account_banks::all();
        $history = history_bank::where([
            'type' => 'banking',
            'username' => Auth::user()->username,
        ])->get();
        return view('recharge.banking', compact('title', 'banks', 'history'));
    }
    public function paypal(){
        $title = "Nạp tiền Từ paypal";
        $banks = account_banks::all();
        $history = history_bank::where([
            'type' => 'paypal',
            'username' => Auth::user()->username,
        ])->get();
        return view('recharge.paypal', compact('title', 'banks', 'history'));
    }
    public function card(){
        $title = "Nạp Tiền thẻ cào";
        $history = history_bank::where([
            'type' => 'card',
            'username' => Auth::user()->username,
        ]);
        return view('recharge.card', compact('title', 'history'));
    }

    public function Docard(Request $request){
        $validator = Validator::make($request->all(), [
            'card_type' => 'required',
            'card_price' => 'required|numeric',
            'seri' => 'required|numeric',
            'code' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors()->first()]);
        }else{
            $tranid = rand(100000000, 999999999);
            $cardFun = new CardApiController();
            $card_type = site_config::where('name', 'card_type')->first()->value;
            $CardType =  $request->card_type;
            $card_price = $request->card_price;
            $seri = $request->seri;
            $code = $request->code;
            if($card_type == 'ttvpay'){
                $ttvpay = $cardFun->charginTtvPay($code, $seri, $CardType, $card_price, $tranid);
                //dd($ttvpay);
                if($ttvpay['Code'] == 1){
                    history_bank::create([
                        'type' => 'card',
                        'username' => Auth::user()->username,
                        'card_type' => $CardType,
                        'card_price' => $card_price,
                        'serial' => $seri,
                        'code' => $code,
                        'thucnhan' => 0,
                        'transid' => $tranid,
                        'status' => 0,
                        'taskid' => $ttvpay['TaskId'],
                        'date' => time(),
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]);
                    return response()->json(['status' => true, 'message' => 'Nạp thẻ thành công vui lòng chờ']);
                }else{
                    return response()->json(['status' => false, 'message' => $ttvpay['Message']]);
                }
            }elseif($card_type == 'thesieure'){
                $tsr = $cardFun->charginTSR($CardType, $card_price, $code, $seri, $tranid);
                if($tsr['status'] == 99){
                    history_bank::create([
                        'type' => 'card',
                        'username' => Auth::user()->username,
                        'card_type' => $CardType,
                        'card_price' => $card_price,
                        'serial' => $seri,
                        'code' => $code,
                        'thucnhan' => 0,
                        'transid' => $tranid,
                        'status' => 0,
                        'date' => time(),
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]);
                    return response()->json(['status' => true, 'message' => 'Nạp thẻ thành công vui lòng chờ']);
                }else{
                    return response()->json(['status' => false, 'message' => $tsr['message']]);
                }
            }
        }
    }
}
