	
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
                                        <div class="tovar_item_new tovar_sale">
                                            <div class="tovar_img">
                                                <img class="img" src="{{ RvMedia::getImageUrl($k->images[0], 'featured', false, RvMedia::getDefaultImage()) }}" alt="" />
                                                {{-- <div class="open-project "> --}}
                                                    <a class=" add_lovelist btn_all_item btn_all_item_two " style="font-weight: bold;" href="{{ route('product.detail', [get_category_by_id(get_category_by_product($k->id)->category_id)->slug, $k->slug]) }}">Xem </a>
                                                {{-- </div> --}}
                                            </div>
                                            <div class="tovar_description clearfix">
                                                <a class="tovar_title" href="{{ route('product.detail', [get_category_by_id(get_category_by_product($k->id)->category_id)->slug, $k->slug]) }}" >{{$k->name}}</a>
                                                <span class="tovar_price_product text17">Giá: {{number_format($k->price)}} VNĐ</span>
                                                <br>
                                                <span class="tovar_price_sale text17">Còn: {{number_format($k->sale_price)}} VNĐ</span>
                                            </div>
                                        </div><!-- //TOVAR -->
                                </li>
                            @endforeach
						</ul>
					</div>
				</div><!-- //JCAROUSEL -->
			</div><!-- //CONTAINER -->
</section><!-- //NEW ARRIVALS -->
