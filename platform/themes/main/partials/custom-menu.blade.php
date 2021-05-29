
@foreach ($menu_nodes as $menu)
    @if ($menu->has_child)
    <li class="sub-menu first"><a class="sub_menu-item" title="" href="{{$menu->url}}" >{{ $menu->title }}</a>
        <!-- MEGA MENU -->
        @if(count($menu->child)>0)
        <ul class="mega_menu megamenu_col1 clearfix">
            <li class="col">
                <ol>
                    @foreach ($menu->child as $menu_sub)
                    <li><a href="javascript:void(0);" >{{$menu_sub->title}}</a></li>
                    @endforeach
                </ol>
            </li>
        </ul><!-- //MEGA MENU -->
        @endif
    </li>
    @else
         <li class="last sale_menu"><a class="sale_menu-item" href="{{ $menu->url }}" >{{ $menu->title }}</a></li>
    @endif
@endforeach