<section class="new_arrivals padbot50">
			
    <!-- CONTAINER -->
    <div class="container">
        <h2 class="text_label text20" style="margin-top: 2rem; margin-bottom:2rem;  ">Sản Phẩm Thương Hiệu</h2>
        
        <!-- JCAROUSEL -->
        <div class="jcarousel-wrapper">
            
            <!-- NAVIGATION -->
            <div class="jCarousel_pagination">
                <a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
                <a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
            </div><!-- //NAVIGATION -->
            
            <div class="jcarousel" data-appear-top-offset='-100' data-animated='fadeInUp'>
                <ul>
                    @foreach ($products_1 as $k )  
                    {{-- @dd($k->logo)    --}}
                    <li>
                        <!-- TOVAR -->
                        <a href="{{route('get_product_detail')}}">
                            <div class="tovar_item_new">
                                <div class="tovar_img">
                                    <img src="{{ RvMedia::getImageUrl($k->images[0], 'featured', false, RvMedia::getDefaultImage()) }}" alt="" />
                                    <div class="open-project-link"><a class="open-project tovar_view" href="{{route('get_product_detail')}}" >Xem </a></div>
                                </div>
                                <div class="tovar_description clearfix">
                                    <a class="tovar_title " href="{{$k->url}}" >{{$k->name}}</a>
                                    <span class="tovar_price">{{$k->price}} VNĐ</span>
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