<div class="row shop_block">
	@foreach ($products as $product)
        <!-- TOVAR1 -->
        <div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
            <div class="tovar_item clearfix">
                <div class="tovar_img">
                    <a href="">
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
                        <div class="open-project-link"><a class="open-project tovar_view" href="javascript:void(0);" data-url="{{ $product->id }}"><span>Xem</span></a></div>
                        <a class="add_bag" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i></a>
                        <a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a>
                    </div>
                </div>
                <div class="tovar_description clearfix">
                    <a class="tovar_title" href="{{ route('product.detail', [get_category_by_id(get_category_by_product($product->id)->category_id)->slug, $product->slug]) }}" >{{ $product->name }}</a>
                    <span class="tovar_price">{{ $product->sale_price }} VNĐ</span>
                </div>
                <div class="tovar_content">What makes our cashmere so special? We start with the finest yarns from an Italian mill known for producing some of the softest cashmere out there.</div>
            </div>
        </div><!-- //TOVAR1 -->
    @endforeach							
</div>