 @inject('site_config', 'App\Models\site_config')
 @extends('layouts.app')
 @section('content')
     @inject('site_config', 'App\Models\site_config')
     <!--app-content open-->
     <div class="main-content app-content">
         <div class="main-container container-fluid">

             <div class="breadcrumb-header justify-content-between">
                 <div class="left-content">
                     <span class="main-content-title mg-b-0 mg-b-lg-1">{{ $title }}</span>
                 </div>
                 <div class="justify-content-center mt-2">
                     <ol class="breadcrumb">
                         <li class="breadcrumb-item tx-15"><a
                                 href="javascript:void(0);">{{ $site_config->getValueByName('domain') }}</a></li>
                         <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                     </ol>
                 </div>
             </div>

             <div class="row">
                 <div class="col-md-12">

                     <div class="card mb-4 card-tab">
                         <div class="card-header">
                             <div class="row">
                                 <div class="col-4 d-grid gap-2">
                                     <a href="/recharge/banking" class="btn btn-outline-primary"><img
                                             src="{{ asset('lbd/images/svg/bank.svg') }}" alt="" width="25"
                                             height="25">
                                         Ngân hàng</a>
                                 </div>
                                 <div class="col-4 d-grid gap-2">
                                     <a href="/recharge/paypal" class="btn btn-primary"><img
                                             src="{{ asset('bvq/assets/images/icon/paypal.svg') }}" alt=""
                                             width="25" height="25">
                                         Paypal</a>
                                 </div>
                                 <div class="col-4 d-grid gap-2">
                                     <a href="/recharge/card" class="btn btn-outline-primary"><img
                                             src="{{ asset('lbd/images/svg/card.svg') }}" alt="" width="25"
                                             height="25">
                                         Thẻ cào</a>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-xl-12 col-md-12">
                                 <div class="card">
                                     <div class="col-md-12 mb-3">
                                         <h5 class="text-primary">Tỷ giá: 1 USD = 1 coin</h5>
                                     </div>

                                     <div class="col-md-6 mx-auto">
                                         <div class="alert text-white bg-danger text-center" role="alert">
                                             - 1 USD = 23,000 VNĐ, khi nạp sẽ trừ phí 15% (ví dụ bạn nạp 1 usd sẽ nhận được
                                             19,550
                                             coin).<br>
                                         </div>
                                         <form action="https://paypal.me/sieuthisub?country.x=VN&locale.x=vi_VN" method="POST">
                                             <input type="hidden" name="_token"
                                                 value="{{ Auth::user()->api_token }}">
                                             <div class="form-group">
                                                 <label class="form-label" for="">Số tiền</label>
                                                 <div class="input-group mb-3">
                                                     <input class="form-control" type="number" name="usd"
                                                         value="" placeholder="Nhập số $ muốn nạp">
                                                     <button type="submit" class="btn btn-primary"><i
                                                            class=" fa fa-paper-plane-o text-danger"></i>  Nạp
                                                         ngay</button>
                                                 </div>
                                             </div>
                                         </form>
                                     </div>

                                     <div class="col-md-12">
                                         <h5 class="text-primary">Nội dung chuyển khoản</h5>
                                         <div class="alert text-white bg-info mb-3" role="alert">
                                             <h4 class="text-white bg-heading font-weight-semi-bold text-center">
                                                 <a href="javascript:;" onclick="coppy('transfer_code');">
                                                     <b id="transfer_code">{{ $site_config->getValueByName('transfer_code') }}
                                                         {{ Auth::user()->id }}</b>
                                                     <i class="fa fa-clone"></i></a>
                                         </div>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="alert text-white bg-warning" role="alert">
                                             <h5 class="text-white bg-heading font-weight-semi-bold">Lưu ý</h5>
                                             <p>- Cố tình nạp dưới mức nạp không hỗ trợ.</p>
                                             <p>-Nạp sai cú pháp hoặc sai số tài khoản sẽ bị trừ 20% phí giao
                                                 dịch. Vd: nạp 100k
                                                 sai nội dung sẽ chỉ nhận được 80k coin và phải liên hệ admin để
                                                 cộng tay.</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-12 col-sm-12">
                     <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Lịch Sử Nạp</h4>

                         </div>
                         <div class="card-body pt-0 BVQ-table">
                             <div class="table-responsive">
                                 <table class="table  table-bordered text-nowrap mb-0" id="BVQ">
                                     <thead>
                                         <tr>
                                             <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                 rowspan="1" colspan="1"
                                                 aria-label="#: activate to sort column ascending"
                                                 style="width: 35.9219px;">ID</th>
                                             <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                 rowspan="1" colspan="1"
                                                 aria-label="Thời gian: activate to sort column ascending"
                                                 style="width: 178.25px;">Thời gian</th>
                                             <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                 rowspan="1" colspan="1"
                                                 aria-label="Loại: activate to sort column ascending"
                                                 style="width: 63.9531px;">
                                                 Loại </th>
                                             <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                 rowspan="1" colspan="1"
                                                 aria-label="Mã giao dịch: activate to sort column ascending"
                                                 style="width: 122.516px;">Mã Giao Dịch</th>
                                             <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                 rowspan="1" colspan="1"
                                                 aria-label="Người chuyển: activate to sort column ascending"
                                                 style="width: 134.234px;">Người Chuyển</th>
                                             <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                 rowspan="1" colspan="1"
                                                 aria-label="Thực nhận: activate to sort column ascending"
                                                 style="width: 101.312px;">Thực Nhận</th>
                                             <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                 rowspan="1" colspan="1"
                                                 aria-label="Nội dung: activate to sort column ascending"
                                                 style="width: 211.812px;">Nội Dung</th>
                                         </tr>
                                     </thead>
                                     @foreach ($history as $item)
                                         <tr>
                                             <td>{{ $item->id }}</td>
                                             <td>{{ $item->created_at }}</td>
                                             <td>{{ $item->card_type }}</td>
                                             <td>{{ $item->card_price }}</td>
                                             <td>{{ $item->seri }}</td>
                                             <td>{{ $item->code }}</td>
                                             <td>

                                             </td>
                                         </tr>
                                     @endforeach

                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     </div>
     </div>
     <!-- CONTAINER CLOSED -->
     </div>
 @endsection
 @section('script')
 <script src="https://www.paypal.com/sdk/js?client-id={{ $site_config->getValueByName('transfer_code') }}   {{ Auth::user()->id }}"></script>
     <script src="{{ asset('') }}bvq/js/table-data.js"></script>
     <div id="paypal-button-container"></div>

<script>
  paypal.Buttons().render('#paypal-button-container')
</script>
     <script>
         $(document).ready(function() {
             Swal.fire({
                 title: 'Thông báo',
                 text: 'Vui lòng chuyển khoản đúng nội dung!',
                 icon: 'warning',
                 confirmButtonText: 'Tôi Đã Hiểu'
             })
         });
     </script>
 @endsection
