<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>

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
        <header class="header">
            <div class="header_top">
                <div class="container header_top-item">
                    <ul class="header_top_left">
                        <li class="header_top_left--item">
                            <a href="#mmm" class="link_item" title="" >
                                <i class="fas fa-phone "></i>
                                0326 912 693
                            </a>
                        </li>
                        <li class="header_top_left--item">
                            <a href="#mmm" class="link_item" title="" >
                                <i class="fas fa-envelope "></i>
                                nguyenthuong100999@gmail.com
                            </a>
                        </li>
                    </ul>
                    <ul class="header_top_right">
                        <li class="header_top_right--item">
                            <a href="#mmm" class="link_item" title="" >
                                <i class="fab fa-instagram "></i>
                            </a>
                        </li>
                        <li class="header_top_right--item">
                            <a href="#mmm" class="link_item" title="" >
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="header_top_right--item">
                            <a href="#mmm" class="link_item" title="" >
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header_body container">
                <div class="sticky_waper">
                    <div class="header_sticky">
                        <div class="sticky_animate">
                            <div class="header_logo">
                                <a href="#kkk" class="logo_link" title="logo">
                                    <img class="header_logo-img" src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="logo">
                                </a>
                            </div>
                            <div class="header_menu">
                                <ul class="header_menu-item">
                                    <li class="header_menu-item-list">
                                       <a href="" class="header_menu-item-list--name">Trang Chủ</a>
                                    </li>
                                    <li class="header_menu-item-list">
                                        {{-- <a href="" class="header_menu-item-list--name">Trang Chủ</a> --}}
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle btn-header" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                              Shop
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                              <div class="dropdown-menu_item">
                                                  <div class="menu-dropdown">
                                                        <div class="menu-drodown_item">
                                                            <a href="#" class="item_title btn" title="food">foot</a>
                                                            <ul class="item-flex">
                                                                <li class="item-flex_header">
                                                                  <a href="#" class="item-flex_header_name btn">11111</a>
                                                                </li>
                                                                <li class="item-flex_header">
                                                                    <a href="#" class="item-flex_header_name btn">A</a>
                                                                </li>
                                                                <li class="item-flex_header">
                                                                    <a href="#" class="item-flex_header_name btn">A</a>
                                                                </li>
                                                                <li class="item-flex_header ">
                                                                    <a href="#" class="item-flex_header_name btn">A</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="menu-drodown_item">
                                                            <a href="#" class="item_title btn" title="food">background</a>
                                                            <ul class="item-flex">
                                                                <li class="item-flex_header">
                                                                  <a href="#" class="item-flex_header_name btn">A</a>
                                                                </li>
                                                                <li class="item-flex_header">
                                                                    <a href="#" class="item-flex_header_name btn">A</a>
                                                                </li>
                                                                <li class="item-flex_header">
                                                                    <a href="#" class="item-flex_header_name btn">A</a>
                                                                </li>
                                                                <li class="item-flex_header ">
                                                                    <a href="#" class="item-flex_header_name btn">A</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                  </div>
                                              </div>

                                            </ul>
                                          </div>
                                    </li>
                                    <li class="header_menu-item-list">
                                        {{-- <a href="" class="header_menu-item-list--name">Trang Chủ</a> --}}
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle btn-header" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                              Thức ăn dinh dưỡng
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                              <div class="dropdown-menu_item">
                                                  <div class="menu-dropdown">
                                                        <div class="menu-drodown_item">
                                                            <a href="#" class="item_title btn" title="food">foot</a>
                                                            <ul class="item-flex">
                                                                <li class="item-flex_header">
                                                                  <a href="#" class="item-flex_header_name btn">A</a>
                                                                </li>
                                                                <li class="item-flex_header">
                                                                    <a href="#" class="item-flex_header_name btn">A</a>
                                                                </li>
                                                                <li class="item-flex_header">
                                                                    <a href="#" class="item-flex_header_name btn">A</a>
                                                                </li>
                                                                <li class="item-flex_header ">
                                                                    <a href="#" class="item-flex_header_name btn">A</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="menu-drodown_item">
                                                            <a href="#" class="item_title btn" title="food">background</a>
                                                            <ul class="item-flex">
                                                                <li class="item-flex_header">
                                                                  <a href="#" class="item-flex_header_name btn">A</a>
                                                                </li>
                                                                <li class="item-flex_header">
                                                                    <a href="#" class="item-flex_header_name btn">A</a>
                                                                </li>
                                                                <li class="item-flex_header">
                                                                    <a href="#" class="item-flex_header_name btn">A</a>
                                                                </li>
                                                                <li class="item-flex_header ">
                                                                    <a href="#" class="item-flex_header_name btn">A</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                  </div>
                                              </div>

                                            </ul>
                                          </div>
                                    </li>
                                    <li class="header_menu-item-list">
                                        <a href="" class="header_menu-item-list--name">Giới Thiệu</a>
                                    </li>
                                    <li class="header_menu-item-list">
                                        <a href="" class="header_menu-item-list--name">Liên Hệ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header_cart">
                                    <a href="#" class="header_cart--iteam" title="">
                                        <i class="fas fa-cart-plus"></i>
                                    </a>
                                    <a href="#" class="header_cart--iteam" title="">
                                        <i class="fas fa-cart-plus"></i>
                                    </a>
                                    <a href="#" class="header_cart--iteam" title="">
                                        <i class="fas fa-cart-plus"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_footer">
                <div class="container header_footer_find">
                    <div class="header_footer_find-left">
                        <div class="dropdown">
                            <button class="dropbtn">Tất Cả Danh Sách</button>
                            <div class="dropdown-content">
                              <a href="#" class="dropdown-content_item" title="">Link 1</a>
                              <a href="#" class="dropdown-content_item" title="">Link 1</a>
                              <a href="#" class="dropdown-content_item" title="">Link 1</a>
                              
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </header>
