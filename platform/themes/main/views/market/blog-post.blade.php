

<!-- PRELOADER -->
<div id="preloader"><img src="images/preloader.gif" alt="" /></div>
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">
	
		<!-- BREADCRUMBS -->
		<section class="breadcrumb parallax margbot30"></section>
		<!-- //BREADCRUMBS -->
		<!-- PAGE HEADER -->
		@includeIf('theme.main::partials.breadcrumbs')
		<!-- BLOG BLOCK -->
		<section class="blog">
			
			<!-- CONTAINER -->
			<div class="container">
			
				<!-- ROW -->
				<div class="row">
					
					<!-- BLOG LIST -->
					<div class="col-lg-9 col-md-9 col-sm-9">
						
						<article class="post blog_post clearfix margbot20" data-appear-top-offset='-100' data-animated='fadeInUp'>
							<div class="post_title" href="blog-post.html" >{{ $contentPost->name }}</div>
							<ul class="post_meta">
								<li><i class="fa fa-user"></i><a href="javascript:void(0);" >{{ $contentPost->author->getFullName() }}</a></li>
								<li><i class="fa fa-comments"></i>Bình luận <span class="sep">|</span> 15</li>
								<li><i class="fa fa-eye"></i>Lượt xem <span class="sep">|</span> 259</li>
							</ul>
							<div class="post_large_image">
								<div class="recent_post_date">{{ date_format($contentPost->created_at,"d") }}<span>{{ substr(date_format($contentPost->created_at, "F"), 0, 3) }}</span></div>
								<img src="{{ RvMedia::getImageUrl($contentPost->image, 'post_detail', false, RvMedia::getDefaultImage()) }}" alt="" />
							</div>
							
							<div class="blog_post_content">
								<h3>{{ $contentPost->description }}</h3>

								{!! $contentPost->content !!}
								
								{{-- <h2>Single Post Whit Sidebar</h2>
								
								<p>The cousin had a point. Consider Casasola’s spring/ summer 2014 lineup, which, inspired by the work of Brazilian constructivist master Lygia Clark, explores the duality of discipline and sensuality: There is something decidedly not of this century about the evening dresses—and they are almost all evening dresses, with a few soigné jumpsuits and pencil skirts in the mix—that she crafts from unembellished satins, cadys, and organzas, with hems cropped just above the ankle. “A lot of people think it makes you look shorter,” says Casasola of her preferred silhouette. “But it’s the other way around.”</p>
								
								<p>This courage of conviction allows such friends of the designer as Caroline Issa and Brazilian princess Paola Orléans e Bragança and other fans—like, say, Gwyneth Paltrow—to stand tall in her designs. (The five-inch pumps she collaborated on with Manolo Blahnik also help). Casasola has a Central Saint Martins degree and design work at Lanvin on her résumé, but she says she learned the most from her seamstress grandmother, who never left the house in anything but a maxi-length. The lesson, she says: “Luxury is simplicity.”</p>
								
								<blockquote>
									<i>Eveningwear was my starting point for my first, AW 2012 collection, because my sense of what was out there tended to reference a different generation. I went for a kind of Madame Gres-meets-1990s Helmut Lang; or a certain mix of elegance and attitude.</i>
								</blockquote>
								
								<p>You could say Barbara Casasola has had a charmed run. After a critically acclaimed London Fashion Week debut last September, the Porto Alegre, Brazil–born, London-based upstart was tapped to be the sole women’s wear presenter at Pitti Uomo, the biannual menswear trade show in Florence, an honor previously accorded to Peter Pilotto and Rodarte. But the 29-year-old wasn’t always sure she’d have industry support—or even familial understanding. “When my cousin saw my first collection, she started laughing—hard,” the designer says sheepishly. She was like, “It looks like grandma’s clothes!”</p> --}}
							</div>
							
						</article>
						
						<div class="shared_tags_block clearfix" data-appear-top-offset='-100' data-animated='fadeInUp'>
							<div class="pull-left post_tags">
								<a href="javascript:void(0);" >DRESS</a>
								<a href="javascript:void(0);" >Sweaters</a>
								<a href="javascript:void(0);" >MATERNITY</a>
								<a href="javascript:void(0);" >SHIRTS & TOPS</a>
							</div>
							
							<div class="pull-right tovar_shared clearfix">
								<p>Share item with friends</p>
								<ul>
									<li><a class="facebook" href="javascript:void(0);" ><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
									<li><a class="linkedin" href="javascript:void(0);" ><i class="fa fa-linkedin"></i></a></li>
									<li><a class="google-plus" href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
									<li><a class="tumblr" href="javascript:void(0);" ><i class="fa fa-tumblr"></i></a></li>
								</ul>
							</div>
						</div>
						
						
						<!-- COMMENTS -->
						<div id="comments" data-appear-top-offset='-100' data-animated='fadeInUp'>
							<h2>Bình luận (3)</h2>
							<ol>
								<li>
									<div class="pull-left avatar"><a href="javascript:void(0);"><img src="images/avatar1.jpg" alt="" /></a></div>
									<div class="comment_right">
										<div class="comment_info">
											<a class="comment_author" href="javascript:void(0);" >Anna Balashova</a>
											<a class="comment_reply" href="javascript:void(0);" ><i class="fa fa-share"></i> Trả lời</a>
											<div class="clear"></div>
											<div class="comment_date">13 January 2014</div>
										</div>
										Thank you so much for putting this together Jeremy. Most of these seem like common sense but it is amazing how many times I see new employees having the worst days of their life because managers/leaders don’t want to be “bothered” with the new guy.
									</div>
									<div class="clear"></div>
									<ul>
										<li>
											<div class="pull-left avatar"><a href="javascript:void(0);"><img src="images/avatar2.jpg" alt="" /></a></div>
											<div class="comment_right">
												<div class="comment_info">
													<a class="comment_author" href="javascript:void(0);" >Anna Balashova</a>
													<a class="comment_reply" href="javascript:void(0);" ><i class="fa fa-share"></i> Reply</a>
													<div class="clear"></div>
													<div class="comment_date">13 January 2014</div>
												</div>
												Thank you so much for putting this together Jeremy. Most of these seem like common sense but it is amazing how many times I see new employees having the worst days of their life because managers/leaders don’t want to be “bothered” with the new guy.
											</div>
											<div class="clear"></div>
										</li>
									</ul>
								</li>
								<li>
									<div class="pull-left avatar"><a href="javascript:void(0);"><img src="images/avatar3.jpg" alt="" /></a></div>
									<div class="comment_right">
										<div class="comment_info">
											<a class="comment_author" href="javascript:void(0);" >Anna Balashova</a>
											<a class="comment_reply" href="javascript:void(0);" ><i class="fa fa-share"></i> Reply</a>
											<div class="clear"></div>
											<div class="comment_date">13 January 2014</div>
										</div>
										Thank you so much for putting this together Jeremy. Most of these seem like common sense but it is amazing how many times I see new employees having the worst days of their life because managers/leaders don’t want to be “bothered” with the new guy.
									</div>
									<div class="clear"></div>
								</li>
							</ol>
						</div><!-- //COMMENTS -->
						
						
						<!-- LEAVE A COMMENT -->
						<div id="comment_form" data-appear-top-offset='-100' data-animated='fadeInUp'>
							<h2>Để lại bình luận</h2>
							<div class="comment_form_wrapper">
								<form action="javascript:void(0);" method="post">
									<input type="text" name="name" value="Name" value="{{ old('name') }}" placeholder="Tên của bạn" />
									<input class="email" type="text" name="email" value="{{ old('email') }}" placeholder="Email của bạn" /></br>
									<textarea name="message" placeholder="Bình luận"></textarea>
									<div class="clear"></div>
									<span class="comment_note">Tài khoản email của bạn sẽ không hiển thị *</span>
									<input type="submit" value="Gửi" />
									<div class="clear"></div>
								</form>
							</div>
						</div><!-- //LEAVE A COMMENT -->
						
						
						<article class="post margbot40 clearfix" data-appear-top-offset='-100' data-animated='fadeInUp'>
							<a class="post_large_image pull-left" href="blog-post.html" >
								<div class="recent_post_date">24<span>feb</span></div>
								<img src="images/blog/5.jpg" alt="" />
							</a>
							<a class="post_title" href="blog-post.html" >DIY Beauty: The Best Use of Valentine's Day Roses</a>
							<div class="post_content">The beauty of self-hosted WordPress, is that you can build your site however you like, want to add forums to your website? Done. Want to add a ecommerce to your blog? Done. The beauty of self-hosted WordPress, is that you can build your site however you like, want to add forums to your website? Done. Want to add a ecommerce to your blog? Done.</div>
							<ul class="post_meta">
								<li><i class="fa fa-user"></i><a href="javascript:void(0);" >Anna Balashova</a></li>
								<li><i class="fa fa-comments"></i>Commetcs <span class="sep">|</span> 15</li>
								<li><i class="fa fa-eye"></i>views <span class="sep">|</span> 259</li>
							</ul>
						</article>
						
						<article class="post margbot40 clearfix" data-appear-top-offset='-100' data-animated='fadeInUp'>
							<a class="post_large_image pull-left" href="blog-post.html" >
								<div class="recent_post_date">08<span>Oct</span></div>
								<img src="images/blog/6.jpg" alt="" />
							</a>
							<a class="post_title" href="blog-post.html" >Editor's Style: Dobrina Zhekova's Touch of Sparkle</a>
							<div class="post_content">The beauty of self-hosted WordPress, is that you can build your site however you like, want to add forums to your website? Done. Want to add a ecommerce to your blog? Done. The beauty of self-hosted WordPress, is that you can build your site however you like, want to add forums to your website? Done. Want to add a ecommerce to your blog? Done.</div>
							<ul class="post_meta">
								<li><i class="fa fa-user"></i><a href="javascript:void(0);" >Anna Balashova</a></li>
								<li><i class="fa fa-comments"></i>Commetcs <span class="sep">|</span> 15</li>
								<li><i class="fa fa-eye"></i>views <span class="sep">|</span> 259</li>
							</ul>
						</article>
					</div><!-- //BLOG LIST -->
					
					
					<!-- SIDEBAR -->
					<div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 padbot50">
						
						<!-- WIDGET SEARCH -->
						<div class="sidepanel widget_search">
							<form class="search_form" action="javascript:void(0);" method="get" name="search_form">
								<input type="text" name="Search..." value="Search..." onFocus="if (this.value == 'Search...') this.value = '';" onBlur="if (this.value == '') this.value = 'Search...';" />
							</form>
						</div><!-- //WIDGET SEARCH -->
						
						<!-- CATEGORIES -->
						<div class="sidepanel widget_categories">
							<h3>BLOG CATEGORIES</h3>
							<ul>
								<li><a href="javascript:void(0);" >Sweaters</a></li>
								<li><a href="javascript:void(0);" >SHIRTS &amp; TOPS</a></li>
								<li><a href="javascript:void(0);" >KNITS &amp; TEES</a></li>
								<li><a href="javascript:void(0);" >PANTS</a></li>
								<li><a href="javascript:void(0);" >DENIM</a></li>
								<li><a href="javascript:void(0);" >DRESSES</a></li>
								<li><a href="javascript:void(0);" >Maternity</a></li>
							</ul>
						</div><!-- //CATEGORIES -->
						
						<!-- NEWSLETTER FORM WIDGET -->
						<div class="sidepanel widget_newsletter">
							<div class="newsletter_wrapper">
								<h3>NEWSLETTER</h3>
								<form class="newsletter_form clearfix" action="javascript:void(0);" method="get">
									<input type="text" name="newsletter" value="Enter E-mail & Get 10% off" onFocus="if (this.value == 'Enter E-mail & Get 10% off') this.value = '';" onBlur="if (this.value == '') this.value = 'Enter E-mail & Get 10% off';" />
									<input class="btn newsletter_btn" type="submit" value="Sign up & get 10% off">
								</form>
							</div>
						</div><!-- //NEWSLETTER FORM WIDGET -->
						
						<!-- WIDGET POPULAR POSTS -->
						<div class="sidepanel widget_popular_posts">
							<h3>POPULAR POSTS</h3>
							<ul>
								<li class="widget_popular_post_item clearfix">
									<a class="widget_popular_post_img" href="blog-post.html" ><img src="images/blog/popular1.jpg" alt="" /></a>
									<a class="widget_popular_post_title" href="blog-post.html" >New Fashion Vintage Double Breasted Trench Long</a>
									<span class="widget_popular_post_date">13 January 2014</span>
								</li>
								<li class="widget_popular_post_item clearfix">
									<a class="widget_popular_post_img" href="blog-post.html" ><img src="images/blog/popular2.jpg" alt="" /></a>
									<a class="widget_popular_post_title" href="blog-post.html" >In the Kitchen with…The New Potato</a>
									<span class="widget_popular_post_date">10 January 2014</span>
								</li>
								<li class="widget_popular_post_item clearfix">
									<a class="widget_popular_post_img" href="blog-post.html" ><img src="images/blog/popular3.jpg" alt="" /></a>
									<a class="widget_popular_post_title" href="blog-post.html" >2013 Hot Women thicken fleece Warm Coat Lady</a>
									<span class="widget_popular_post_date">5 January 2014</span>
								</li>
							</ul>
						</div><!-- //WIDGET POPULAR POSTS -->
						
						<!-- WIDGET POPULAR TAGS -->
						<div class="sidepanel widget_tags">
							<h3>Popular Tags</h3>
							
							<a href="javascript:void(0);" >DRESS</a>
							<a href="javascript:void(0);" >Sweaters</a>
							<a href="javascript:void(0);" >MATERNITY</a>
							<a href="javascript:void(0);" >SHIRTS & TOPS</a>
							<a href="javascript:void(0);" >BEAUTY</a>
							<a href="javascript:void(0);" >SHOP</a>
							<a href="javascript:void(0);" >Jackets & Blazers</a>
							<a href="javascript:void(0);" >Outerwear</a>
						</div><!-- //WIDGET POPULAR TAGS -->
						
						<!-- WIDGET BEST SELLERS -->
						<div class="sidepanel widget_best_sellers">
							<h3>BEST SELLERS</h3>
							
							<ul class="tovar_items_small">
								<li class="clearfix">
									<img class="tovar_item_small_img" src="images/tovar/women/1.jpg" alt="" />
									<a href="product-page.html" class="tovar_item_small_title">Embroidered bib peasant top</a>
									<span class="tovar_item_small_price">$88.00</span>
								</li>
								<li class="clearfix">
									<img class="tovar_item_small_img" src="images/tovar/women/2.jpg" alt="" />
									<a href="product-page.html" class="tovar_item_small_title">Merino tippi sweater in geometric</a>
									<span class="tovar_item_small_price">$67.00</span>
								</li>
								<li class="clearfix">
									<img class="tovar_item_small_img" src="images/tovar/women/3.jpg" alt="" />
									<a href="product-page.html" class="tovar_item_small_title">Merino triple-stripe elbow-patch sweater</a>
									<span class="tovar_item_small_price">$94.00</span>
								</li>
							</ul>
						</div><!-- //WIDGET BEST SELLERS -->
						
						<!-- BANNERS WIDGET -->
						<div class="widget_banners">
							<a class="banner nobord margbot10" href="javascript:void(0);" ><img src="images/tovar/banner10.jpg" alt="" /></a>
							<a class="banner nobord margbot10" href="javascript:void(0);" ><img src="images/tovar/banner9.jpg" alt="" /></a>
							<a class="banner nobord margbot10" href="javascript:void(0);" ><img src="images/tovar/banner8.jpg" alt="" /></a>
						</div><!-- //BANNERS WIDGET -->
					</div><!-- //SIDEBAR -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //BLOG BLOCK -->
		
	
		<!-- FOOTER -->
		{{-- <footer>
			
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
	</div><!-- //PAGE -->
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
	<div id="tovar_content">
		@includeIf('theme.main::views.market.quickview');
	</div>
	<div class="close_block"></div>
</div><!-- TOVAR MODAL CONTENT -->
	