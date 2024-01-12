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
            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Mua tài khoản via</h3>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Số lượng còn: <span
                                    class="badge bg-success">{{ number_format($acc->count()) }}</span></h4>
                            <form action="{{ route('service.account.post', $type) }}" ajax-request="lbd" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số lượng</label>
                                    <input type="text" class="form-control" name="amount" id="exampleInputEmail1"
                                        placeholder="Nhập số lượng">
                                </div>
                                @if ($acc->count() > 0)
                                    <button type="submit" class="btn btn-primary btn-block btn-lg">Mua</button>
                                @else
                                    <button type="button" class="btn btn-danger btn-block btn-lg">Hết hàng</button>
                                @endif
                            </form>
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
