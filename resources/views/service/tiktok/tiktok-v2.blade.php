@extends('layouts.app')
@section('content')
    @inject('site_config', 'App\Models\site_config')
    <!--app-content open-->
    <div class="content-wrapper">
                    
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">{{ $title }}</h4>
                    <div class="row">
<div class="col-md-12">
    <div class="card mb-4 card-tab">
<div class="card-header">
        <div class="row">
    <div class="col-6 d-grid gap-2">
        <a href="{{ route('service.tiktok-v2', $type) }}"
            class="btn btn-primary"><img
                src="{{ asset('lbd/images/svg/order.svg') }}" alt="" width="25" height="25">
            Thêm đơn</a>
    </div>
    <div class="col-6 d-grid gap-2">
        <a href="{{ route('service.tiktok-v2.order', $type) }}"
            class="btn btn-outline-primary"><img
                src="{{ asset('lbd/images/svg/list-order.svg') }}" alt="" width="25" height="25">
            Danh sách đơn</a>
    </div>
</div>
</div>
<div class="card-body">
                                            <form action="{{ route('api.service.tiktok-v2', $type) }}" ajax-request="lbd"
                                                method="POST">
                                                @if ($type == 'like' || $type == 'comment' || $type == 'share' || $type == 'view')
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <label for="idpost" class="form-label">Link video</label>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" name="idpost" id="idpost"
                                                                    class="form-control form-control-lg"
                                                                    placeholder="Nhập link video cần buff">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if ($type == 'sub')
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <label for="idpost" class="form-label">Username</label>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" name="idpost" id="idpost"
                                                                    class="form-control form-control-lg"
                                                                    placeholder="Nhập username tài khoản của bạn">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label for="server" class="form-label">Máy chủ</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            @foreach ($server as $item)
                                                                <div
                                                                    class="custom-control custom-radio custom-control-inline mt-2">
                                                                    <input type="radio" id="server{{ $item->id }}"
                                                                        name="server_order" onchange="bill()"
                                                                        price="{{ $item->rate_server }}"
                                                                        notice="{{ $item->content_server }}"
                                                                        class="custom-control-input" checked
                                                                        value="{{ $item->server_service }}">
                                                                    <label class="custom-control-label"
                                                                        for="server{{ $item->id }}">
                                                                        {{ $item->server_service }} -
                                                                        {{ $item->title_server }}
                                                                        @if ($item->status_server == 'on')
                                                                            <span
                                                                                class="badge bg-success">{{ __('Họat động') }}</span>
                                                                        @else
                                                                            <span
                                                                                class="badge bg-danger">{{ __('Bảo trì') }}</span>
                                                                        @endif
                                                                        <span
                                                                            class="badge bg-primary">{{ $item->rate_server }}
                                                                            Coin / 1</span>
                                                                    </label>
                                                                </div>
                                                                <br>
                                                            @endforeach
                                                            <div id="noticeServer"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($type == 'comment')
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <label for="comment" class="form-label">Bình luận</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <textarea name="comment" id="comment" class="form-control form-control-lg" rows="3"
                                                                    placeholder="Nhập bình luận, mỗi nội dung 1 dòng"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label for="amount" class="form-label">Số lượng</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="amount" id="amount"
                                                                class="form-control form-control-lg" onkeyup="bill()"
                                                                value="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label for="note" class="form-label">Ghi chú</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <textarea name="note" id="note" cols="30" rows="4" class="form-control"
                                                                placeholder="Nhập ghi chú nếu cần"></textarea>
                                                            <div class="mt-3">
                                                                <div class="alert bg-danger text-white" role="alert">
                                                                    <h4>Vui lòng đọc tránh mất tiền</h4>
                                                                    - <b>Mua bằng ID Facebook đã mở chế độ công khai, có nút
                                                                        theo dõi, có hỗ trợ tăng
                                                                        được cho tài khoản dưới 18+</b>.
                                                                </div>

                                                            </div>
                                                           
                                                                <div class="form-group row mb-3">
                                                                    <div class="col-sm-12 text-center">
                                                                        <div class="alert text-white bg-success " role="alert">
                                                    <h3 class="font-bold text-white">Tổng thanh toán: <span class="bold green"><span
                                                                                        id="payment" class="text-danger">0</span> coin</span></h3>
                                            </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-grid gap-2">
                                                                    <button type="submit"class="btn btn-primary"
                                                                    show="Bạn có muốn thanh toán đơn hàng?, chúng tôi sẽ không hoàn tiền với đơn đã thanh toán."
                                                                   ><img
                                                                        src="{{ asset('lbd/images/svg/buy.svg') }}" alt=""
                                                                        width="30" height="30"> Mua
                                                                    ngay</button>
                                                                </div>
                                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
            @endsection
