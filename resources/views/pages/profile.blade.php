@extends('layouts.app')
@section('content')
    @inject('site_config', 'App\Models\site_config')
    <div class="content-wrapper">
                    
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">{{ $title }}</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="ribbon-title ribbon-primary">Thông tin tài khoản</div>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="" class="form-label">Họ và tên</label>
                                        <input type="text" class="form-control"
                                            value="{{ Auth::user()->name }}"readonly="">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label" for="">Email</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->email }}"
                                            readonly>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label" for="">Tài khoản</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->username }}"
                                            readonly>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label" for="">Số dư</label>
                                        <input type="text" class="form-control"
                                            value="{{ number_format(Auth::user()->money) }} coin" readonly>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label" for="">Cấp độ</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->level }}"
                                            readonly>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label" for="">Thời gian tham gia</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->created_at }}"
                                            readonly>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-label" for="">Api Token</label>
                                        <div class="input-group">
                                            <input class="form-control" type="text" value={{ Auth::user()->api_token }}
                                                id="api_token" readonly>
                                            <button type="button" class="btn btn-primary" id="changeToken"><i
                                                    class="fa fa-exchange"></i> Thay đổi</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="ribbon-title ribbon-primary">Đổi mật khẩu</div>
                            <div class="mt-4">
                                <form action="<?= url('account/change-password') ?>" ajax-request="lbd" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Mật khẩu cũ</label>
                                        <input type="password" class="form-control form-control-lg" name="passOld" id="passOld" placeholder="Nhập mật khẩu cũ">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mật khẩu mới</label>
                                        <input type="password" class="form-control form-control-lg" name="passNew" id="passNew" placeholder="Nhập mật khẩu mới">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mật khẩu mới</label>
                                        <input type="password" class="form-control form-control-lg" name="passNew2" id="passNew2" placeholder="Nhập lại mật khẩu">
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"><i
                                                class="fa fa-lock"></i> Thay đổi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
