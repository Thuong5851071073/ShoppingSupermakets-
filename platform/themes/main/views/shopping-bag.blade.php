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
		<!-- SHOPPING BAG BLOCK -->
		<section class="shopping_bag_block">
			<!-- CONTAINER -->
			<div class="container-fluid">
				<!-- ROW -->
				<div class="row">
					<!-- CART TABLE -->
					<div class="col-lg-9 col-md-12 col-12 padbot40">
						<table class="shop_table">
							<thead>
								<tr>
									<th class="product-thumbnail"></th>
									<th class="product-name">Sản Phẩm</th>
									<th class="product-price">Giá</th>
									<th class="product-quantity">Số Lượng</th>
									<th class="product-subtotal">Thành Tiền</th>
									<th class="product-remove"> Cật nhập</th>
									<th class="product-remove"> Xóa Khỏi Giỏ</th>
								</tr>
							</thead>
							<tbody>

								@foreach ($detailCart as $k => $cart )
									<tr class="cart_item">
										<td class="product-thumbnail"><a href="product-page.html" ><img src="{{ RvMedia::getImageUrl($cart->getProduct->image, 'cart', false, RvMedia::getDefaultImage()) }}" width="100px" alt="" /></a></td>
										<td class="product-name">
											<a href="product-page.html">{{$cart->getProduct->name}}</a>
											{{-- <ul class="variation">
												<li class="variation-Color">Color: <span>Brown</span></li>
												<li class="variation-Size">Size: <span>XS</span></li>
											</ul> --}}
										</td>
										@if(!empty($cart->getProduct->sale_price))
											<td class="product-price">{{ number_format($cart->getProduct->sale_price)}} VNĐ</td>
										@else
											<td class="product-price">{{ number_format($cart->getProduct->price)}} VNĐ</td>
										@endif

										<td class="product-quantity">
											<div class="number-input">
												<button class="number-input_btn" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
												<input class="quantity cart-{{ $cart->id }}" min="0" name="quantity" value="{{$cart->quantity}}" data-cart-detail-{{ $cart->id  }}={{ $cart->id }} value="{{ $cart->quantity }}" type="number">
												<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
											  </div>
											
										</td>
										
										<td class="product-subtotal">{{number_format($allPrice[$k])}}Đ</td>

										<td class="product-remove" >
											<a href="javascript:void(0);" onclick="updateCart('{{$cart->id}}', '{{ $cart->product_id }}')" style="display: flex; "><span>Cập Nhật</span><i>+</i></a>
											
										</td>
										<td class="product-remove" >
											<a href="javascript:void(0);" onclick="removeCart({{$cart->id}})"  style="display: flex; "><span>Xóa</span><i>-</i></a>
											
										</td>
										
									</tr>
								@endforeach
							</tbody>
						</table>
					</div><!-- //CART TABLE -->
					
					
					<!-- SIDEBAR -->
					<div id="sidebar" class="col-lg-3 col-md-12 col-12 padbot50">
						
						<!-- BAG TOTALS -->
						<div class="sidepanel widget_bag_totals">
							<h3>Thanh Toán</h3>
							<table class="bag_total">
								<tr class="cart-subtotal clearfix">
									<th>Tổng Mặt Hàng</th>
									<td> 
										@if (!empty(auth('customer')->user()))
											<span>  {{ auth('customer')->user()->getCart->getDetailcart->count() }} Sản Phẩm</span>
										@else
											<span>0 Sản Phẩm</span>
										@endif
								</td>
								</tr>
								{{-- <tr class="shipping clearfix">
									<th>SHIPPING</th>
									<td>Free</td>
								</tr> --}}
								<tr class="total clearfix">
									<th>Tổng Tiền</th>
									<td>{{number_format($money)}} VNĐ</td>
								</tr>
							</table>
							{{-- <form class="coupon_form" action="javascript:void(0);" method="get">
								<input type="text" name="coupon" value="Have a coupon?" onFocus="if (this.value == 'Have a coupon?') this.value = '';" onBlur="if (this.value == '') this.value = 'Have a coupon?';" />
								<input type="submit" value="Apply">
							</form> --}}
							<a class="btn active" href="javascript:void(0);" >Thanh Toán</a>
							<a class="btn inactive" href="javascript:void(0);" >Tiếp Tục Mua Hàng</a>
						</div><!-- //REGISTRATION FORM -->
					</div><!-- //SIDEBAR -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //SHOPPING BAG BLOCK -->
		
	
	
	</div><!-- //PAGE -->
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
	<div id="tovar_content">
		@includeIf('theme.main::views.market.quickview');
	</div>
	<div class="close_block"></div>
</div><!-- TOVAR MODAL CONTENT -->

{{--  javacrit --}}

<script>
	 function updateCart(cart_detail_id, product_cart_id) {
   
   var data = {
	   cart_detail_id : cart_detail_id,
	   product_cart_id : product_cart_id,
	   cart_detail_quantity : $('[data-cart-detail-' + cart_detail_id + '=' + cart_detail_id + ']').val()
   };
   $.ajax({
	   url: "/gio-hang/cap-nhat-gio-hang",
	   headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
	   type: 'POST',
	   data: data,
	   success: function(response) {
		   console.log(response.error)
		   if (response.success) {
				   Swal.fire({
				   title: 'Thành công',
				   text: "Cập nhật thành công",
				   icon: 'success',
				   confirmButtonColor: '#3085d6',
				   confirmButtonText: 'Xác nhận'
			   }).then((result) => {
				   if (result.value) {
					   window.location.reload();
				   }
			   })
		   } else {
			   toastr.error('Có lỗi xảy ra vui lòng thử lại sau.')
		   }
	   },
	   error: function(response) {
		   toastr.error('Có lỗi xảy ra vui lòng thử lại sau.')
	   }
   });
 }


 function removeCart(cart_detail_id)
{
    var data = {
        detail_cart_id : $('.cart-' + cart_detail_id).data('cart-detail-'+ cart_detail_id)
    };
	
	// console.log(data);
    Swal.fire({
        title: 'Bạn có chắc muốn xóa sản phẩm này không?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Xác nhận',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Hủy'
    }).then((result) => {
        if (result.value) {
            $('.loader').show();
            $.ajax({
                url: "gio-hang/xoa-gio-hang",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                type: 'POST',
                data: data,
                success: function(response) {
                    $('.loader').hide();
                    if (response.success) {
                            Swal.fire({
                            title: 'Thành công',
                            text: "Đã xóa sản phẩm",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Xác nhận'
                        }).then((result) => {
                            if (result.value) {
                                window.location.reload();
                            }
                        })
                    } else {
                        toastr.error('Có lỗi xảy ra vui lòng thử lại sau.')
                    }
                    },
                    error: function(response) {
                        toastr.error('Có lỗi xảy ra vui lòng thử lại sau.')
                    }
                });
            }
    })
}
</script>