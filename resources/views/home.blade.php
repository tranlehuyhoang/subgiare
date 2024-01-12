@extends('layouts.app')
@section('content')
    @inject('site_config', 'App\Models\site_config')
    <div class="content-wrapper">
                    
        <div class="content-wrapper">
                    
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4">Trang chủ</h4>
                <div class="row">



                <div class="row">
                    <div class="col-lg-9 col-xlg-9 col-md-7">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="card-info">
                                                <p class="card-text">Số dư</p>
                                                <div class="d-flex align-items-end mb-2">
                                                    <h4 class="card-title mb-0 me-2"><b
                                                            class="text-danger">{{ number_format(Auth::user()->money) }}</b>
                                                        coin</h4>
                                                </div>
                                            </div>
                                            <div class="card-icon">
                                                <span class="badge bg-label-success rounded p-2">
                                                    <i class="fa-solid text-success fa-coins bx-sm"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="card-info">
                                                <p class="card-text">Đã nạp</p>
                                                <div class="d-flex align-items-end mb-2">
                                                    <h4 class="card-title mb-0 me-2"><b
                                                            class="text-danger">{{ number_format(Auth::user()->total_charge) }}</b>
                                                        coin</h4>
                                                </div>
                                            </div>
                                            <div class="card-icon">
                                                <span class="badge bg-label-primary rounded p-2">
                                                    <i class="fa-solid text-info fa-coins bx-sm"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="card-info">
                                                <p class="card-text">Đã Dùng</p>
                                                <div class="d-flex align-items-end mb-2">
                                                    <h4 class="card-title mb-0 me-2"><b
                                                            class="text-danger">{{ number_format(Auth::user()->total_minus) }}</b>
                                                        coin</h4>
                                                </div>
                                            </div>
                                            <div class="card-icon">

                                                <span class="badge bg-label-primary rounded p-2">
                                                    <i class="fa-solid text-danger fa-coins bx-sm"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home-notification mb-3">
                            @foreach ($notice as $item)
                                <div class="d-flex flex-column comment-section mb-1">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="d-flex align-items-start">
                                                  <div class="avatar me-3">
                                                    <img src="https://img.upanh.tv/2022/06/16/OYqL0D1.jpg" alt="Avatar" class="rounded-circle">
                                                  </div>
                                                    <div class="me-2">
                                                        <h6 class="mb-0"> {{ $site_config->getValueByName('admin_name') }} <i
                                                                class="fa fa-check-circle-o text-primary "></i></h6>
                                                                <small class="text-muted">{{ $item->created_at }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>{{ $item->content }}</p>
                                            <div class="d-flex gap-1 mt-4">
                                                <a href="#" class="btn btn-label-secondary" title="Like"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Like">
                                                    <i class="fa-solid fa-heart"></i> <?= rand(1, 99999) ?>
                                                </a>
                                                <a href="#" class="btn btn-label-secondary" title="Comments"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Comments">
                                                    <i class="fa-solid fa-comment"></i> <?= rand(1, 99998) ?>
                                                </a>
                                                <a href="#" class="btn btn-label-secondary" title="Share"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Share">
                                                    <i class="fa-solid fa-share"></i> <?= rand(1, 99999) ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>








                    <div class="col-lg-3 col-xlg-3 col-md-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="ribbon-title ribbon-primary">Nâng VIP</div>
                                        <div class="mt-4">
                                            <center><img src="{{ asset('lbd/assets/images/icon/vip.svg') }}"
                                                    alt="" width="80" height="80">
                                            </center>
                                            <div class="text-center mb-3">
                                                <h5>
                                                    Nâng cấp bậc!
                                                </h5>
                                                <p class="text-soft">Bạn sẽ nhận được nhiều ưu hơn hơn như: giảm giá dịch
                                                    vụ,
                                                    tạo
                                                    website riêng, hỗ trợ ...</p>
                                            </div>
                                            <div class="d-grid gap-2 col-12 mx-auto">
                                                <a href="/recharge/banking" class="btn btn-success">Nâng ngay nào!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              
    <div class="modal fade" id="modalSystem" tabindex="-1" role="dialog" aria-labelledby="modalSystemLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <center>
                    <img src="{{ asset('lbd/assets/images/icon/notification.svg') }}" alt="" width="90">
                </center>
                <div class="pt-3 text-center">
                    <h3>Thông báo hệ thống</h3>
                </div>
                
                
                
                <p class="text-center">{{ $tbday }}</p>
                     
                <div class="d-grid gap-2">
                    
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng thông báo</button>
                </div>
            </div>
        </div>
    </div>
</div>
                </div>
@endsection
