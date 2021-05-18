<!-- PRELOADER -->
<div id="preloader"><img src="{{ Theme::asset()->url('images/preloader.gif') }}" alt="" /></div>
<!-- //PRELOADER -->
<div class="preloader_hide">
	<!-- PAGE -->
	<div id="page">
		<!-- HOME -->
		@includeIf('theme.main::partials.trangchu.banner_slide')
		<!-- //HOME -->	
		<!-- TOVAR SECTION -->
		@includeIf('theme.main::partials.trangchu.tovar_section')
		<!-- //TOVAR SECTION -->
		<!-- BRANDS -->
		@includeIf('theme.main::partials.trangchu.brands');
		<!-- //BRANDS -->

		{{-- sale --}}
		@includeIf('theme.main::partials.trangchu.sale')

		<hr class="container">
		<!-- SERVICES SECTION -->
		@includeIf('theme.main::partials.trangchu.services');
		<!-- //SERVICES SECTION -->
		<hr class="container">	
		<!-- RECENT POSTS -->
		@includeIf('theme.main::partials.trangchu.recent_posts');
		<!-- //RECENT POSTS -->
	</div><!-- //PAGE -->
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
	<div id="tovar_content">
		@includeIf('theme.main::views.market.quickview');
	</div>
	<div class="close_block"></div>
</div>
<!-- TOVAR MODAL CONTENT -->

	
	
