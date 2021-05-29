

<!-- PRELOADER -->
<div id="preloader"><img src="{{ Theme::asset()->url('images/preloader.gif') }}" alt="" /></div>
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
								<h3>{!! $contentPost->description !!}</h3>

								{!! $contentPost->content !!}
							
							</div>
							
						</article>
						
					
						
						
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
							<h3>Danh Mục Sẳn Phẩm</h3>
							<ul>
								@foreach ($categories as $item )
									<li><a href="{{ route('product.category', get_category_by_id($item->id)->slug) }}" >{{$item->name}}</a></li>	
								@endforeach
								
							</ul>
						</div><!-- //CATEGORIES -->					
						<!-- WIDGET POPULAR POSTS -->
						
						<!-- WIDGET POPULAR POSTS -->
						<div class="sidepanel widget_popular_posts">
							<h3>Bài Viết Nổi Bật</h3>
							<ul>
								@foreach ($featured as $item )
									<li class="widget_popular_post_item clearfix">
										<a class="widget_popular_post_img" href="{{ route('blog.detail', [get_category_post_by_id(get_category_by_post_id($item->id)->category_id)->slug, $item->slug]) }}" ><img src="{{ RvMedia::getImageUrl($item->image, 'mini_post', false, RvMedia::getDefaultImage()) }}" alt="" /></a>
										<a class="widget_popular_post_title" href="{{ route('blog.detail', [get_category_post_by_id(get_category_by_post_id($item->id)->category_id)->slug, $item->slug]) }}" >{{$item->name}}</a>
										<span class="widget_popular_post_date">{{ date_format($item->created_at,"d") }}<span> {{ substr(date_format($item->created_at, "F"), 0, 3) }}</span></span>
									</li>
									
								@endforeach
							</ul>
						</div><!-- //WIDGET POPULAR POSTS -->
						
						<!-- WIDGET POPULAR TAGS -->
						<div class="sidepanel widget_tags">
							<h3>Thẻ</h3>
							@foreach ( $tag as $item)
								<a href="{{route('get_reset', $item->slug)}}" >{{$item->name}}</a>
							@endforeach
							
						</div><!-- //WIDGET POPULAR TAGS -->
					</div><!-- //SIDEBAR -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //BLOG BLOCK -->
		
	
	
	</div><!-- //PAGE -->
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
	<div id="tovar_content">
		@includeIf('theme.main::views.market.quickview');
	</div>
	<div class="close_block"></div>
</div><!-- TOVAR MODAL CONTENT -->
	
