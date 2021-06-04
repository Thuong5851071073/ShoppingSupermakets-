<div class="row shop_block">
	@foreach ($products as $product)
        <!-- TOVAR1 --> 
        <div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
            <div class="tovar_item clearfix">
                <div class="tovar_img">
                  
                        <div class="tovar_img_wrapper">
                            @foreach ($product->images as $k => $image)
                                @if ($k == 0)
                                    <img class="img" src="{{ RvMedia::getImageUrl($image) }}" alt="" />
                                    <img class="img_h" src="{{ RvMedia::getImageUrl($image) }}" alt="" />
                                @endif
                            @endforeach
                        </div>
                    
                    <form action="{{route('cart.add')}}" method="POST">
                        @csrf
                        <input type="text" name="productId" value="{{$product->id}}" hidden>
                        <input type="number" name="quantityProduct" value="1" hidden>
                        <div class="tovar_item_btns">
                            <a class="add_lovelist btn_all_item_two" style="font-weight: bold;" href="{{ route('product.detail', [get_category_by_id(get_category_by_product($product->id)->category_id)->slug, $product->slug]) }}" data-url="{{ $product->id }}">
                                <span class="icon_two"> Xem</span>
                            </a>
                            <button class="btn_all_item_two" type="submit" >
                                <i class="fa fa-shopping-cart icon_two"></i>
                            </button>
                            <a class=" add_lovelist btn_all_item_two" href="javascript:void(0);" >
                                <i class="fa fa-heart "></i>
                            </a>
                        </div>
                    </form>
                </div>
                <div class="tovar_description clearfix" style=" display: flex;flex-direction: column;text-align: center;">
                    <a class="tovar_title" href="{{ route('product.detail', [get_category_by_id(get_category_by_product($product->id)->category_id)->slug, $product->slug]) }}" >{{ $product->name }}</a>
                    <span class="tovar_price">Giá: {{number_format( $product->price )}} VNĐ</span>
                </div>
                <div class="tovar_content">{!!$product->description!!}</div>
            </div>
        </div><!-- //TOVAR1 -->
    @endforeach
    							
</div>