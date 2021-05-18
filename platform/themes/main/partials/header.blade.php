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
        <!-- HEADER -->
		<header>
			
			<!-- TOP INFO -->
			<div class="top_info">
				
				<!-- CONTAINER -->
				<div class="container clearfix">
					<ul class="secondary_menu">
						<li><a href="#" >my account</a></li>
						<li><a href="my-account.html" >Register</a></li>
					</ul>
					
					<div class="live_chat"><a href="javascript:void(0);" ><i class="fa fa-comment-o"></i> Live chat</a></div>
					
					<div class="phone_top">have a question? <a href="tel:{{ theme_option('phone') }}" >{{ theme_option('phone') }}</a></div>
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
						<form id="myDIV" method="get" action="#">
							<input type="text" name="search" value="Search" onFocus="if (this.value == 'Search') this.value = '';" onBlur="if (this.value == '') this.value = 'Search';" />
						</form>
					</div><!-- SEARCH FORM -->
					
					
					<!-- SHOPPING BAG -->
					<div class="shopping_bag">
						<a class="shopping_bag_btn" href="javascript:void(0);"  onclick="show_cart()"><i class="fa fa-shopping-cart"></i><p>shopping bag</p><span>2</span></a>
						<div class="cart"  id="cart_header">
							<ul class="cart-items">
								<li class="clearfix">
									<img class="cart_item_product" src="images/tovar/women/1.jpg" alt="" />
									<a href="product-page.html" class="cart_item_title">popover sweatshirt in floral jacquard</a>
									<span class="cart_item_price">1 × $98.00</span>
								</li>
								<li class="clearfix">
									<img class="cart_item_product" src="images/tovar/women/3.jpg" alt="" />
									<a href="product-page.html" class="cart_item_title">japanese indigo denim jacket</a>
									<span class="cart_item_price">2 × $158.00</span>
								</li>
							</ul>
							<div class="cart_total">
								<div class="clearfix"><span class="cart_subtotal">bag subtotal: <b>$414</b></span></div>
								<a class="btn active" href="checkout.html">Checkout</a>
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
		
