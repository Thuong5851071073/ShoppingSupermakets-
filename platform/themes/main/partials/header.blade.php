<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts-->
        <link href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('primary_font', 'Roboto')) }}" rel="stylesheet" type="text/css">
        <!-- CSS Library-->

		<style>
            :root {
                --color-1st: {{ theme_option('primary_color', '#89C74A') }};
                --primary-font: '{{ theme_option('primary_font', 'Roboto') }}', sans-serif;
                --color-text: {{theme_option('primary_color_text','#000000')}};
                --color-text-white: {{theme_option('primary_color_text_white','#FFFFFF')}};
            }
        </style>

        {!! Theme::header() !!}
    </head>
    <body>
		
		{{-- @php

			$cartId = auth('customer')->user()->getCart->id;
			$detailCart = Platform\CartDetail\Models\CartDetail::getDetailCartByCardId($cartId);

		
		
		@endphp --}}
        <!-- HEADER -->
		<header>
			
			<!-- TOP INFO -->
			<div class="top_info">
				
				<!-- CONTAINER -->
				<div class="container clearfix">
					<ul class="secondary_menu" style="font-weight: bold;">
						@if (auth('customer')->user())
						<li><a href="{{route('customer.logout')}}" >Đăng Xuất</a></li>
						<li><a href="javascript:void(0)">Xin chào: {{ auth('customer')->user()->name }}</a></li>
						@else
							<li><a href="{{route('get_login')}}" >Đăng Nhập</a></li>
						@endif
						

					</ul>
					
					{{-- <div class="live_chat"><a href="javascript:void(0);" ><i class="fa fa-comment-o"></i> Live chat</a></div> --}}
					
					<div class="phone_top">Liên hệ <a href="tel:{{ theme_option('phone') }}" >{{ theme_option('phone') }}</a></div>
				</div><!-- //CONTAINER -->
			</div><!-- TOP INFO -->
			 
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
				
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo">
						<a href="{{route('public.index')}}" ><img class="logo_header" src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="" /></a>
					</div><!-- //LOGO -->
					
					
					<!-- SEARCH FORM -->
					<div class="top_search_form">
						<a class="top_search_btn " href="javascript:void(0);" onclick="myFunction()" ><i class="fa fa-search"></i></a>
						<form id="myDIV" method="get" action="{{route('public.search')}}">
							<input type="text" name="q" value="{{ request()->input('q') }}"  required=""placeholder="Tìm kiếm sản phẩm" />
						</form>
					</div><!-- SEARCH FORM -->
					
					
					<!-- SHOPPING BAG -->
					<div class="shopping_bag">
						<a class="shopping_bag_btn" href="javascript:void(0);"  onclick="show_cart()"><i class="fa fa-shopping-cart"></i><p>Giỏ Hàng</p>
							@if (!empty(auth('customer')->user()))
								<span>  {{ auth('customer')->user()->getCart->getDetailcart->count() }}</span>
							@else
								<span>0</span>
							@endif
						</a>
						<div class="cart"  id="cart_header">
							{{-- <ul class="cart-items">
								@foreach ($detailCart as $k => $cart)
									@if ( $k <= 2 )
										<li class="clearfix">
											<img class="cart_item_product" src="{{ RvMedia::getImageUrl($cart->getProduct->image, 'mini_post', false, RvMedia::getDefaultImage()) }}" alt="" />
											<a href="product-page.html" class="cart_item_title">{{$cart->getProduct->name}}</a>
											<span class="cart_item_price">{{$cart->quantity}} × {{$cart->getProduct->price}}</span>
										</li>
									@endif
								@endforeach
							
							</ul> --}}
							<div class="cart_total">
								{{-- <div class="clearfix"><span class="cart_subtotal">bag subtotal: <b>$414</b></span></div>
								<a class="btn active mb-4" href="{{route('public.get-cart')}}">Thanh Toán</a> --}}
								<a class="btn active" href="{{route('public.get-cart')}}">Xem Chi Tiết</a>
							</div>
						</div>
					</div><!-- //SHOPPING BAG -->
					<!-- LOVE LIST  onclick="show_love()  "-->
					<div class="love_list">
						{!!
							Menu::renderMenuLocation('category-menu', [
								'options' => [],
								'theme' => true, 
								'view' => 'category.menu_list',
							])
						!!}
					</div><!-- //LOVE LIST -->
					
					<a href="javascript:void(0)" class="menu_toggler" onclick="show_list()" >
						<i class="fa fa-align-justify"></i>
					</a>
					<!-- MENU -->
					<div id="header_mb">
						<ul class="navmenu center" >
	
							{!!
								Menu::renderMenuLocation('header-menu-desktop', [
									'options' => [],
									'theme' => true,
									'view' => 'custom-menu',
								])
							!!}
	
						</ul><!-- //MENU -->
					</div>
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
