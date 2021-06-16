

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
	
		
		<!-- CHECKOUT PAGE -->
		<section class="checkout_page">
			
			<!-- CONTAINER -->
			<div class="container">

				<!-- CHECKOUT BLOCK -->
				<div class="checkout_block">
					<ul class="checkout_nav">
						<li class="done_step2">1. Thông Tin Người Nhận</li>
						<li class="active_step last">2. Hoàn Thành Thanh Toán</li>
					</ul>
				</div><!-- //CHECKOUT BLOCK -->
					
				<!-- ROW -->
				<div class="row">
					<div class="col-lg-9 col-md-9 padbot60">
						<div class="checkout_confirm_orded clearfix">
							<div class="checkout_confirm_orded_bordright clearfix">
								<div class="billing_information">
									<p class="checkout_title margbot10">Địa chỉ nhận hàng</p>
									
									<div class="billing_information_content margbot40">
										
										<span>{{ auth('customer')->user()->name  }}</span>
										<span>{{ auth('customer')->user()->email }}</span>
										<span>{{ auth('customer')->user()->phone }}</span>
										<span>{{ $orderAddress->address }}</span>
										<span>{{ $orderAddress->getProvince->ten_tinh }}</span>
									</div>
									
									{{-- <p class="checkout_title margbot10">Địa chỉ nhận</p>
									
									<div class="billing_information_content margbot40">
										<span>Balashova Anna</span>
										<span>New York Street name 55</span>
										<span>841 11 Bratislava</span>
										<span>USA</span>
										<span>mymail@glammy.com</span>
									</div> --}}
								</div>
								
								<div class="payment_delivery">
									<p class="checkout_title margbot10">Thanh toán và giao hàng</p>
									
									<p><span>Thanh toán:<span> Thanh toán khi nhận hàng</p>
									{{-- <img src="images/paypal.jpg" alt="" /> --}}
									
									{{-- <p><span>Delivery:</span> FedEx Express</p> --}}
									{{-- <img src="images/premium_post.jpg" alt="" /> --}}
								</div>
							</div>
							
							<div class="checkout_confirm_orded_products">
								<p class="checkout_title">Sản Phẩm </p>
								<ul class="cart-items">
									@foreach ($detailCart as $k => $cart )
										<li class="clearfix">

											<img class="cart_item_product" src="{{ RvMedia::getImageUrl($cart->getProduct->image, 'cart', false, RvMedia::getDefaultImage()) }}" width="100px"  alt="" />
											<a href="product-page.html" class="cart_item_title">{{$cart->getProduct->name}}</a>
											@if(!empty($cart->getProduct->sale_price))
												<span class="cart_item_price">{{ number_format($cart->getProduct->sale_price)}} VNĐ</span>
											@else
												<span class="cart_item_price">{{ number_format($cart->getProduct->price)}} VNĐ</span>
											@endif
											
										</li>
									@endforeach
									
								</ul>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-3 padbot60">
						
						<!-- BAG TOTALS -->
						<form action="{{route('public.waypay')}}" method="POST">
							@csrf
							<div class="sidepanel widget_bag_totals your_order_block">
								<h3>Hóa Đơn Của Bạn</h3>
								<table class="bag_total">
									<tr class="cart-subtotal clearfix">
										<th>Thành tiền</th>
										<td>{{number_format($money)}} VNĐ</td>
									</tr>
									<tr class="shipping clearfix">
										<th>Giao hàng</th>
										<td>Miễn phí 1 Km</td>
									</tr>
									<tr class="total clearfix">
										<th>Tổng Tiền</th>
										<td>{{number_format($money)}} VNĐ</td>
									</tr>
								</table>
								<button class="btn active" type="submit" >Xác nhận thông tin</button>
								<a class="btn inactive" href="public.index" >Tiếp tục mua sắm </a>
							</div>
						</form><!-- //REGISTRATION FORM -->
					</div><!-- //SIDEBAR -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //CHECKOUT PAGE -->
		
	</div><!-- //PAGE -->
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
	<div id="tovar_content">
		@includeIf('theme.main::views.market.quickview');
	</div>
	<div class="close_block"></div>
</div><!-- TOVAR MODAL CONTENT -->

