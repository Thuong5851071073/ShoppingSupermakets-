

<!-- PRELOADER -->
<div id="preloader"><img src="{{ Theme::asset()->url('images/preloader.gif') }}" alt="" /></div>
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">
			
		<!-- SHOP BLOCK -->
		<section class="shop">
			
			@includeIf('theme.main::partials.product.slider') 
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					
				
					
					<!-- SHOP PRODUCTS -->
					<div class="col-lg-12 col-sm-12 col-sm-12 padbot20">
						
					
						
						<!-- SORTING TOVAR PANEL -->
						<div class="sorting_options clearfix" style="margin-top: 127px;">
							
							<!-- COUNT TOVAR ITEMS -->
							<div class="count_tovar_items">
								<p>Tìm kiếm: {{ Request::get('q') ?? '' }}</p>
								<span>{{$countResult}} sản phẩm </span>
							</div><!-- //COUNT TOVAR ITEMS -->
							<!-- PRODUC SIZE -->
							<div id="toggle-sizes">
								<a class="view_box active" href="javascript:void(0);"><i class="fa fa-th-large"></i></a>
								<a class="view_full" href="javascript:void(0);"><i class="fa fa-th-list"></i></a>
							</div><!-- //PRODUC SIZE -->
						</div><!-- //SORTING TOVAR PANEL -->
						
						@if (!empty($result))
							<!-- ROW -->
							@foreach ($result  as $product )
								<div class="row shop_block">
									<!-- TOVAR1 -->
									<div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12  padbot40">
										<div class="tovar_item clearfix ">
											<div class="tovar_img">
												<div class="tovar_img_wrapper">
													@foreach ($product->images as $k => $image)
														@if ($k == 0)
															<img class="img" src="{{ RvMedia::getImageUrl($image) }}" alt="" />
															<img class="img_h" src="{{ RvMedia::getImageUrl($image) }}" alt="" />
														@endif
													@endforeach
												</div>
												<div class="tovar_item_btns">
													<a class="add_lovelist btn_all_item_two" style="font-weight: bold;" href="{{ route('product.detail', [get_category_by_id(get_category_by_product($product->id)->category_id)->slug, $product->slug]) }}" data-url="{{ $product->id }}">
														<span class="icon_two"> Xem</span>
													</a>
													<button class="btn_all_item_two" type="submit" >
														<i class="fa fa-shopping-cart icon_two"></i>
													</button>
													<a class=" add_lovelist btn_all_item_two" href="javascript:void(0);" >
														<i class="fa fa-heart "></i>
													</a>
												</div>
											</div>
											<div class="tovar_description clearfix">
												<a class="tovar_title" href="product-page.html" >{{$product->name}}</a>
												<span class="tovar_price">{{$product->price}}</span>
											</div>
											<div class="tovar_content"></div>
										</div>
									</div><!-- //TOVAR1 -->
								</div>
							<!-- //ROW -->
							@endforeach
						@endif
						@if ($countResult == 0)
							<p> Không thấy sản phẩm !</p>
						@endif
						
						<div class="detail-pagination">
							{{ $result->links('theme.main::partials.pagination') }}
						</div>
						
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

	
	
</body>
</html>