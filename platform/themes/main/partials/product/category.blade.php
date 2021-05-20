<div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 padbot50">
						
    <!-- CATEGORIES -->
    <div class="sidepanel widget_categories">
        <h3>Danh Mục Sản Phẩm </h3>
        <ul>
            @foreach ($categories as $category )
                <li><a href="{{ route('product.category', $category->slug) }}" >{{$category->name}}</a></li>    
            @endforeach
        </ul>
    </div><!-- //CATEGORIES -->
    
    <!-- PRICE RANGE -->
    <div class="sidepanel widget_pricefilter">
        <h3>Chọn Mức Giá</h3>
        <div id="price-range" class="clearfix">
            <label for="amount">Khoảng Giá:</label>
            <input type="text" id="amount"/>
            <div class="padding-range">
                <div id="slider-range">
                </div>
            </div>
        </div>
    </div><!-- //PRICE RANGE -->
     
    <!-- SHOP BY BRANDS -->
    <div class="sidepanel widget_brands">
        <h3>Thương Hiệu</h3>
        <input type="checkbox" id="categorymanufacturer1" /><label for="categorymanufacturer1">VERSACE <span>(24)</span></label>
        <input type="checkbox" id="categorymanufacturer2" /><label for="categorymanufacturer2">J CREW <span>(35)</span></label>
        <input type="checkbox" id="categorymanufacturer3" /><label for="categorymanufacturer3">Calvin KlEin <span>(48)</span></label>
        <input type="checkbox" id="categorymanufacturer4" /><label for="categorymanufacturer4">Tommy hilfiger <span>(129)</span></label>
        <input type="checkbox" id="categorymanufacturer5" /><label for="categorymanufacturer5">Ralph Lauren <span>(69)</span></label>
    </div><!-- //SHOP BY BRANDS -->
    
    {{-- <!-- BANNERS WIDGET -->
    <div class="widget_banners">
        <a class="banner nobord margbot10" href="javascript:void(0);" ><img src="images/tovar/banner10.jpg" alt="" /></a>
        <a class="banner nobord margbot10" href="javascript:void(0);" ><img src="images/tovar/banner9.jpg" alt="" /></a>
        <a class="banner nobord margbot10" href="javascript:void(0);" ><img src="images/tovar/banner8.jpg" alt="" /></a>
    </div><!-- //BANNERS WIDGET --> --}}
    
   
</div>