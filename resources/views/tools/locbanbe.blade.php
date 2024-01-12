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
                    </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="ribbon-title ribbon-primary">Thông tin &amp; cấu hình</div>
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-md-6 mx-auto">

                                    <div class="alert text-white bg-danger text-center" role="alert">
                                        Tải Tools Lọc Bạn Bè Miễn Phí Tại SieuThiSub.Net (<a class="text-success"
                                            href="https://drive.google.com/file/d/1Fqq9Afs-pf45LfiW9hAf6vQ0CbUXT64Z/view?usp=sharing"
                                            target="_blank" rel="noopener noreferrer">TẢI NGAY TẠI ĐÂY</a>).
                                    </div>
                                </div>
                                <div class="col-md-12 bold" style="margin-bottom: 10px;">
                                    <div class="card card-select-cus">
                                        <div class="card-body card-body-select-cus">
                                            <p class="mb-0 mt-3 text-wrap">
                                            <ul>
                                                <li>Không được phép sử dụng trình duyệt cốc cốc để lọc. HÃY SỬ DỤNG TRÌNH
                                                    DUYỆT CHROME của google để chạy tool!</li>
                                                <li>Đây là tool hỗ trợ lọc bạn bè không tương tác trên facebook!</li>
                                                <li>Link video hướng dẫn sử dụng tool lọc bạn bè <a
                                                        href="https://drive.google.com/file/d/1Fqq9Afs-pf45LfiW9hAf6vQ0CbUXT64Z/view"
                                                        target="_blank">https://drive.google.com/file/d/1Fqq9Afs-pf45LfiW9hAf6vQ0CbUXT64Z/view</a>
                                                </li>
                                                <li>Nếu gặp lỗi hãy nhắn tin hỗ trợ phía bên phải góc màn hình hoặc vào mục
                                                    liên hệ hỗ trợ để được hỗ trợ tốt nhất!</li>
                                            </ul>
                                            </p><span
                                                class="badge badge-cus position-absolute-cus badge-top-left-cus badge-primary-cus badge-pill-cus">
                                                HÃY ĐỌC ĐỂ TRÁNH MẤT TIỀN KHI SỬ DỤNG! </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
