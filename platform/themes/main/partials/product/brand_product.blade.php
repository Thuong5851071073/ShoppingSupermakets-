<div class="row shop_block">
	@foreach ($product_brand as $product)
        <!-- TOVAR1 --> 
        <div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
            <div class="tovar_item clearfix">
                <div class="tovar_img">
                    <a href="{{ route('product.detail', [get_category_by_id(get_category_by_product($product->id)->category_id)->slug, $product->slug]) }}">
                        <div class="tovar_img_wrapper">
                            @foreach ($product->images as $k => $image)
                                @if ($k == 0)
                                    <img class="img" src="{{ RvMedia::getImageUrl($image) }}" alt="" />
                                    <img class="img_h" src="{{ RvMedia::getImageUrl($image) }}" alt="" />
                                @endif
                            @endforeach
                        </div>
                    </a>
                    <div class="tovar_item_btns">
                        <div class="open-project-link"><a class="open-project tovar_view" href="javascript:void(0);" data-url="{{ $product->id }}"><span> Xem</span></a></div>
                        <a class="add_bag" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i></a>
                        <a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a>
                    </div>
                </div>
                <div class="tovar_description clearfix " style=" display: flex;flex-direction: column;text-align: center;">
                    <a class="tovar_title" href="{{ route('product.detail', [get_category_by_id(get_category_by_product($product->id)->category_id)->slug, $product->slug]) }}" >{{ $product->name }}</a>
                    <span class="tovar_price"> Giá: {{ number_format($product->price) }} VNĐ</span>
                </div>
                <div class="tovar_content">{!!$product->description!!}</div>
            </div>
        </div><!-- //TOVAR1 -->
    @endforeach							
</div>