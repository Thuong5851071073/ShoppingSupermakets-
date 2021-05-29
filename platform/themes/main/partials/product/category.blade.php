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
    
    {{-- <!-- PRICE RANGE -->
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
    </div><!-- //PRICE RANGE --> --}}
     
      <!-- CATEGORIES -->
      <div class="sidepanel widget_categories">
        <h3>Thương Hiệu</h3>
        <ul>
            @foreach ($brand as $item)
                <li><a href="{{ route('get_brand', $item->slug) }}" >{{$item->name}}</a></li>       
            @endforeach
        </ul>
    </div><!-- //CATEGORIES -->
   
    
   
</div>