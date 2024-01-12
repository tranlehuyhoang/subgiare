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
                                      <a href="/recharge/banking" class="btn btn-primary"><img
                                              src="{{ asset('lbd/images/svg/bank.svg') }}" alt="" width="25"
                                              height="25">
                                          Ngân hàng</a>
                                  </div>
                                 
                                  <div class="col-6 d-grid gap-2">
                                      <a href="/recharge/card" class="btn btn-outline-primary"><img
                                              src="{{ asset('lbd/images/svg/card.svg') }}" alt="" width="25"
                                              height="25">
                                          Thẻ cào</a>
                                  </div>
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-12 mb-3">
                                      <h5 class="text-primary">Tỷ giá: 1 VNĐ = 1 coin</h5>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="alert text-white bg-secondary" role="alert">- Bạn vui lòng chuyển khoản
                                          chính xác nội dung để được cộng tiền nhanh nhất.
                                          <br> - Nếu sau 10 phút từ khi tiền trong tài khoản của bạn bị trừ mà vẫn chưa được
                                          cộng tiền vui liên hệ Admin để được hỗ trợ.
                                          <br>- Vui lòng không nạp từ bank khác qua bank này (tránh lỗi).
                                      </div>
                                  </div>
                                  @foreach ($banks as $item)
                                      <div class="mb-3 col-sm-6 mr-auto ml-auto">
                                          <h5 class="text-info text-center"><img src="{{ $item->logo }}" height="45px">
                                          </h5>
                                          <div class="alert text-white bg-success" role="alert">
                                              <div> Số Tài Khoản: <a href="javascript:;"
                                                      onclick="coppy('stk{{ $item->id }}');">
                                                      <b class="text-danger text-right"
                                                          id="stk{{ $item->id }}">{{ $item->account_number }}</b>
                                                  </a></h4>
                                              </div>
                                              <div> Chủ tài khoản: <b class="text-right">{{ $item->account_name }}</b>
                                              </div>
                                              <div> Nạp tối thiểu: <b
                                                      class="text-right">{{ number_format($item->min_bank) }}
                                                      VNĐ</b>
                                              </div>
                                              <div> Chú ý: <b class="text-right">{{ $item->notice }} VNĐ</b>
                                              </div>
                                          </div>
                                      </div>
                                  @endforeach
                                  <div class="col-md-12">
                                      <h5 class="text-primary">Nội dung chuyển khoản</h5>
                                      <div class="alert text-white bg-info mb-3" role="alert">
                                          <h4 class="text-white bg-heading font-weight-semi-bold text-center">
                                              <a href="javascript:;" onclick="coppy('transfer_code');">
                                                  <b id="transfer_code">{{ $site_config->getValueByName('transfer_code') }}
                                                      {{ Auth::user()->id }}</b>
                                                  <i class="fa fa-clone"></i></a>
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="alert text-white bg-warning" role="alert">
                                          <h5 class="text-white bg-heading font-weight-semi-bold">Lưu ý</h5>
                                          <p>- Cố tình nạp dưới mức nạp không hỗ trợ.</p>
                                          <p>-Nạp sai cú pháp hoặc sai số tài khoản sẽ bị trừ 20% phí giao dịch. Vd: nạp
                                              100k
                                              sai nội dung sẽ chỉ nhận được 80k coin và phải liên hệ admin để cộng tay.</p>
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
                                              <th>ID</th>
                                              <th>Thời gian</th>
                                              <th>Ngân Hàng</th>
                                              <th>Mã giao dịch</th>
                                              <th>Người chuyển</th>
                                              <th>Thực nhận</th>
                                              <th>Trạng Thái</th>
                                          </tr>
                                      </thead>
                                      @foreach ($history as $item)
                                          <tr>
                                              <td>{{ $item->id }}</td>
                                              <td>{{ $item->created_at }}</td>
                                              <td>{{ $item->bank_name }}</td>
                                              <td>{{ $item->transid }}</td>
                                              <td>{{ $item->name }}</td>
                                              <td>{{ number_format($item->thucnhan) }}</td>
                                              <td>
                                                  @if ($item->status == 'Success')
                                                      <span class="badge bg-success">{{ $item->status }}</span>
                                                  @else
                                                      <span class="badge bg-danger">{{ $item->status }}</span>
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
      <script src="{{ asset('') }}bvq/plugins/datatable/js/jquery.dataTables.min.js"></script>
      <script src="{{ asset('') }}bvq/plugins/datatable/js/dataTables.bootstrap5.js"></script>
      <script src="{{ asset('') }}bvq/plugins/datatable/js/dataTables.buttons.min.js"></script>
      <script src="{{ asset('') }}bvq/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
      <script src="{{ asset('') }}bvq/plugins/datatable/js/jszip.min.js"></script>
      <script src="{{ asset('') }}bvq/plugins/datatable/pdfmake/pdfmake.min.js"></script>
      <script src="{{ asset('') }}bvq/plugins/datatable/pdfmake/vfs_fonts.js"></script>
      <script src="{{ asset('') }}bvq/plugins/datatable/js/buttons.html5.min.js"></script>
      <script src="{{ asset('') }}bvq/plugins/datatable/js/buttons.print.min.js"></script>
      <script src="{{ asset('') }}bvq/plugins/datatable/js/buttons.colVis.min.js"></script>
      <script src="{{ asset('') }}bvq/plugins/datatable/dataTables.responsive.min.js"></script>
      <script src="{{ asset('') }}bvq/plugins/datatable/responsive.bootstrap5.min.js"></script>
      <script src="{{ asset('') }}bvq/js/table-data.js"></script>
      <script>
          $(document).ready(function() {
              Swal.fire({
                  title: 'Thông báo',
                  text: 'Vui lòng chuyển khoản đúng nội dung, không dùng momo chuyển tiền sang bank, không dùng mbbank chuyển sang viettinbank!',
                  icon: 'warning',
                  confirmButtonText: 'Tôi Đã Hiểu'
              })
          });
      </script>
  @endsection
