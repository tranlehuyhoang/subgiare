@inject('site_config', 'App\Models\site_config')
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
                                <a href="{{ route('service.tiktok-v2', $type) }}" class="btn btn-outline-primary"><img
                                        src="{{ asset('lbd/images/svg/order.svg') }}" alt="" width="25"
                                        height="25">
                                    Thêm đơn</a>
                            </div>
                            <div class="col-6 d-grid gap-2">
                                <a href="{{ route('service.tiktok-v2.order', $type) }}" class="btn btn-primary"><img
                                        src="{{ asset('lbd/images/svg/list-order.svg') }}" alt="" width="25"
                                        height="25">
                                    Danh sách đơn</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Danh Sách Đơn</h4>

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
                                                        aria-label="Mã đơn: activate to sort column ascending"
                                                        style="width: 178.25px;">Mã đơn</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Link buff: activate to sort column ascending"
                                                        style="width: 178.25px;">Link </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="server buff: activate to sort column ascending"
                                                        style="width: 178.25px;">Máy chủ</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Tương Tác: activate to sort column ascending"
                                                        style="width: 178.25px;">Tương tác</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Số lượng: activate to sort column ascending"
                                                        style="width: 178.25px;">Số lượng</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="to success: activate to sort column ascending"
                                                        style="width: 178.25px;">Bắt đầu</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="to success: activate to sort column ascending"
                                                        style="width: 178.25px;">Đã tăng</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="to money: activate to sort column ascending"
                                                        style="width: 178.25px;">Giá</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="to money: activate to sort column ascending"
                                                        style="width: 178.25px;">Tổng thanh toán</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="To status: activate to sort column ascending"
                                                        style="width: 178.25px;">Trạng thái</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->created_at }}</td>
                                                        <td>{{ $item->id_order }}</td>
                                                        <td>{{ $item->link_order }}</td>
                                                        <td>{{ $item->server_order }}</td>
                                                        <td>{{ $item->interactive }}</td>
                                                        <td>{{ $item->amount }}</td>
                                                        <td>{{ $item->startWith }}</td>
                                                        <td>{{ $item->buff }}</td>
                                                        <td>{{ $item->price }}</td>
                                                        <td>{{ $item->total_money }}</td>
                                                        <td>
                                                            @if ($item->status == 'Start')
                                                                <span class="badge bg-primary">Đang chạy</span>
                                                            @elseif ($item->status == 'Active')
                                                                <span class="badge bg-primary">Đang hoạt động</span>
                                                            @elseif ($item->status == 'Pending')
                                                                <span class="badge bg-warning">Chờ xử lý</span>
                                                            @elseif ($item->status == 'Success')
                                                                <span class="badge bg-success">Đã hoàn thành</span>
                                                            @elseif ($item->status == 'Cancel')
                                                                <span class="badge bg-danger">Đã hủy</span>
                                                            @endif
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
