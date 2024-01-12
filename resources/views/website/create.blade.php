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
            <div class="card mb-4">
    <div class="card-body">
        <div class="ribbon-title ribbon-primary">Thông tin &amp; cấu hình</div>
       <div class="mt-4">
        <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="alert text-white bg-warning " role="alert">
            - Bạn phải đạt cấp bậc cộng tác viên hoặc đại lý mới có thể tạo web con! <br>
                            - Nghiêm cấm các tiên miền có chữ : Facebook, Instagram để tránh bị vi phạm bản quyền. <br>
                            - Khách hàng tạo tài khoản và sử dụng dịch vụ ở site con. Tiền sẽ trừ vào tài khoản của đại lý ở
                            site chính. Vì thế để khách hàng mua được tài khoản đại lý phải còn số dư. <br />
                            - Chúng tôi hỗ trợ mục đích kinh doanh của tất cả cộng tác viên và đại lý!
    </div>
                        <form submit-ajax="BVQ" action="#" method="post">
                            <div class="form-group mb-3">
                                <label class="form-label" for="">Api Token</label>
                                <div class="input-group">
                                    <input class="form-control" type="text" value="{{ Auth::user()->api_token }}"
                                        id="api_token" readonly>
                                    <button type="button" class="btn btn-primary" id="changeToken"><i
                                            class="fa fa-exchange"></i> Thay đổi</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="">Tên miền</label>
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" name="domain"
                                        value=""
                                        placeholder="Nhập tiên miền cần kích hoạt">
                                        <button type="submit" class="btn btn-primary"><i
                                            class="fa fa-save"></i> Lưu ngay</button>
                                </div>
                            </div>
                        </form>
                                                <div class="alert text-white bg-success " role="alert">
            <p class="fw-bold">Hướng dẫn tạo website:</p>
                            <p><span class="fw-bold">- Bước 1 :</span> <span>Bạn cần phải có tên miền, nếu chưa bạn có thể mua tên miền tại <a href="https://tenten.vn" target="_blank" rel="noopener noreferrer" class="text-light">tenten.vn</a> (đọc lưu ý trước khi
                                mua).</span></p>
                            <p><span class="fw-bold">- Bước 2 :</span> <span>Trỏ Nameserver1: <b class="text-white">alex.ns.cloudflare.com</b></span></p>
                            <p><span class="fw-bold">- Bước 3 :</span> <span>Trỏ Nameserver2: <b class="text-white">novalee.ns.cloudflare.com</b></span></p>
                            <p><span class="fw-bold">- Bước 4 :</span> <span>Sau khi đã trỏ Nameserver bạn hãy liên hệ zalo: <b class="text-white"><a href="https://zalo.me/0846745505" target="_blank" rel="noopener noreferrer" class="text-light">https://zalo.me/0846745505</a></b> để hỗ trợ kích hoạt.</span></p>
                            <p><span class="fw-bold">- Bước 5 :</span> Truy cập vào trang của bạn và nhập api token (lưu ý trước lúc kích hoạt api token không được để lộ tên miền tránh bị kích hoạt tài khoản admin).
                            </p>
    </div>
                    </div>
                </div>
       </div>
    </div>
</div>        </div>
    </div>
                    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
