@inject('site_config', 'App\Models\site_config')
<!-- ========== Left Sidebar Start ========== -->
<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  
    <div class="app-brand demo ">
      <a href="{{ route('home') }}" class="app-brand-link">
        <span class="app-brand-logo demo">
  <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>icon</title>
    <defs>
      <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
        <stop stop-color="#5A8DEE" offset="0%"></stop>
        <stop stop-color="#699AF9" offset="100%"></stop>
      </linearGradient>
      <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
        <stop stop-color="#FDAC41" offset="0%"></stop>
        <stop stop-color="#E38100" offset="100%"></stop>
      </linearGradient>
    </defs>
    <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
        <g id="Login" transform="translate(519.000000, 244.000000)">
          <g id="Logo" transform="translate(148.000000, 42.000000)">
            <g id="icon" transform="translate(0.000000, 4.000000)">
              <path d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z" id="Combined-Shape" fill="#4880EA"></path>
              <path d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z" id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
              <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
            </g>
          </g>
        </g>
      </g>
    </g>
  </svg>
  
  </span>
        <span class="app-brand-text demo menu-text fw-bold ms-2">STS.Net</span>
      </a>
  
      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
        <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
      </a>
    </div>
  
    
    <div class="menu-divider mt-0  ">
    </div>
  
    <div class="menu-inner-shadow"></div>
  
    
    
    <ul class="menu-inner py-1">
      <!-- Dashboards -->
    </li>
    <li class="menu-item">
        <a href="{{ route('home') }}" class="menu-link">
            <img src="{{ asset('') }}bvq/assets/images/svg/home.svg" class="menu-icon" alt="">
            <div data-i18n="Trang Chủ">Trang Chủ</div>
        </a>
    </li>

    </li>
    <li class="menu-item">
        <a href="{{ route('profile') }}" class="menu-link">
            <img src="{{ asset('') }}bvq/assets/images/svg/user.svg" class="menu-icon" alt="">
            <div data-i18n="Tài Khoản Của Tôi">Tài Khoản Của Tôi</div>
        </a>
    </li>
    </li>
    <li class="menu-item">
        <a href="{{ route('banking') }}" class="menu-link">
            <img src="{{ asset('') }}bvq/assets/images/svg/bank.svg" class="menu-icon" alt="">
            <div data-i18n="Nạp Tiền Tài Khoản">Nạp Tiền Tài Khoản</div>
        </a>
    </li>
   
    </li>
    <li class="menu-item">
        <a href="{{ route('upgrade') }}" class="menu-link">
            <img src="{{ asset('') }}bvq/assets/images/svg/vip.svg" class="menu-icon" alt="">
            <div data-i18n="Cấp Bậc Tài Khoản">Cấp Bậc Tài Khoản</div>
        </a>
    </li>
    </li>
    <li class="menu-item">
        <a href="{{ route('api-document') }}" class="menu-link">
            <img src="{{ asset('') }}bvq/assets/images/svg/code.svg" class="menu-icon" alt="">
            <div data-i18n="Tài liệu tích hợp Api">Tài liệu tích hợp Api</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <img src="{{ asset('') }}bvq/assets/images/svg/account2.svg" class="menu-icon" alt="">
            <div data-i18n="Dịch Vụ Tài Khoản">Dịch Vụ Tài Khoản</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ route('service.account', 'buy') }}" class="menu-link">
                    <div data-i18n="Mua tài khoản"> Mua tài khoản</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('service.account', 'history') }}" class="menu-link">
                    <div data-i18n="Tài Khoản Đã
                    Mua"> Tài Khoản Đã
                        Mua</div>
                </a>
            </li>
        </ul>
    </li>
    @if ($site_config->getValueByName('subgiare') == 'show')
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <img src="{{ asset('') }}bvq/assets/images/svg/facebook.svg" class="menu-icon" alt="">
            <div data-i18n="Dịch Vụ Facebook">Dịch Vụ Facebook</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'like-sale') }}">
                    Tăng like bài viết (sale)
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'like-speed') }}">
                    Tăng like bài viết (speed)
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'like-comment') }}">
                   Tăng like bình luận
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'comment-sale') }}">
                   Tăng bình luận (sale)
                </a>
            </li>
           
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'sub-vip') }}">
                    Tăng sub/follow (vip)
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'sub-quality') }}">
                    Tăng sub/follow (quality)
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'sub-sale') }}">
                    Tăng sub/follow (sale)
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'sub-speed') }}">
                    Tăng sub/follow (speed)
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'like-page-quality') }}">
                    Tăng like/follow page (quality)
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'like-page-sale') }}">
                    Tăng like/follow page (sale)
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'like-page-speed') }}">
                    Tăng like/follow page (speed)
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'eye-live') }}">
                    Tăng mắt live
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'view-video') }}">
                    Tăng view video
                </a>
            </li>
            
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'share-profile') }}">
                    Tăng chia sẻ (profile)
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'member-group') }}">
                   Tăng thành viên nhóm
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'view-story') }}">
                   Tăng view story
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.facebook-v2', 'vip-like') }}">
                    Vip like (profile)
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="#">
                   Đang cập nhật
                </a>
            </li>
        </ul>
    </li>
    @endif
    @if ($site_config->getValueByName('subgiare') == 'show')
    <li class="menu-item">
        <a class="menu-link menu-toggle" href="javascript:void(0);">
            <img src="{{ asset('') }}bvq/assets/images/svg/instagram.svg" class="menu-icon" alt="">
            <div data-i18n="Dịch vụ Instagram">Dịch vụ Instagram</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.instagram-v2', 'like-post') }}">
                    Tăng like bài viết
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.instagram-v2', 'follow') }}">
                   Tăng sub/follow
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="#">
                    Đang cập nhật
                </a>
            </li>
        </ul>
    </li>
    @endif
    @if ($site_config->getValueByName('subgiare') == 'show')
    <li class="menu-item">
        <a class="menu-link menu-toggle" href="javascript:void(0);">
            <img src="{{ asset('') }}bvq/assets/images/svg/tiktok.svg" class="menu-icon" alt="">
            <div data-i18n="Dịch vụ Tiktok">Dịch vụ Tiktok</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.tiktok-v2', 'like') }}">
                    Tăng like (thả tim)
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.tiktok-v2', 'comment') }}">
                    Tăng bình luận
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.tiktok-v2', 'share') }}">
                    Tăng chia sẻ
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.tiktok-v2', 'sub') }}">
                    Tăng sub/follow
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('service.tiktok-v2', 'view') }}">
                    Tăng view video
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="#">
                    Đang cập nhật
                </a>
            </li>
        </ul>
    </li>
    @endif
    <li class="menu-item">
        <a class="menu-link menu-toggle" href="javascript:void(0);">
            <img src="{{ asset('') }}bvq/assets/images/svg/youtube.svg" class="menu-icon" alt="">
            <div data-i18n="Dịch vụ Youtube">Dịch vụ Youtube</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a class="menu-link" href="#">
                    Đang cập nhật
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="#">
                    Đang cập nhật
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-item">
        <a class="menu-link menu-toggle" href="javascript:void(0);">
            <img src="{{ asset('') }}bvq/assets/images/svg/twitter.svg" class="menu-icon" alt="">
            <div data-i18n="Dịch vụ Twitter">Dịch vụ Twitter</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a class="menu-link" href="#">
                    Đang cập nhật
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="#">
                    Đang cập nhật
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="#">
                    Đang cập nhật
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-item">
        <a class="menu-link menu-toggle" href="javascript:void(0);">
            <img src="{{ asset('') }}bvq/assets/images/svg/telegram.svg" class="menu-icon" alt="">
            <div data-i18n="Dịch vụ Telegram">Dịch vụ Telegram</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a class="menu-link" href="#">
                    Đang cập nhật
                </a>
            </li>
        </ul>
    </li>
   
     <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <img src="{{ asset('') }}bvq/assets/images/svg/sp.svg" class="menu-icon" alt="">
            <div data-i18n="Liên Hệ Hỗ Trợ"> Liên Hệ Hỗ Trợ</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ $site_config->getValueByName('facebook_admin') }}" class="menu-link">
                    <div data-i18n="Facebook"> Facebook</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ $site_config->getValueByName('zalo_admin') }}" class="menu-link">
                    <div data-i18n="Zalo"> Zalo</div>
                </a>
            </li>
        </ul>
    </li>
    @if (Auth::user()->level == 'admin')
    </li>
    <li class="menu-item">
        <a href="{{ route('admin.index') }}" class="menu-link">
            <img src="{{ asset('') }}bvq/assets/images/svg/admin.svg" class="menu-icon" alt="">
            <div data-i18n="Trang Quản Trị"> Trang Quản Trị</div>
        </a>
    </li>
    @endif
    </ul>
    
    
  
  </aside>
  <!-- / Menu -->
@yield('content')
