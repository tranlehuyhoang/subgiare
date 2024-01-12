@extends('admin.layouts.app')
@section('content')
    <div class="row g-gs">
        <div class="col-xxl-3 col-sm-4">
            <div class="card">
                <div class="nk-ecwg nk-ecwg6">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Tổng đơn hàng hôm nay</h6>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">{{ $orders }}</div>
                                <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3"
                                        id="todayOrders"></canvas></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-4">
            <div class="card">
                <div class="nk-ecwg nk-ecwg6">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Tổng thành viên</h6>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">{{ $users->count() }}</div>
                                <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3"
                                        id="todayRevenue"></canvas></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-4">
            <div class="card">
                <div class="nk-ecwg nk-ecwg6">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Tổng đơn đang chạy</h6>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">{{ $orders_run }}</div>
                                <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3"
                                        id="todayCustomers"></canvas></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-4">
            <div class="card">
                <div class="nk-ecwg nk-ecwg6">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Tổng đơn hoàn thành</h6>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">{{ $orders_success }}</div>
                                <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3"
                                        id="todayVisitors"></canvas></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-4">
            <div class="card">
                <div class="nk-ecwg nk-ecwg6">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Tổng nạp hôm nay</h6>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">{{ number_format($total_recharge) }}</div>
                                <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3"
                                        id="todayVisitors"></canvas></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-4">
            <div class="card">
                <div class="nk-ecwg nk-ecwg6">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Thành viên hôm nay</h6>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">{{ $users_today }}</div>
                                <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3"
                                        id="todayVisitors"></canvas></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-4">
            <div class="card">
                <div class="nk-ecwg nk-ecwg6">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Tổng doanh thu</h6>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">{{ number_format($total_bank) }}</div>
                                <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3"
                                        id="todayVisitors"></canvas></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-sm-4">
            <div class="card">
                <div class="nk-ecwg nk-ecwg6">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Thống kê tháng này</h6>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">{{ $bank_month }}</div>
                                <span>DOANH THU ĐƠN HÀNG</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">{{ $userMonth }}</div>
                                <span>THÀNH VIÊN MỚI</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">{{ $bank_month }}</div>
                                <span>SỐ TIỀN NẠP</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-sm-4">
            <div class="card">
                <div class="nk-ecwg nk-ecwg6">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Thống kê tuần này</h6>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">{{ $bank7 }}</div>
                                <span>DOANH THU ĐƠN HÀNG</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">{{ $user7 }}</div>
                                <span>THÀNH VIÊN MỚI</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">{{ $bank7 }}</div>
                                <span>SỐ TIỀN NẠP</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-sm-4">
            <div class="card">
                <div class="nk-ecwg nk-ecwg6">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Thống kê hôm nay</h6>
                            </div>
                        </div>
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">{{ $total_recharge }}</div>
                                <span>DOANH THU ĐƠN HÀNG</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">{{ $users_today }}</div>
                                <span>THÀNH VIÊN MỚI</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="data">
                            <div class="data-group">
                                <div class="amount">{{ $total_recharge }}</div>
                                <span>SỐ TIỀN NẠP</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-12">
            <div class="card">

                <div class="card-inner">
                <h4 class="card-title">Lịch sử gần đây</h4>
                    <table class="datatable-init table">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Nội dung</th>
                                <th>Hôm nay</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($his as $item)
                                <tr>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->content }}</td>
                                    <td>{{ $item->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
