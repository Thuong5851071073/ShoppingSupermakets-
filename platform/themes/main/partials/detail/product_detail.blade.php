<section class="tovar_details padbot70">
			
    <!-- CONTAINER -->
    <div class="container">
        
        <!-- ROW -->
        <div class="row">
            
            <!-- SIDEBAR TOVAR DETAILS -->
            <div class="col-lg-3 col-md-3 sidebar_tovar_details">
                <h3><b>Sản Phẩm Khuyến Mãi</b></h3>
                <ul class="tovar_items_small clearfix">
                    @foreach ($product_sale as $product )
                        <li class="clearfix">
                            <img class="tovar_item_small_img" src="{{ RvMedia::getImageUrl($product->images[0], 'featured', false, RvMedia::getDefaultImage()) }}" alt="" /> 
                            <a href="{{ route('product.detail', [get_category_by_id(get_category_by_product($product->id)->category_id)->slug, $product->slug]) }}" class="tovar_item_small_title">{{$product->name}}</a>
                            <span class="tovar_price_product tovar_item_small_price text17 ">{{number_format($product->price)}} VNĐ</span>
                            <span class="tovar_price_sale tovar_item_small_price text17">{{number_format($product->sale_price)}} VNĐ</span>
                        </li>
                    @endforeach
                </ul>
            </div><!-- //SIDEBAR TOVAR DETAILS -->
            
            <!-- TOVAR DETAILS WRAPPER -->
            <div class="col-lg-9 col-md-9 tovar_details_wrapper clearfix">
                <div class="tovar_details_header clearfix margbot35">
                    <h3 class="pull-left"><b>{{ get_category_by_id(get_category_by_product($contentProduct->id)->category_id)->name }}</b></h3>
                           
                    {{-- <div class="tovar_details_pagination pull-right">
                        <a class="fa fa-angle-left" href="javascript:void(0);" ></a>
                        {{-- <span>2 of 34</span> 
                        <a class="fa fa-angle-right" href="javascript:void(0);" ></a>
                    </div> --}}
                </div>
                <!-- CLEARFIX -->
                <div class="clearfix padbot40">
                    <div class="tovar_view_fotos clearfix">
                        <div id="slider2" class="flexslider">
                            <ul class="slides">
                                @foreach ($contentProduct->images as $image)
                                    <li><a href="javascript:void(0);" ><img src="{{ RvMedia::getImageUrl($image, 'featured', false, RvMedia::getDefaultImage()) }}" alt="" /></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div id="carousel2" class="flexslider">
                            <ul class="slides">
                                @foreach ($contentProduct->images as $image)
                                    <li><a href="javascript:void(0);" ><img src="{{ RvMedia::getImageUrl($image, 'featured', false, RvMedia::getDefaultImage()) }}" alt="" /></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
           
                    <div class="tovar_view_description">
                        <div class="tovar_view_title">{{ $contentProduct->name }}</div>
                        <div class="clearfix tovar_brend_price">
                            <div class="pull-left tovar_brend">{{ get_brand_by_id($contentProduct->brand_id)->name }}</div>
                            <div class="pull-right tovar_view_price">Giá: {{ number_format($contentProduct->price) }} VNĐ</div>
                        </div>
                        <div class="tovar_color_select">
                        </div>
                        <div class="tovar_size_select">
                           <p>Cam kết chất lượng, không hài lòng trả hàng!</p>
                           <p>Giao hàng đúng hẹn</p>
                           <p>Không trầy xước</p>
                        </div>
                        <form action="{{route('cart.add')}}" method="POST">
                            @csrf
                            <input type="text" name="productId" value="{{$contentProduct->id}}" hidden>
                            <input type="number" name="quantityProduct" value="1" hidden>
                            <input type="number" name="qtyProduct" value="{{ $contentProduct->quantity }}" hidden>
                            <div class="tovar_view_btn" style="display: flex;  flex-direction: column;" >
                                <button class="add_bag" type="submit" ><i class="fa fa-shopping-cart"></i>Thêm Vào giỏ</button>
                            </div>
                        </form>
                        {{-- <form action="{{route('cart.add')}}" method="POST">
                            @csrf
                            <input type="text" name="productId" value="{{$product->id}}" hidden>
                            <input type="number" name="quantityProduct" value="1" hidden>
                            <input type="number" name="qtyProduct" value="{{ $product->quantity }}" hidden>
                            <div class="tovar_item_btns">
                                <button  type="submit" class=" btn_all_item"> <i
                                        class="fa fa-shopping-cart icon" ></i>
                                </button>
                            </div>
                        </form> --}}
                    </div> 
                </div><!-- //CLEARFIX -->
                
                <!-- TOVAR INFORMATION -->
                <div class="tovar_information">
                    <ul class="tabs clearfix">
                        <li class="current">Chi Tiết Sản Phẩm</li>
                        <li>Thông Tin Sản Phẩm</li>
                      
                    </ul>
                    <div class="box visible">
                        <p>{!! $contentProduct->description !!} </p>
                    </div>
                    <div class="box">
                        {!! $contentProduct->content !!} 
                       
                    </div>
                   
                </div><!-- //TOVAR INFORMATION -->
            </div><!-- //TOVAR DETAILS WRAPPER -->
        </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
</section>