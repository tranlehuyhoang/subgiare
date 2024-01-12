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
                                    <a href="/recharge/banking" class="btn btn-outline-primary"><img
                                            src="{{ asset('lbd/images/svg/bank.svg') }}" alt="" width="25" height="25">
                                        Ngân hàng</a>
                                </div>
                               
                                <div class="col-6 d-grid gap-2">
                                    <a href="/recharge/card" class="btn btn-primary"><img
                                            src="{{ asset('lbd/images/svg/card.svg') }}" alt="" width="25" height="25">
                                        Thẻ cào</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('card.post') }}" ajax-request="lbd" method="POST">
                                            <h4 class="card-title">Tỷ giá: 1 VNĐ = 1 coin</h4>
                                            <div class="row mt-2">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="card_type" class="form-label">Loại thẻ</label>
                                                        {{-- select --}}
                                                        @if ($site_config->getValuebyName('card_type') == 'thesieure')
                                                            <select class="form-control select2 form-select "
                                                                name="card_type" id="card_type"
                                                                data-placeholder="Chọn loại thẻ">
                                                                <option label="Chọn loại thẻ"></option>
                                                                <option value="VIETTEL">Viettel (Chiết khấu
                                                                    {{ $site_config->getValuebyName('card_discount') }}%)
                                                                </option>
                                                                <option value="MOBIFONE">Mobifone (Chiết khấu
                                                                    {{ $site_config->getValuebyName('card_discount') }}%)
                                                                </option>
                                                                <option value="VINAPHONE">Vinaphone (Chiết khấu
                                                                    {{ $site_config->getValuebyName('card_discount') }}%)
                                                                </option>
                                                                <option value="VNMOBI">Vietnamobile (Chiết khấu
                                                                    {{ $site_config->getValuebyName('card_discount') }}%)
                                                                </option>
                                                            </select>
                                                        @elseif ($site_config->getValuebyName('card_type') == 'ttvpay')
                                                            <select class="form-control select2 form-select "
                                                                name="card_type" id="card_type"
                                                                data-placeholder="Chọn loại thẻ">
                                                                <option label="Chọn loại thẻ"></option>
                                                                <option value="Viettel">Viettel (Chiết khấu
                                                                    {{ $site_config->getValuebyName('card_discount') }}%)
                                                                </option>
                                                                <option value="MobiFone">Mobifone (Chiết khấu
                                                                    {{ $site_config->getValuebyName('card_discount') }}%)
                                                                </option>
                                                                <option value="VinaPhone">Vinaphone (Chiết khấu
                                                                    {{ $site_config->getValuebyName('card_discount') }}%)
                                                                </option>
                                                                <option value="Vietnamobile">Vietnamobile (Chiết khấu
                                                                    {{ $site_config->getValuebyName('card_discount') }}%)
                                                                </option>
                                                            </select>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="card_price" class="form-label">Mệnh giá</label>
                                                        {{-- select --}}
                                                        <select class="form-control select2 form-select" name="card_price"
                                                            id="card_price" data-placeholder="Chọn mệnh giá">
                                                            <option label="Chọn loại thẻ"></option>
                                                            <option value="10000">10.000</option>
                                                            <option value="20000">20.000</option>
                                                            <option value="30000">30.000</option>
                                                            <option value="50000">50.000</option>
                                                            <option value="100000">100.000</option>
                                                            <option value="200000">200.000</option>
                                                            <option value="300000">300.000</option>
                                                            <option value="500000">500.000</option>
                                                            <option value="1000000">1.000.000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="seri" class="form-label">Seri</label>
                                                        <input type="number" id="seri" name="seri"
                                                            placeholder="Nhập seri của thẻ" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="code" class="form-label">Mã thẻ</label>
                                                        <input type="number" id="code" name="code"
                                                            placeholder="Nhập mã thẻ của thẻ" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-1">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block btn-lg"><i
                                                            class=" fa fa-paper-plane-o text-danger"></i> Nạp thẻ ngay</button>
                                                </div>
                                            </div>
                                        </form>
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
                                                style="width: 63.9531px;">Loại thẻ</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1"
                                                aria-label="Mã giao dịch: activate to sort column ascending"
                                                style="width: 122.516px;">Mệnh giá</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1"
                                                aria-label="Người chuyển: activate to sort column ascending"
                                                style="width: 134.234px;">Seri</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1"
                                                aria-label="Thực nhận: activate to sort column ascending"
                                                style="width: 101.312px;">Mã thẻ</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1"
                                                aria-label="Nội dung: activate to sort column ascending"
                                                style="width: 211.812px;">Trạng Thái</th>
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
                                                @if ($item->status == '0')
                                                    <span class="badge badge-warning">Chờ duyệt</span>
                                                @elseif ($item->status == '1')
                                                    <span class="badge badge-success">Thành công</span>
                                                @elseif ($item->status == '2')
                                                    <span class="badge badge-danger">Thẻ sai</span>
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
    </div>
    <!-- CONTAINER CLOSED -->
    </div>
@endsection
@section('script')
    <script src="{{ asset('') }}bvq/js/table-data.js"></script>
    <script>
        $(document).ready(function() {
            Swal.fire({
                title: 'Thông báo',
                text: 'Vui lòng chọn đúng mệnh giá thẻ nạp!',
                icon: 'warning',
                confirmButtonText: 'Tôi Đã Hiểu'
            })
        });
    </script>
@endsection
