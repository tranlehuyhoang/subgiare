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
                        <div class="col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Mua tài khoản</h4>

                                </div>
                                <div class="card-body pt-0 BVQ-table">
                                    <div class="table-responsive">
                                        <table class="table  table-bordered text-nowrap mb-0" id="BVQ">
                                            <thead>
                                                <tr>
                                            <th class="wd-15p border-bottom-0">Sản phẩm</th>
                                            <th class="wd-15p border-bottom-0">Hiện còn</th>
                                            <th class="wd-20p border-bottom-0">Đã bán</th>
                                            <th class="wd-15p border-bottom-0">Giá</th>
                                            <th class="wd-20p border-bottom-0">Thông tin</th>
                                            <th class="wd-25p border-bottom-0">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($acc as $item)
                                            @if ($item->type == 'clone')
                                                <tr>
                                                    <td>{{ $item->content }}</td>
                                                    <td><span
                                                            class="badge bg-success">{{ number_format($clone->count()) }}</span>
                                                    </td>
                                                    <td><span
                                                            class="badge bg-danger">{{ number_format($cloneSell->count()) }}</span>
                                                    </td>
                                                    <td>{{ $item->price }} VND</td>
                                                    <td>
                                                        Còn sống : <span
                                                            class="badge bg-success">{{ number_format($cloneLive->count()) }}</span>
                                                        <br>
                                                        Đã die : <span
                                                            class="badge bg-danger">{{ number_format($cloneDie->count()) }}</span>
                                                    </td>
                                                    <td>
                                                        @if ($clone->count() > 0)
                                                            <a href="{{ route('service.account.buy', 'clone') }}"
                                                                class="btn btn-primary"><i class="fa fa-shopping-cart"></i>
                                                                Mua</a>
                                                        @else
                                                            <a href="javascript:void(0);" class="btn btn-danger"><i
                                                                    class="fa fa-shopping-cart"></i> Hết hàng</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endif
                                            @if ($item->type == 'via')
                                                <tr>
                                                    <td>{{ $item->content }}</td>
                                                    <td><span
                                                            class="badge bg-success">{{ number_format($via->count()) }}</span>
                                                    </td>
                                                    <td> <span class="badge bg-danger">
                                                            {{ number_format($viaSell->count()) }}</span></td>
                                                    <td>{{ $item->price }} VND</td>
                                                    <td>
                                                        Còn sống : <span
                                                            class="badge bg-success">{{ number_format($viaLive->count()) }}</span>
                                                        <br>
                                                        Đã die : <span
                                                            class="badge bg-danger">{{ number_format($viaDie->count()) }}</span>
                                                    </td>
                                                    <td>
                                                        @if ($via->count() > 0)
                                                            <a href="{{ route('service.account.buy', 'via') }}"
                                                                class="btn btn-primary"><i class="fa fa-shopping-cart"></i>
                                                                Mua</a>
                                                        @else
                                                            <a href="javascript:void(0);" class="btn btn-danger"><i
                                                                    class="fa fa-shopping-cart"></i> Hết hàng</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endif
                                            @if ($item->type == 'tds')
                                                <tr>
                                                    <td>{{ $item->content }}</td>
                                                    <td><span
                                                            class="badge bg-success">{{ number_format($tds->count()) }}</span>
                                                    </td>
                                                    <td><span
                                                            class="badge bg-danger">{{ number_format($tdsSell->count()) }}</span>
                                                    </td>
                                                    <td>{{ $item->price }} VND</td>
                                                    <td>
                                                        Còn sống : <span
                                                            class="badge bg-success">{{ number_format($tdsLive->count()) }}</span>
                                                        <br>
                                                        Đã die : <span
                                                            class="badge bg-danger">{{ number_format($tdsLive->count()) }}</span>
                                                    </td>
                                                    <td>
                                                        @if ($tds->count() > 0)
                                                            <a class="modal-effect btn btn-primary d-grid mb-3"
                                                                href="{{ route('service.account.buy', 'tds') }}"><i
                                                                    class="fa fa-shopping-cart"></i> Mua ngay</a>
                                                        @else
                                                            <a href="javascript:void(0);" class="btn btn-danger"><i
                                                                    class="fa fa-shopping-cart"></i> Hết hàng</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endif
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
    <!-- CONTAINER CLOSED -->
    </div>
@endsection
@section('script')
    <script src="{{ asset('') }}lbd/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}lbd/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="{{ asset('') }}lbd/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('') }}lbd/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
    <script src="{{ asset('') }}lbd/plugins/datatable/js/jszip.min.js"></script>
    <script src="{{ asset('') }}lbd/plugins/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('') }}lbd/plugins/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('') }}lbd/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="{{ asset('') }}lbd/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="{{ asset('') }}lbd/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="{{ asset('') }}lbd/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="{{ asset('') }}lbd/plugins/datatable/responsive.bootstrap5.min.js"></script>
    <script src="{{ asset('') }}lbd/js/table-data.js"></script>
@endsection
