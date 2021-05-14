

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
		
		
		<!-- CONTACTS BLOCK -->
		<section class="contacts_block">
			
			<!-- CONTAINER -->
			<div class="container">
				
				<!-- ROW -->
				<div class="row padbot30">
					
					@includeIf('theme.main::partials.contact.form_infor')
					@includeIf('theme.main::partials.contact.form_contact')
					@includeIf('theme.main::partials.contact.google_map')
					
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section>
		<!-- //CONTACTS BLOCK -->
		
	
	
	</div><!-- //PAGE -->
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
	<div id="tovar_content">
		@includeIf('theme.main::views.market.quickview');
	</div>
	<div class="close_block"></div>
</div><!-- TOVAR MODAL CONTENT -->

	
	
