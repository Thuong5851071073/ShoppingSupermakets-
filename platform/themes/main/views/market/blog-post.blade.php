

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
								{{-- <li><i class="fa fa-eye"></i>Lượt xem <span class="sep">|</span> 259</li> --}}
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
					</div><!-- //BLOG LIST -->
					<!-- SIDEBAR -->
					<div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 padbot50">
						<!-- WIDGET SEARCH -->
						<div class="sidepanel widget_search">
							<form class="search_form" action="{{route('public.search-blog')}}" method="get" name="search_form">
								<input type="text" name="q" value="{{ request()->input('q') }}" placeholder="Tìm Kiếm Bài Viết" />
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
							@foreach ( $tags as $item)
								<a href="{{route('blog.tag', $item->slug)}}" >{{$item->name}}</a>
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
	
