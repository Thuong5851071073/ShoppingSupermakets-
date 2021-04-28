       	<!-- FOOTER -->
		{{-- <footer style=" background-image: url('https://cdn.shopify.com/s/files/1/0108/7370/0415/files/footer_1920X.jpg?v=1582192383');>
			
			<!-- CONTAINER -->
			<div class="container" data-animated='fadeInUp'>
				
				<!-- ROW -->
				<div class="row">
					
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 col-ss-12 padbot30">
						<h4>Contacts</h4>
						<div class="foot_address"><span>Glammy Shop</span>55 Ney York 6515, Grand Tower</div>
						<div class="foot_phone"><a href="tel:1 800 888 2828" >1 800 888 2828</a></div>
						<div class="foot_mail"><a href="mailto:info@glamyshop.com" >info@glamyshop.com</a></div>
						<div class="foot_live_chat"><a href="javascript:void(0);" ><i class="fa fa-comment-o"></i> Live chat</a></div>
					</div>
					
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 col-ss-12 padbot30">
						<h4>Information</h4>
						<ul class="foot_menu">
							<li><a href="about.html" >About Us</a></li>
							<li><a href="gallery.html" >Gallery<span>new</span></a></li>
							<li><a href="javascript:void(0);" >Delivery</a></li>
							<li><a href="javascript:void(0);" >Privacy police</a></li>
							<li><a href="blog.html" >Blog</a></li>
							<li><a href="faq.html" >Faqs</a></li>
							<li><a href="contacts.html" >countact us</a></li>
						</ul>
					</div>
					
					<div class="respond_clear_480"></div>
					
					<div class="col-lg-4 col-md-4 col-sm-6 padbot30">
						<h4>About shop</h4>
						<p>We ask for your name, telephone number, home address, email address and age for competitions, prize draws or newsletter sign ups. When a purchase is made on our site, in addition to the above, we also ask for delivery address, and payment method details.</p>
						<p>We may obtain information about your usage of our website to help us develop and improve it further through online surveys and other requests.</p>
					</div>
					
					<div class="respond_clear_768"></div>
					
					<div class="col-lg-4 col-md-4 padbot30">
						<h4>Newsletter</h4>
						<form class="newsletter_form clearfix" action="javascript:void(0);" method="get">
							<input type="text" name="newsletter" value="Enter E-mail & Get 10% off" onFocus="if (this.value == 'Enter E-mail & Get 10% off') this.value = '';" onBlur="if (this.value == '') this.value = 'Enter E-mail & Get 10% off';" />
							<input class="btn newsletter_btn" type="submit" value="SIGN UP">
						</form>
						
						<h4>we are in social networks</h4>
						<div class="social">
							<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
							<a href="javascript:void(0);" ><i class="fa fa-facebook"></i></a>
							<a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a>
							<a href="javascript:void(0);" ><i class="fa fa-pinterest-square"></i></a>
							<a href="javascript:void(0);" ><i class="fa fa-tumblr"></i></a>
							<a href="javascript:void(0);" ><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
			
			<!-- COPYRIGHT -->
			<div class="copyright">
				
				<!-- CONTAINER -->
				<div class="container clearfix">
					<div class="foot_logo"><a href="index.html" ><img src="images/foot_logo.png" alt="" /></a></div>
					
					<div class="copyright_inf">
						<span>Glammy Shop© 2014</span> |
						<span>Theme by Anna Balashova</span> |
						<a class="back_top" href="javascript:void(0);" >Back to Top <i class="fa fa-angle-up"></i></a>
					</div>
				</div><!-- //CONTAINER -->
			</div><!-- //COPYRIGHT -->
		</footer><!-- //FOOTER --> --}}

		<footer style=" background-image: url('https://cdn.shopify.com/s/files/1/0108/7370/0415/files/footer_1920X.jpg?v=1582192383');">
            <div class="background" >
              <div class="container container_footer">
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
                                <a href="#" class="icon_link"> <i class="fas fa-home icon_item"></i></a>
                                <a href="#" class="icon_link"> <i class="fas fa-home icon_item"></i></a>
                                <a href="#" class="icon_link"> <i class="fas fa-home icon_item"></i></a>
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
            
                {{-- <div class="footer_menu">
                       
                </div> --}}
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
