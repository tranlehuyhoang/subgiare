@inject('site_config', 'App\Models\site_config')
<!-- Page end  -->
</div>



<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
      <div class="mb-2 mb-md-0">
        ©
        <script>
          document.write(new Date().getFullYear());
        </script>
        , hệ thống được thiết kế và vận hành bởi
        <a
        href="{{ $site_config->getValueByName('facebook_admin') }}" target="_blank"
        rel="noopener noreferrer">{{ $site_config->getValueByName('admin_name') }}</a>
      </div>
      <div>
        <a
          href="#"
          target="_blank"
          class="footer-link me-4"
          >Facebook</a
        >
        <a
          href="#"
          target="_blank"
          class="footer-link me-4"
          >Zalo</a
        >
      </div>
    </div>
  </footer>
  

  <div class="content-backdrop fade"></div>
</div>

</div>

</div>


<div class="layout-overlay layout-menu-toggle"></div>


<div class="drag-target"></div>
</div>


        <div class="content-backdrop fade"></div>
    </div>
    
</div>

</div>


<div class="layout-overlay layout-menu-toggle"></div>


<div class="drag-target"></div>
</div>



    <div class="contact-button-group">
        <a role="button" class="contact-head" href="javascript:void(0)">
            <i class="fa fa-comments contact-head-icon"></i>
            <i class="fa fa-times contact-head-icon d-none"></i>
            <div class="contact-head-label">Liên hệ & hỗ trợ</div>
        </a>
        
        <a role="button" class="contact-button zalo-button button-closed" href="{{ $site_config->getValueByName('zalo_admin') }}" target="_blank" rel="nofollow">
            <i aria-hidden="true" class="fa fa-comment button-icon"></i>
            <div class="contact-label">Nhắn tin Zalo</div>
        </a>

        <a role="button" class="contact-button messenger-button button-closed" href="{{ $site_config->getValueByName('facebook_admin') }}" target="_blank" rel="nofollow">
            <i aria-hidden="true" class="fa fa-facebook button-icon"></i>
            <div class="contact-label">Nhắn tin Facebook</div>
        </a> 
        
    </div>





    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <!-- BACK-TO-TOP -->


    <!-- App js -->
    <script src="{{ asset('') }}bvq/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('') }}bvq/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('') }}bvq/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('') }}bvq/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    
    <script src="{{ asset('') }}bvq/assets/vendor/libs/hammer/hammer.js"></script>
    
  
    <script src="{{ asset('') }}bvq/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ asset('') }}bvq/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    
    <script src="{{ asset('') }}bvq/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
  
    <!-- Vendors JS -->
    <script src="{{ asset('') }}bvq/assets/vendor/libs/apex-charts/apexcharts.js"></script>
  
    <!-- Main JS -->
    <script src="{{ asset('') }}bvq/assets/js/main.js"></script>
  
    <!-- Page JS -->
    <script src="{{ asset('') }}bvq/assets/js/dashboards-analytics.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>



    <script src="{{ asset('') }}bvq/assets/js/function.js?"></script>
    <script src="{{ asset('lbd/js/ajax-lbd.js?') }}{{ time() }}"></script>

    @yield('script')
    <script>
        $(document).ready(function() {
            // if (!getCookie('modalSystem')) {
            //     $('#modalSystem').modal('show');
            // }
            $('#modalSystem').modal('show');

        });

        function closeModalSystem() {
            setCookie('modalSystem', true, 1);
            $('#modalSystem').modal('hide');
        }
    </script>
    <script>
        function noticeServer(texxt) {
            $('#noticeServer').show().html(
                ` <div class="alert alert-danger mt-4 bg-danger text-white" role="alert"> <h4>Thông tin máy chủ</h4> - <b>${texxt}</b></div>`
            );
        }
    </script>
    <script>
       
    
        function detailServer(text) {
            $('#detailServer').show().html(`<div class="alert bg-danger text-white" role="alert">
                <h4>Thông tin máy chủ</h4>
                - <b>${text}</b></div>`);
        }
    
        function showDetailServer(server_order) {
            $('.detailServer').remove();
            let elm = server_order.parent().parent();
            if (elm) {
                let detail = server_order.attr('detail');
                $(elm).append(`<div class="alert bg-warning text-white detailServer mt-2 mb-2" role="alert">
                - <b>${detail}</b></div>`);
            }
        }
    
        function resetReaction(server = null) {
            let reactions = $('[name=reaction]');
            let shows = server.attr('reaction-show');
            shows = !shows ? [] : shows.split(',');
            $.each(reactions, function(index, reaction) {
                let elm = $(reaction).parent().parent();
                if (!server.val() || !shows.length) {
                    elm.show();
                } else {
                    if (shows.indexOf($(reaction).val()) >= 0) {
                        elm.show();
                    } else {
                        elm.hide();
                    }
                }
            });
        }
    
        function changeSelect(em, name) {
                let value = $(em).val();
                console.log(value);
                if (value) {
                    let urlSearchParams = new URLSearchParams(window.location.search);
                    let params = Object.fromEntries(urlSearchParams.entries());
                    if (params[name] && params[name] == value) {
                        return;
                    }
                    params[name] = value;
                    let query = new URLSearchParams(params).toString();
                    window.location.href = window.location.pathname + "?" + query;
                }
            }
    </script>
 
       
    <script>
        function bill() {
            let server_order = $('input[name=server_order]:checked');
            let notice = server_order.attr('notice');
            if (!server_order) return;
            noticeServer(notice);
            let amount = server_order.attr('price');
            let payment = $('input[name=amount]').val();
            let total = Math.round(payment * amount) ?? 0;
            $('#payment').html(Intl.NumberFormat().format(total));
        }
        $(document).ready(function() {
            bill();
        });
    </script>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "101622819236727");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v12.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    </body>
    <!-- Bùi Văn Quyết -->

    </html>
