
<!-- PRELOADER -->
<div id="preloader"><img src="{{ Theme::asset()->url('images/preloader.gif') }}" alt="" /></div>
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page"> 
		<!-- BREADCRUMBS -->
		<section class="breadcrumb parallax margbot30"></section>
		<!-- //BREADCRUMBS -->
		@includeIf('theme.main::partials.breadcrumbs')
		<!-- TOVAR DETAILS -->
		@includeIf('theme.main::partials.detail.product_detail')
		<!-- //TOVAR DETAILS -->
		<!-- NEW ARRIVALS -->
		@includeIf('theme.main::partials.trangchu.new_arrivals')
		<!-- //NEW ARRIVALS -->

	</div><!-- //PAGE -->
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
	<div id="tovar_content">
		@includeIf('theme.main::views.market.quickview');
	</div>
	<div class="close_block"></div>
</div><!-- TOVAR MODAL CONTENT -->
	
