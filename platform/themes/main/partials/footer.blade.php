		<footer style=" background-image: url('https://cdn.shopify.com/s/files/1/0108/7370/0415/files/footer_1920X.jpg?v=1582192383');">
            <div class="background" >
              <div class="container-fluid container_footer">
                <div class="footer_infor">
                    <a href="#kkk" class="footer_infor-logo--link" title="logo">
                        <img class="footer_infor-logo--link---item" src="{{ RvMedia::getImageUrl(theme_option('logo_footer')) }}" alt="logo">
                    </a>
                    <div class="footer_infor-item">
                        <div class="address">
                            <div class="address_item">
                                <i class="fas fa-home"></i>
								{{ theme_option('address_shop_sonha') }}
								<br> {{ theme_option('address_shop_Tinh') }}
								
                            </div>
                            <div class="address_call address_item">
                                <i class="fas fa-phone-volume"></i>
                                032 691 2693
                            </div>
                            <div class="address_email address_item">
                                <i class="fas fa-envelope"></i>	{{ theme_option('Email') }} 
                            </div>
                           <div class="address_icon address_item">
                                <a href="#" class="icon_link"> <i class="fas fa-home icon_item"></i></a>
                                <a href="#" class="icon_link"> <i class="fab fa-facebook-square icon_item"></i></a>
                                <a href="#" class="icon_link"> <i class="fab fa-instagram icon_item"></i></a>
                                <a href="#" class="icon_link"> <i class="fab fa-twitter-square icon_item"></i></a>
                           </div>
                        </div>
                    </div>
                </div>
                
                {!!
                    Menu::renderMenuLocation('footer-menu-desktop', [
                        'options' => [],
                        'theme' => true,
                        'view' => 'custom-menu-footer',
                    ])
                !!}  
            <div class="footer_item " >
                <a href="#" class="menu_link" title="" > FanPage </a>
            
			<div class="footer_SocialNetwork" style=" margin-top:1.5rem;">
				<div class="fb-page" data-href="https://www.facebook.com/S&#x103;n-T&#xe2;y-108609077160950/" data-tabs="timeline"
					data-width="300" data-height="100" data-small-header="false" data-adapt-container-width="true"
					data-hide-cover="false" data-show-facepile="false">
					<blockquote cite="https://www.facebook.com/S&#x103;n-T&#xe2;y-108609077160950/" class="fb-xfbml-parse-ignore"><a
							href="https://www.facebook.com/S&#x103;n-T&#xe2;y-108609077160950/">Săn Tây</a></blockquote>
				</div>
			</div>
        </div>
              </div>
              <div class="copyright">
                  <h5 class="copy"> <a href="#" class="copy_item">{{ theme_option('copyright') }}</a> </h5>
              </div>
            </div>
        </footer>
        {!! Theme::footer() !!}
    </body>
</html>

        {!! Theme::footer() !!}
    </body>
</html>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="SfF8mM31"></script>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 5000);
    toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "timeOut": "3000",
    "extendedTimeOut": "3000"
    }

    @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>