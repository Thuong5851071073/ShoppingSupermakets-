	
<!-- NEW ARRIVALS -->
		<section class="new_arrivals padbot50">
			
			<!-- CONTAINER -->
			<div class="container">
				<h2 class="text_label text20" style=" margin-top:2rem; margin-bottom:2rem "> Sản Phẩm Khuyễn Mãi</h2>
				
				<!-- JCAROUSEL -->
				<div class="jcarousel-wrapper">
					
					<!-- NAVIGATION -->
					<div class="jCarousel_pagination">
						<a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
						<a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
					</div><!-- //NAVIGATION -->
					
					<div class="jcarousel">
						<ul>
                            @foreach ($product_sale as $k )                              
                                <li>
                                    <!-- TOVAR -->
                                    <a href="{{route('get_product_detail')}}">
                                        <div class="tovar_item_new tovar_sale">
                                            <div class="tovar_img">
                                                <img class="img" src="{{ RvMedia::getImageUrl($k->images[0], 'featured', false, RvMedia::getDefaultImage()) }}" alt="" />
                                                <div class="open-project-link">
                                                    <a class="open-project tovar_view" href="https://google.com">xem</a>
                                                </div>
                                            </div>
                                            <div class="tovar_description clearfix">
                                                <a class="tovar_title" href="product-page.html" >{{$k->name}}</a>
                                                <span class="tovar_price_product text17">{{$k->price}} VNĐ</span>
                                                <br>
                                                <span class="tovar_price_sale text17">{{$k->sale_price}} VNĐ</span>
                                            </div>
                                        </div><!-- //TOVAR -->
                                    </a>
                                </li>
                            @endforeach
						</ul>
					</div>
				</div><!-- //JCAROUSEL -->
			</div><!-- //CONTAINER -->
</section><!-- //NEW ARRIVALS -->
