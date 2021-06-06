
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
						<li class="active_step">1. Thông Tin Người Nhận </li>
						<li class="last">2. Hoàn Thành Thanh Toán</li>
					</ul>
					<form class="checkout_form clearfix" action="{{route('puplic.post_inforreship')}}" method="post">
						@csrf
				
						<input type="text" name="amountOrder" value="{{ $money }}" hidden>
						@if ($message = Session::get('success'))
							<div class="alert alert-success" role="alert">
								<strong>Thông báo</strong> {{ $message }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						@endif
						<div class="checkout_form_input  country">
							<label>Thành phố <span class="color_red">*</span></label>
							<select name="city" class="basic">
								@foreach ($get_city as $value )
									<option value="{{$value->ma_tinh}}">{{$value->ten_tinh}}</option>
									
								@endforeach
							
							</select>
						</div>
						<div class="checkout_form_input sity">
							
							<label>Quốc gia <span class="color_red">*</span></label>
							<input type="text" name="country" value="" placeholder=" Việt Nam" />
							@if ($errors->has('country'))
								<span class="text-danger">{{ $errors->first('country') }}</span>
							@endif
						</div>
						
						
						<div class="checkout_form_input2 adress">
							<label>Địa Chỉ <span class="color_red">*</span></label>
							<input type="text" name="address" value="" placeholder=" 55/77/32F đường số 8 phường Long Phước " />
							@if ($errors->has('address'))
								<span class="text-danger">{{ $errors->first('address') }}</span>
							@endif
						</div>

						<hr class="clear">
						
						<div class="checkout_form_input last_name">
							<label>Tên Khách Hàng <span class="color_red">*</span></label>
							<input type="text" name="name" value="{{$customer->name}}" placeholder="" />
							@if ($errors->has('name'))
								<span class="text-danger">{{ $errors->first('name') }}</span>
							@endif
						</div>
						
						<div class="checkout_form_input phone">
							<label>Phone <span class="color_red">*</span></label>
							<input type="text" name="phone" value="{{$customer->phone}}" placeholder="" />
							@if ($errors->has('phone'))
								<span class="text-danger">{{ $errors->first('phone') }}</span>
							@endif
						</div>
						
						<div class="checkout_form_input last E-mail">
							<label>e-mail <span class="color_red">*</span></label>
							<input type="text" name="email" value="{{$customer->email}}" placeholder="" />
							@if ($errors->has('email'))
								<span class="text-danger">{{ $errors->first('email') }}</span>
							@endif
						</div>
						
						<div class="clear"></div>
						
						<div class="checkout_form_note">Toàn bộ trường không được để trống (<span class="color_red">*</span>)</div>
						
						<button type="submit" class="btn active pull-right" >Lưu Thông Tin</button>
						{{-- <a class="btn active pull-right" href="checkout2.html" >Tiếp Tục Thanh Toán</a> --}}
					</form>
				</div><!-- //CHECKOUT BLOCK -->
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
