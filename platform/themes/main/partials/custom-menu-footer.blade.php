{{-- <div class="menu_top">
    <a href="#" class="menu_link" title="">
        Help
    </a>
    <div class="menu_link_item">
        <a href="" class="menu_link_item_name">
            information
        </a>
        <a href="" class="menu_link_item_name">
            information
        </a>
        <a href="" class="menu_link_item_name">
            information
        </a>
        <a href="" class="menu_link_item_name">
            information
        </a>
    </div>

</div>
<div class="menu_top">
    <a href="#" class="menu_link" title="">
        Help
    </a>
    <div class="menu_link_item">
        <a href="" class="menu_link_item_name">
            information
        </a>
        <a href="" class="menu_link_item_name">
            information
        </a>
        <a href="" class="menu_link_item_name">
            information
        </a>
        <a href="" class="menu_link_item_name">
            information
        </a>
    </div>

</div> --}}
@foreach ($menu_nodes as $menu)
    @if ($menu->has_child)
            <div class="menu_top">
                <a href="{{$menu->url}}" class="menu_link" title="">
                    {{$menu->title}}
                </a>
                @if(count($menu->child)>0)
                <div class="menu_link_item">
                    @foreach ($menu->child as $menu_sub)
                        <a href="{{$menu_sub->url}}" class="menu_link_item_name">
                           {{$menu_sub->title}}
                        </a>
                    @endforeach
                </div>
                @endif
            </div>
     @endif
 @endforeach