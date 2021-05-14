<section class="tovar_section">			
    <!-- CONTAINER -->
    <div class="container">
        <h2 class="text_label text20" style=" margin-top:2rem; margin-bottom:2rem ">Sản Phảm Nổi Bật</h2>  
        <!-- ROW -->
        {{-- <div class="row">      
            <!-- TOVAR WRAPPER -->
            <div class="tovar_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>
                
                <!-- TOVAR1 -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-ss-12 padbot40">
                    <div class="tovar_item">
                        <div class="tovar_img">
                            <div class="tovar_img_wrapper">
                                <img class="img" src="{{ Theme::asset()->url('images/tovar/women/1.jpg') }} " alt="" />
                                <img class="img_h" src="{{ Theme::asset()->url('images/tovar/women/1_2.jpg') }}" alt="" />
                            </div>
                            <div class="tovar_item_btns">
                                <div class="open-project-link"><a class="open-project tovar_view" href="javascript:void(0);" data-url="!projects/women/1.html" >quick view</a></div>
                                <a class="add_bag" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i></a> 
                                <a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="tovar_description clearfix">
                            <a class="tovar_title" href="product-page.html" >Popover Sweatshirt in Floral Jacquard</a>
                            <span class="tovar_price">$98.00</span>
                        </div>
                    </div>
                </div><!-- //TOVAR1 -->
                
                <!-- TOVAR2 -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-ss-12 padbot40">
                    <div class="tovar_item">
                        <div class="tovar_img">
                            <div class="tovar_img_wrapper">
                                <img class="img" src="{{ Theme::asset()->url('images/tovar/women/3.jpg') }}" alt="" />
                                <img class="img_h" src="{{ Theme::asset()->url('images/tovar/women/3.jpg') }}" alt="" />
                            </div>
                            <div class="tovar_item_btns">
                                <div class="open-project-link"><a class="open-project tovar_view" href="javascript:void(0);" data-url="!projects/women/2.html" >quick view</a></div>
                                <a class="add_bag" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i></a>
                                <a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="tovar_description clearfix">
                            <a class="tovar_title" href="product-page.html" >Marled drop-shoulder sweater</a>
                            <span class="tovar_price">$118.00</span>
                        </div>
                    </div>
                </div><!-- //TOVAR2 -->
                
                <!-- TOVAR3 -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-ss-12 padbot40">
                    <div class="tovar_item">
                        <div class="tovar_img">
                            <div class="tovar_img_wrapper">
                                <img class="img" src="images/tovar/women/3.jpg" alt="" />
                                <img class="img_h" src="images/tovar/women/3_2.jpg" alt="" />
                            </div>
                            <div class="tovar_item_btns">
                                <div class="open-project-link"><a class="open-project tovar_view" href="javascript:void(0);" data-url="!projects/women/3.html" >quick view</a></div>
                                <a class="add_bag" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i></a>
                                <a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="tovar_description clearfix">
                            <a class="tovar_title" href="product-page.html" >Japanese indigo denim jacket</a>
                            <span class="tovar_price">$158.00</span>
                        </div>
                    </div>
                </div><!-- //TOVAR3 -->
                
                <div class="respond_clear_768"></div>
                
                <!-- BANNER -->
                <div class="col-lg-3 col-md-3 col-xs-6 col-ss-12">
                    <a class="banner type1 margbot30" href="javascript:void(0);" ><img src="images/tovar/banner1.jpg" alt="" /></a>
                    <a class="banner type2 margbot40" href="javascript:void(0);" ><img src="images/tovar/banner2.jpg" alt="" /></a>
                </div><!-- //BANNER -->
            </div><!-- //TOVAR WRAPPER -->
        </div><!-- //ROW --> --}}
        
        
        <!-- ROW -->
        <div class="row">
            
            <!-- TOVAR WRAPPER -->
            <div class="tovar_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>
                
                <!-- BANNER -->
                {{-- <div class="col-lg-3 col-md-3 col-xs-6 col-ss-12">
                    <a class="banner type3 margbot40" href="javascript:void(0);" ><img src="{{ Theme::asset()->url('images/tovar/banner3.jpg') }}" alt="" /></a>
                </div><!-- //BANNER --> --}}
                
                <div class="respond_clear_768"></div>
                
                <!-- TOVAR4 -->
                @foreach ( $products as $k )
                    {{-- @dd(($k->images)) --}}
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-ss-12 padbot40">
                        <a href="{{route('get_product_detail')}}">
                            <div class="tovar_item">
                                <div class="tovar_img">
                                    <div class="tovar_img_wrapper">
                                        <img class="img" src="{{ RvMedia::getImageUrl($k->images[0], 'featured', false, RvMedia::getDefaultImage()) }}" alt="" />
                                        <img class="img_h" src="{{ RvMedia::getImageUrl($k->images[0], 'featured', false, RvMedia::getDefaultImage()) }}" alt="" />
                                    </div>
                                    <div class="tovar_item_btns">
                                        <div class="open-project-link"><a class="open-project tovar_view" href="javascript:void(0);" data-url="!projects/women/4.html" >xem</a></div>
                                        <a class="add_bag" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i></a>
                                        <a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="tovar_description clearfix">
                                    <a class="tovar_title" href="product-page.html" >{{ $k->name }}</a>
                                    <span class="tovar_price">{{$k->price}} VNĐ</span>
                                </div>
                            </div>
                        </a>
                    </div><!-- //TOVAR4 --> 
                @endforeach
            </div><!-- //TOVAR WRAPPER -->
        </div><!-- //ROW -->
        
        
        {{-- <!-- ROW -->
        <div class="row">
            
            <!-- BANNER WRAPPER -->
            <div class="banner_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>
                <!-- BANNER -->
                <div class="col-lg-9 col-md-9">
                    <a class="banner type4 margbot40" href="javascript:void(0);" ><img src="{{ Theme::asset()->url('images/tovar/banner4.jpg') }}" alt="" /></a>
                </div><!-- //BANNER -->
                
                <!-- BANNER -->
                <div class="col-lg-3 col-md-3">
                    <a class="banner nobord margbot40" href="javascript:void(0);" ><img src=" {{ Theme::asset()->url('images/tovar/banner5.jpg') }}" alt="" /></a>
                </div><!-- //BANNER -->
            </div><!-- //BANNER WRAPPER -->
        </div><!-- //ROW --> --}}
    </div><!-- //CONTAINER -->
</section>