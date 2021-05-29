

<!-- PRELOADER -->
<div id="preloader"><img src="{{ Theme::asset()->url('images/preloader.gif') }}" alt="" /></div>
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">
	
		<!-- BREADCRUMBS -->
		@includeIf('theme.main::partials.product.breadcurmbs')
		<!-- //BREADCRUMBS -->
		<!-- SHOP BLOCK -->
		<section class="shop">
			@includeIf('theme.main::partials.product.slider') 
			<!-- CONTAINER -->
			<div class="container">
			
				<!-- ROW -->
				<div class="row">
					
					<!-- SIDEBAR -->
					@includeIf('theme.main::partials.product.brand_category') 
					<!-- //SIDEBAR -->
					<!-- SHOP PRODUCTS -->
					<div class="col-lg-9 col-sm-9 padbot20">
					
						<!-- SORTING TOVAR PANEL -->
						<div class="sorting_options clearfix">
							<!-- COUNT TOVAR ITEMS -->
							<div class="count_tovar_items">
								<p>{{$brand_slug->name}}</p>
								<span>{{count($product_brand)}} Sản phẩm</span>
							</div>
						
							<!-- PRODUC SIZE -->
							<div id="toggle-sizes">
								<a class="view_box active" href="javascript:void(0);"><i class="fa fa-th-large"></i></a>
								<a class="view_full" href="javascript:void(0);"><i class="fa fa-th-list"></i></a>
							</div>
							<!-- //PRODUC SIZE -->
						</div>
						<!-- //SORTING TOVAR PANEL -->
						<!-- ROW -->
						@includeIf('theme.main::partials.product.brand_product')
						<!-- //ROW -->
						{{-- <div class="detail-pagination">
							{{ $products->links('theme.main::partials.pagination') }}
							
						</div> --}}
						
						<!-- //SHOP BANNER -->
					</div><!-- //SHOP PRODUCTS -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //SHOP -->
		
	</div><!-- //PAGE -->
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
	<div id="tovar_content">
		@includeIf('theme.main::views.market.quickview');
	</div>
	<div class="close_block"></div>
</div><!-- TOVAR MODAL CONTENT -->
	
