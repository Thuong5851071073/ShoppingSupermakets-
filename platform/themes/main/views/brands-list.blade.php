
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
		<!-- //PAGE HEADER -->
		
		
		<!-- BRANDS LIST SECTION -->
		<section class="brands_list_block">
			
			<!-- CONTAINER -->
			<div class="container">
				
				<!-- ROW -->
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">A</div>
							@foreach ($A as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
								
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">B</div>
						@foreach ($B as $k )
						<ul class="product_catalog_list">
							<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
						</ul>
						@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">C</div>
						@foreach ($C as $k )
							<ul class="product_catalog_list">
								<li><a href={{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">D</div>
						@foreach ($D as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
							@endforeach
					</div>
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //BRANDS LIST SECTION -->
		
		
		<!-- BRANDS LIST SECTION -->
		<section class="brands_list_block">
			
			<!-- CONTAINER -->
			<div class="container">
				
				<!-- ROW -->
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">E</div>
						@foreach ($E as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">f</div>
						@foreach ($F as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">g</div>
						@foreach ($G as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">h</div>
						@foreach ($H as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
							
							</ul>
							@endforeach
					</div>
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //BRANDS LIST SECTION -->
		
		
		<!-- BRANDS LIST SECTION -->
		<section class="brands_list_block">
			
			<!-- CONTAINER -->
			<div class="container">
				
				<!-- ROW -->
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">i</div>
						@foreach ($I as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">j</div>
						@foreach ($J as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">k</div>
						@foreach ($K as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">l</div>
						@foreach ($L as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
							</ul>
							@endforeach
					</div>
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //BRANDS LIST SECTION -->
		
		
		<!-- BRANDS LIST SECTION -->
		<section class="brands_list_block">
			
			<!-- CONTAINER -->
			<div class="container">
				
				<!-- ROW -->
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">m</div>
						@foreach ($M as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">n</div>
						@foreach ($N as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">o</div>
						@foreach ($O as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">p</div>
						@foreach ($P as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
							@endforeach
					</div>
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //BRANDS LIST SECTION -->
		
		
		<!-- BRANDS LIST SECTION -->
		<section class="brands_list_block">
			
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">q</div>
						@foreach ($Q as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
							
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">r</div>
						@foreach ($R as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">s</div>
						@foreach ($S as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">t</div>
						@foreach ($T as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
							@endforeach
					</div>
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //BRANDS LIST SECTION -->
		
		
		<!-- BRANDS LIST SECTION -->
		<section class="brands_list_block">
			
			<!-- CONTAINER -->
			<div class="container">
				
				<!-- ROW -->
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">u</div>
						@foreach ($U as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">v</div>
						@foreach ($V as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">w</div>
						@foreach ($V as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">x</div>
						@foreach ($X as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
							@endforeach
					</div>
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //BRANDS LIST SECTION -->
		
		
		<!-- BRANDS LIST SECTION -->
		<section class="brands_list_block">
			
			<!-- CONTAINER -->
			<div class="container">
				
				<!-- ROW -->
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">y</div>
						@foreach ($Y as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
							
							</ul>
							@endforeach
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ss-12 brand_list_item padbot40 clearfix">
						<div class="brand_letter">z</div>
						@foreach ($Z as $k )
							<ul class="product_catalog_list">
								<li><a href="{{ route('get_brand', $k->slug) }}" >{{$k->name}}</a></li>
								
							</ul>
							@endforeach
					</div>
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //BRANDS LIST SECTION -->
		
	
	</div><!-- //PAGE -->
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
	<div id="tovar_content">
		@includeIf('theme.main::views.market.quickview');
	</div>
	<div class="close_block"></div>
</div><!-- TOVAR MODAL CONTENT -->

	
</body>
</html>