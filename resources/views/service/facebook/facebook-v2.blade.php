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
        <a href="{{ route('service.facebook-v2', $type) }}"
            class="btn btn-primary"><img
                src="{{ asset('lbd/images/svg/order.svg') }}" alt="" width="25" height="25">
            Thêm đơn</a>
    </div>
    <div class="col-6 d-grid gap-2">
        <a href="{{ route('service.facebook-v2.order', $type) }}"
            class="btn btn-outline-primary"><img
                src="{{ asset('lbd/images/svg/list-order.svg') }}" alt="" width="25" height="25">
            Danh sách đơn</a>
    </div>
</div>
</div>
<div class="card-body">
                                
                                    
                                            <form action="{{ route('api.service.facebook-v2', $type) }}"
                                                ajax-request="lbd" method="POST">
                                            
                                                <div class="form-group row mb-3">
                                                    @if ($type == 'like-sale')
                                                    <div class="row">
                                                        <div class="col-xl-3">
                                                                <label for="idpost" class="form-label">Link bài
                                                                    viết</label>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" name="idpost" id="idpost"
                                                                    class="form-control form-control-lg"
                                                                    placeholder="Nhập link bài viết Cần Tăng">
                                                            </div>
                                                        </div>
                                                    </div>
                                              
                                              
                                                    @endif
                                                    @if ( $type == 'like-speed' || $type == 'vip-like' || $type == 'comment-sale' || $type == 'eye-live' || $type == 'share-profile')
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xl-3">
                                                                    <label for="idpost" class="form-label">Nhập Link Bài Viết Facebook</label>
                                                                </div>
                                                                <div class="col-xl-9">
                                                                    <input type="text" name="idpost" id="idpost"
                                                                        class="form-control form-control-lg"
                                                                        onchange="getIDPOST()"
                                                                        placeholder="Nhập ID profile cần tăng, có thể nhập url hệ thống tự lấy ID">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if ($type == 'sub-vip' || $type == 'sub-quality' || $type == 'sub-sale' || $type == 'sub-speed')
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <label for="idpost" class="form-label">ID Facebook</label>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" name="idpost" id="idpost"
                                                                    class="form-control form-control-lg"
                                                                    onchange="getIDPOST()"
                                                                    placeholder="Nhập ID profile cần tăng, có thể nhập url hệ thống tự lấy ID">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                @endif
                                                @if ($type == 'member-group')
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <label for="idgroup" class="form-label">ID group</label>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" name="idgroup" id="idgroup"
                                                                    class="form-control form-control-lg"
                                                                    onchange="getIDPOST()"
                                                                    placeholder="Nhập UID group có thể nhập link">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if ($type == 'view-story')
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <label for="idstory" class="form-label">Link story</label>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" name="idstory" id="idstory"
                                                                    class="form-control form-control-lg"
                                                                    placeholder="Nhập link story">
                                                                <b>Lưu ý: hãy xem cách lấy link story chuẩn: <a
                                                                        href="https://imgur.com/0DXPYsc">Tại đây</a> </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @if ($type == 'like-page-quality' || $type == 'like-page-sale' || $type == 'like-page-speed')
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <label for="idpage" class="form-label">ID page</label>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" name="idpage" id="idpage"
                                                                    class="form-control form-control-lg"
                                                                    onchange="getIDPOST()"
                                                                    placeholder="Nhập UID page có thể nhập link">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @if ($type == 'like-comment')
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <label for="idcomment" class="form-label">ID Comment</label>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="number" name="idcomment" id="idcomment"
                                                                    class="form-control form-control-lg"
                                                                    placeholder="Nhập ID comment cần tăng">
                                                                <b>Lưu ý: Hướng dẫn lấy id comment <a href="javascript:;"
                                                                        onclick="window.open('https://imgur.com/bume4kV')">tại
                                                                        đây</a></b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @if ($type == 'view-video')
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <label for="link_video" class="form-label">Link
                                                                    video</label>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" name="link_video" id="link_video"
                                                                    class="form-control form-control-lg"
                                                                    placeholder="Nhập link video cần tăng">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label for="server" class="form-label">Máy chủ</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            @foreach ($server as $item)
                                                                <div
                                                                    class="custom-control custom-radio custom-control-inline mt-2">
                                                                    <input type="radio" id="server{{ $item->id }}"
                                                                        name="server_order" onchange="bill()"
                                                                        price="{{ $item->rate_server }}"
                                                                        notice="{{ $item->content_server }}"
                                                                        class="custom-control-input" checked
                                                                        value="{{ $item->server_service }}">
                                                                        <label class="form-check-label" for="server{{ $item->id }}">{{ $item->server_service }} 
                                                                            {{ $item->title_server }} <span
                                                                                class="badge bg-success text-white ">
                                                                                {{ $item->rate_server }}  Coin
                                                                                / 1</span>

                                                                                @if ($item->status_server == 'on')
                                                                                
                                                                                <b class="text-warning">{{ __('Họat động') }}</b>
                                                                                @else
                                                                               
                                                                                <b class="text-danger">{{ __('Bảo trì') }}</b>
                                                                                  @endif
                                                                            </label>
                                                                </div>
                                                                <br>
                                                            @endforeach
                                                            <div id="noticeServer"></div>
                                                        </div>
                                                    </div>
                                                </div>


                                                @if ($type == 'comment-sale')
                                                <div class="form-group row mb-3">
                                                    <label for="" class="form-label col-md-3">Bình luận </label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control" name="comment" rows="3" placeholder="Nhập nội dung bình luận, mỗi nội dung 1 dòng"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                                @endif
                                                @if ($type == 'like-sale' || $type == 'like-speed' || $type == 'like-comment')
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <label for="reaction" class="form-label">Cảm xúc</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div
                                                                    class="custom-control custom-radio custom-control-inline mt-2">
                                                                    <input type="radio" id="reaction1" name="reaction"
                                                                        class="custom-control-input" checked
                                                                        value="like">
                                                                    <label class="custom-control-label" for="reaction1">
                                                                        <span
                                                                            class="badge bg-primary">{{ __('Like') }}</span>
                                                                    </label>
                                                                </div>
                                                                <div
                                                                    class="custom-control custom-radio custom-control-inline mt-2">
                                                                    <input type="radio" id="reaction2" name="reaction"
                                                                        class="custom-control-input" value="love">
                                                                    <label class="custom-control-label" for="reaction2">
                                                                        <span
                                                                            class="badge bg-primary">{{ __('Love') }}</span>
                                                                    </label>
                                                                </div>
                                                                <div
                                                                    class="custom-control custom-radio custom-control-inline mt-2">
                                                                    <input type="radio" id="reaction3" name="reaction"
                                                                        class="custom-control-input" value="haha">
                                                                    <label class="custom-control-label" for="reaction3">
                                                                        <span
                                                                            class="badge bg-primary">{{ __('Haha') }}</span>
                                                                    </label>
                                                                </div>
                                                                <div
                                                                    class="custom-control custom-radio custom-control-inline mt-2">
                                                                    <input type="radio" id="reaction4" name="reaction"
                                                                        class="custom-control-input" value="wow">
                                                                    <label class="custom-control-label" for="reaction4">
                                                                        <span
                                                                            class="badge bg-primary">{{ __('Wow') }}</span>
                                                                    </label>
                                                                </div>
                                                                <div
                                                                    class="custom-control custom-radio custom-control-inline mt-2">
                                                                    <input type="radio" id="reaction5" name="reaction"
                                                                        class="custom-control-input" value="sad">
                                                                    <label class="custom-control-label" for="reaction5">
                                                                        <span
                                                                            class="badge bg-primary">{{ __('Sad') }}</span>
                                                                    </label>
                                                                </div>
                                                                <div
                                                                    class="custom-control custom-radio custom-control-inline mt-2">
                                                                    <input type="radio" id="reaction6" name="reaction"
                                                                        class="custom-control-input" value="angry">
                                                                    <label class="custom-control-label" for="reaction6">
                                                                        <span
                                                                            class="badge bg-primary">{{ __('Angry') }}</span>
                                                                    </label>
                                                                </div>
                                                                <div class="mt-3" id="show_Reaction"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if ($type == 'like-speed' || $type == 'like-comment')
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <label for="speed" class="form-label">Tốc độ</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div
                                                                    class="custom-control custom-radio custom-control-inline mt-2">
                                                                    <input type="radio" id="speed" name="speed"
                                                                        class="custom-control-input" value="fast"
                                                                        checked>
                                                                    <label class="custom-control-label" for="speed">
                                                                        Nhanh (lên nhanh thì sẽ bị nhanh tụt nhé.)
                                                                    </label>
                                                                </div><br>
                                                                <div
                                                                    class="custom-control custom-radio custom-control-inline mt-2">
                                                                    <input type="radio" id="speed3" name="speed"
                                                                        class="custom-control-input" value="slow">
                                                                    <label class="custom-control-label" for="speed3">
                                                                        Chậm (nên chọn cho ổn định, sẽ không chậm lắm đâu
                                                                        nhé)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if ($type == 'like-sale' || $type == 'like-speed' || $type == 'like-comment' || $type == 'comment-sale' || $type == 'sub-vip' || $type == 'sub-quality' || $type == 'sub-sale' || $type == 'sub-speed' || $type == 'like-page-quality' || $type == 'like-page-sale' || $type == 'like-page-speed' || $type == 'view-video' || $type == 'share-profile' || $type == 'member-group' || $type == 'view-story')
                                                <div class="form-group row mb-3">
                                                    <label for="" class="form-label col-md-3">Số lượng </label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control mb-3" name="amount" onkeyup="bill()"
                                                            value="100" placeholder="Nhập số lượng cần tăng">
                                                        <div class="alert text-white bg-info text-center" role="alert">
                                    <strong>Tổng tiền = (Số lượng) x (Giá 1 Dịch Vụ)</strong>
                                               </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @if ($type == 'eye-live')
                                                <div class="form-group row mb-3">
                                                    <label for="" class="form-label col-md-3">Số mắt </label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="amount" onkeyup="bill()" value="50"
                                                            placeholder="Nhập số lượng cần tăng">
                                                    </div>
                                                </div>
                                            
                                                <div class="form-group row mb-3">
                                                    <label for="" class="form-label col-md-3">Số phút </label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control mb-3" name="minutes" onkeyup="bill()"
                                                            value="50" placeholder="Nhập số phút cần tăng">
                                                            <div class="alert text-white bg-info text-center" role="alert">
                                                                <strong>Tổng tiền = (Số lượng) x (Số phút) x (Giá 1 mắt)</strong>
                                                    </div>
                                                </div>
                            </div>
                                                @endif
                                                @if ($type == 'view-video')
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <label for="time" class="form-label">Thời gian</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div
                                                                    class="custom-control custom-radio custom-control-inline mt-2">
                                                                    <input type="radio" id="time" name="time"
                                                                        class="custom-control-input" checked
                                                                        value="3">
                                                                    <label class="custom-control-label" for="time">
                                                                        Xem trong 3 giây
                                                                    </label>
                                                                </div>
                                                                <div
                                                                    class="custom-control custom-radio custom-control-inline mt-2">
                                                                    <input type="radio" id="time1" name="time"
                                                                        class="custom-control-input" checked
                                                                        value="10">
                                                                    <label class="custom-control-label" for="time1">
                                                                        Xem trong 10 giây
                                                                    </label>
                                                                </div>
                                                                <div
                                                                    class="custom-control custom-radio custom-control-inline mt-2">
                                                                    <input type="radio" id="time2" name="time"
                                                                        class="custom-control-input" checked
                                                                        value="15">
                                                                    <label class="custom-control-label" for="time2">
                                                                        Xem trong 15 giây
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif

                                                

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label for="note" class="form-label">Ghi chú</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <textarea name="note" id="note" cols="30" rows="4" class="form-control"
                                                                placeholder="Nhập ghi chú nếu cần"></textarea>
                                                            <div class="mt-3">
                                                                <div class="alert bg-danger text-white" role="alert">
                                                                    <h4>Vui lòng đọc tránh mất tiền</h4>
                                                                    - <b>Mua bằng ID Facebook đã mở chế độ công khai, có nút
                                                                        theo dõi, có hỗ trợ tăng
                                                                        được cho tài khoản dưới 18+</b>.
                                                                </div>

                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <div class="col-sm-12 text-center">
                                                                    <div class="alert text-white bg-success " role="alert">
                                                <h3 class="font-bold text-white">Tổng thanh toán: <span class="bold green"><span
                                                                                    id="payment" class="text-danger">0</span> coin</span></h3>
                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-grid gap-2">
                                                                <button type="submit"class="btn btn-primary"
                                                                show="Bạn có muốn thanh toán đơn hàng?, chúng tôi sẽ không hoàn tiền với đơn đã thanh toán."
                                                               ><img
                                                                    src="{{ asset('lbd/images/svg/buy.svg') }}" alt=""
                                                                    width="30" height="30"> Mua
                                                                ngay</button>
                                                            </div>
                                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                                           

                         
                                   
                @endsection
                @if ($type == 'like-sale' || $type == 'like-speed' || $type == 'like-comment')
                    @section('script')
                        <script>
                            $(document).ready(function() {
                                var like = "{{ asset('lbd/images/service/like.png') }}";
                                var love = "{{ asset('lbd/images/service/love.png') }}";
                                var care = "{{ asset('lbd/images/service/care.png') }}";
                                var haha = "{{ asset('lbd/images/service/haha.png') }}";
                                var wow = "{{ asset('lbd/images/service/wow.png') }}";
                                var sad = "{{ asset('lbd/images/service/sad.png') }}";
                                var angry = "{{ asset('lbd/images/service/angry.png') }}";
                                var reaction = $('input[name="reaction"]:checked').val();
                                if (reaction == 'like') {
                                    $('#show_Reaction').html('<img src="' + like + '" ">');
                                } else if (reaction == 'love') {
                                    $('#show_Reaction').html('<img src="' + love + '" ">');
                                } else if (reaction == 'care') {
                                    $('#show_Reaction').html('<img src="' + care + '" ">');
                                } else if (reaction == 'haha') {
                                    $('#show_Reaction').html('<img src="' + haha + '" ">');
                                } else if (reaction == 'wow') {
                                    $('#show_Reaction').html('<img src="' + wow + '" ">');
                                } else if (reaction == 'sad') {
                                    $('#show_Reaction').html('<img src="' + sad + '" ">');
                                } else if (reaction == 'angry') {
                                    $('#show_Reaction').html('<img src="' + angry + '" ">');
                                }
                                $('input[name="reaction"]').change(function() {
                                    reaction = $('input[name="reaction"]:checked').val();
                                    if (reaction == 'like') {
                                        $('#show_Reaction').html('<img src="' + like + '" ">');
                                    } else if (reaction == 'love') {
                                        $('#show_Reaction').html('<img src="' + love + '" ">');
                                    } else if (reaction == 'haha') {
                                        $('#show_Reaction').html('<img src="' + haha + '" ">');
                                    } else if (reaction == 'wow') {
                                        $('#show_Reaction').html('<img src="' + wow + '" ">');
                                    } else if (reaction == 'sad') {
                                        $('#show_Reaction').html('<img src="' + sad + '" ">');
                                    } else if (reaction == 'angry') {
                                        $('#show_Reaction').html('<img src="' + angry + '" ">');
                                    }
                                });
                            });
                        </script>
                    @endsection
                @endif
                @if ($type == 'comment-sale' || $type == 'comment-speed')
                    @section('script')
                        <script>
                            $(document).ready(function() {
                                $('#comment').keyup(function() {
                                    var comment = $(this).val();
                                    var lines = comment.split('\n').length;
                                    let prices = $('input[name=server_order]:checked').attr('price');
                                    var amount = Math.round(lines * prices) ?? 0;
                                    $('#amount').html(lines);
                                    $('#payment').html(Intl.NumberFormat().format(amount));
                                });
                            });
                        </script>
                    @endsection
                @endif
