    <a class="love_list_btn" href="javascript:void(0);" onclick="show_love()"><i class="fas fa-bars"></i>
        <p>Danh Mục</p>
    </a>
    <div class="cart " id="love_list">
        <ol class="cart_list">
                @foreach ($menu_nodes as $k => $menu)
                    @if ($k <= 4)
                        <li class="cart_list_name">
                            <a class="cart_list_name_item" href="{{$menu->url}}">{{$menu->title}}
                            </a>
                        </li>
                    @endif
                @endforeach
                <li class="cart_list_name">
                    <a class="cart_list_name_item" href="{{$menu->url}}">Xem Chi Tiết
                    </a>
                </li>
            </ol>
    </div>

