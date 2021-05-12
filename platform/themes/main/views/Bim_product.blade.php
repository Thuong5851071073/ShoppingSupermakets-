

<!-- PRELOADER -->
<div id="preloader"><img src="images/preloader.gif" alt="" /></div>
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">
	
		<!-- BREADCRUMBS -->
		@includeIf('theme.main::partials.product.breadcurmbs')
		<!-- //BREADCRUMBS -->
		
		
		<!-- SHOP BLOCK -->
		<section class="shop">
			
			<!-- CONTAINER -->
			<div class="container">
			
				<!-- ROW -->
				<div class="row">
					
					<!-- SIDEBAR -->
					@includeIf('theme.main::partials.product.category')
					<!-- //SIDEBAR -->
					<!-- SHOP PRODUCTS -->
					<div class="col-lg-9 col-sm-9 padbot20">
						
						<!-- SHOP BANNER -->
						<div class="banner_block margbot15">
							<a class="banner nobord" href="javascript:void(0);" ><img src="{{ Theme::asset()->url('images/tovar/banner24.jpg') }}" alt="" /></a>
						</div><!-- //SHOP BANNER -->
						
						<!-- SORTING TOVAR PANEL -->
						<div class="sorting_options clearfix">
							
							<!-- COUNT TOVAR ITEMS -->
							<div class="count_tovar_items">
								<p>Sweaters</p>
								<span>194 Items</span>
							</div>
							<!-- //COUNT TOVAR ITEMS -->
							
							{{-- <!-- TOVAR FILTER -->
							<div class="product_sort">
								<p>SORT BY</p>
								<select class="basic">
									<option value="">Popularity</option>
									<option>Reting</option>
									<option>Date</option>
								</select>
							</div><!-- //TOVAR FILTER --> --}}
							
							<!-- PRODUC SIZE -->
							<div id="toggle-sizes">
								<a class="view_box active" href="javascript:void(0);"><i class="fa fa-th-large"></i></a>
								<a class="view_full" href="javascript:void(0);"><i class="fa fa-th-list"></i></a>
							</div>
							<!-- //PRODUC SIZE -->
						</div>
						<!-- //SORTING TOVAR PANEL -->
						
						
						<!-- ROW -->
						@includeIf('theme.main::partials.product.product')
						<!-- //ROW -->
						
						<hr>
						
						<div class="clearfix">
							<!-- PAGINATION -->
							<ul class="pagination">
								<li><a href="javascript:void(0);" >1</a></li>
								<li><a href="javascript:void(0);" >2</a></li>
								<li class="active"><a href="javascript:void(0);" >3</a></li>
								<li><a href="javascript:void(0);" >4</a></li>
								<li><a href="javascript:void(0);" >5</a></li>
								<li><a href="javascript:void(0);" >6</a></li>
								<li><a href="javascript:void(0);" >...</a></li>
							</ul><!-- //PAGINATION -->
							
							<a class="show_all_tovar" href="javascript:void(0);" >show all</a>
							
						</div>
						
						<hr>
						
						{{-- <div class="padbot60 services_section_description">
							<p>We empower WordPress developers with design-driven themes and a classy experience their clients will just love</p>
							<span>Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90′s vice trust fund gastropub gentrify retro marfa viral. Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90′s vice trust fund gastropub gentrify retro marfa viral.</span>
						</div>
						
						<!-- SHOP BANNER -->
						<div class="row top_sale_banners center">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="images/tovar/banner8.jpg" alt="" /></a></div>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="images/tovar/banner7.jpg" alt="" /></a></div>
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
	<div id="tovar_content"></div>
	<div class="close_block"></div>
</div><!-- TOVAR MODAL CONTENT -->
	
