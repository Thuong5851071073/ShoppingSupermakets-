<section class="new_arrivals padbot50">
			
    <!-- CONTAINER -->
    <div class="container">
        <h2 class="text_label text20" style="margin-top: 2rem; margin-bottom:2rem;  ">Sản Phẩm Liên Quan</h2>
        
        <!-- JCAROUSEL -->
        <div class="jcarousel-wrapper">
            
            <!-- NAVIGATION -->
            <div class="jCarousel_pagination">
                <a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
                <a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
            </div><!-- //NAVIGATION -->
            
            <div class="jcarousel" data-appear-top-offset='-100' data-animated='fadeInUp'>
                <ul>
                    @foreach ($products_related as $product_related )
                      
                    @php
                        $categorySlug = get_category_by_id(get_category_by_product($product_related->id)->category_id)->slug; 
                    @endphp
                    <li>
                        <!-- TOVAR -->
                        <a href="{{ route('product.detail', [get_category_by_id(get_category_by_product($product_related->id)->category_id)->slug, $product_related->slug]) }}">
                            <div class="tovar_item_new">
                                <div class="tovar_img">
                                    <img src="{{ RvMedia::getImageUrl($product_related->images[0], 'featured', false, RvMedia::getDefaultImage()) }}" alt="" />
                                    <div class="open-project-link">
                                        <a class="open-project tovar_view" href="{{ route('product.detail', [get_category_by_id(get_category_by_product($product_related->id)->category_id)->slug, $product_related->slug]) }}" >Xem </a></div>
                                </div>
                                <div class="tovar_description clearfix">
                                    <a class="tovar_title " href="{{ route('product.detail', [get_category_by_id(get_category_by_product($product_related->id)->category_id)->slug, $product_related->slug]) }}" >{{$product_related->name}}</a>
                                    <span class="tovar_price">{{$product_related->price}} VNĐ</span>
                                </div>
                            </div><!-- //TOVAR -->
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div><!-- //JCAROUSEL -->
    </div><!-- //CONTAINER -->
</section>