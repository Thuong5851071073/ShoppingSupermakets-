<section class="tovar_section">
    <!-- CONTAINER -->
    <div class="container">
        <h2 class="text_label text20" style=" margin-top:2rem; margin-bottom:2rem ">Sản Phẩm Nổi Bật</h2>
        <div class="row">
            <!-- TOVAR WRAPPER -->
            <div class="tovar_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>
                @if (!empty($products))
                    @foreach ($products as $product)
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-ss-12 padbot40">
                            <a href="{{ route('product.detail', [get_category_by_id(get_category_by_product($product->id)->category_id)->slug, $product->slug]) }}">
                                <div class="tovar_item">
                                    <div class="tovar_img">
                                        <div class="tovar_img_wrapper">
                                            <img class="img"
                                                src="{{ RvMedia::getImageUrl($product->images[0], 'featured', false, RvMedia::getDefaultImage()) }}"
                                                alt="" />
                                            <img class="img_h"
                                                src="{{ RvMedia::getImageUrl($product->images[0], 'featured', false, RvMedia::getDefaultImage()) }}"
                                                alt="" />
                                        </div>
                                        <div class="tovar_item_btns">
                                            <div class="open-project-link"><a class="open-project tovar_view"
                                                    href="{{ route('product.detail', [get_category_by_id(get_category_by_product($product->id)->category_id)->slug, $product->slug]) }}"
                                                    data-url="!projects/women/4.html">xem</a></div>
                                            <a class="add_bag" href="javascript:void(0);"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                            <a class="add_lovelist" href="javascript:void(0);"><i
                                                    class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="tovar_description clearfix " style=" display: flex;flex-direction: column;text-align: center;">
                                        <a class="tovar_title " href="{{ route('product.detail', [get_category_by_id(get_category_by_product($product->id)->category_id)->slug, $product->slug]) }}">{{ $product->name }}</a>
                                        <div class="tovar_price">Giá: {{ number_format($product->price) }} VNĐ</div>
                                    </div>
                                </div>
                            </a>
                        </div><!-- //TOVAR4 -->
                    @endforeach
                @endif
            </div><!-- //TOVAR WRAPPER -->
        </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
</section>
