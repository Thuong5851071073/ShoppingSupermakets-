

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

   
    {{-- <li><a href="shoes.html" >shoes</a></li> --}}
    {{-- <li class="sub-menu"><a href="javascript:void(0);" >Pages</a>
        <!-- MEGA MENU -->
        <ul class="mega_menu megamenu_col3 clearfix">
            <li class="col">
                <ol>
                    <li><a href="about.html" >About Us</a></li>
                    <li><a href="gallery.html" >Gallery<span>new</span></a></li>
                    <li><a href="product-page.html" >Product Page</a></li>
                    <li><a href="love-list.html" >Love List</a></li>
                    <li><a href="shopping-bag.html" >Shopping Bag</a></li>
                    <li><a href="my-account.html" >My Account</a></li>
                    
                </ol>
            </li>
            <li class="col">
                <ol>
                    <li><a href="product-catalog.html" >Product Catalog</a></li>
                    <li><a href="brands-list.html" >Brands List</a></li>
                    <li><a href="update.html" >Site Update</a></li>
                    <li><a href="contacts.html" >Contacts</a></li>
                    <li><a href="shortcodes.html" >Shortcodes</a></li>
                </ol>
            </li>
            <li class="col">
                <ol>
                    <li><a href="404.html" >404 Page</a></li>
                    <li><a href="articles.html" >Articles</a></li>
                    <li><a href="article-single.html" >Article Single</a></li>
                    <li><a href="checkout.html" >Checkout</a></li>
                    <li><a href="faq.html" >FAQ</a></li>
                </ol>
            </li>
        </ul><!-- //MEGA MENU -->
    </li> --}}
    {{-- <li class="sub-menu active"><a href="javascript:void(0);" >Blog</a>
        <!-- MEGA MENU -->
        <ul class="mega_menu megamenu_col1 clearfix">
            <li class="col">
                <ol>
                    <li><a href="blog.html" >Blog</a></li>
                    <li class="active"><a href="blog-post.html" >Blog Post</a></li>
                </ol>
            </li>
        </ul><!-- //MEGA MENU -->
    </li> --}}
    @else
         <li class="last sale_menu"><a class="sale_menu-item" href="{{ $menu->url }}" >{{ $menu->title }}</a></li>
    @endif
@endforeach