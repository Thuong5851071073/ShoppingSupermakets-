<section id="home" class="padbot0">	 
    <!-- TOP SLIDER -->
    <div class="flexslider top_slider">
        <ul class="slides">
            @if (has_field($page, 'background_first'))
                {{-- @dd(has_field($page, 'slider_background')) --}}
                    <li class="slide1"  style="background-image:url({{RvMedia::getImageUrl(get_field($page, 'background_first'), 'slider_background')  }}); ">  
                        <!-- CONTAINER -->
                        <div class="container">
                            <div class="flex_caption1">
                                @if (has_field($page, 'content_top'))
                                     <p class="title1 captionDelay2 FromTop">{{get_field($page, 'content_top')}}</p>
                                @endif
                                @if (has_field($page, 'content_bottom'))
                                     <p class="title2 captionDelay3 FromTop">{{get_field($page, 'content_bottom')}}</p>
                                @endif
                            </div>
                            <a class="flex_caption2" href="javascript:void(0);" >
                                <div class="middle">
                                    @if(has_field($page, 'button'))
                                        @foreach(get_field($page, 'button') as $k => $item)
                                            @if($k == 1)
                                                <span>{{get_sub_field($item, 'noi_dung')}}</span>
                                            @else
                                                {{get_sub_field($item, 'noi_dung')}}
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </a>
                            @if (has_field($page, 'images_slide'))
                                <div class="flex_caption3 slide_banner_wrapper">
                                    @foreach (get_field($page,'images_slide') as $k => $item)
                                        @php $t = 1; @endphp
                                    <a class="slide_banner slide{{$t}}_banner{{$k+1}} captionDelay{{$k+4}} FromBottom" href="javascript:void(0);" ><img src="{{RvMedia::getImageUrl(get_sub_field($item, 'slide'))  }}" alt="" /></a>      
                                   
                                    @endforeach
                                </div>
                            @endif
                        </div><!-- //CONTAINER -->
                    </li>
                    <li class="slide1"  style="background-image:url({{RvMedia::getImageUrl(get_field($page, 'background_two'), 'slider_background')  }}); ">  
                        <!-- CONTAINER -->
                        <div class="container">
                            <div class="flex_caption1">
                                @if (has_field($page, 'contnet_top_two'))
                                     <p class="title1 captionDelay2 FromTop">{{get_field($page, 'contnet_top_two')}}</p>
                                @endif
                                @if (has_field($page, 'content_bottom_two'))
                                     <p class="title2 captionDelay3 FromTop">{{get_field($page, 'content_bottom_two')}}</p>
                                @endif
                            </div>
                            <a class="flex_caption2" href="javascript:void(0);" >
                                <div class="middle">
                                    @if(has_field($page, 'button'))
                                        @foreach(get_field($page, 'button') as $k => $item)
                                            @if($k == 1)
                                                <span>{{get_sub_field($item, 'noi_dung')}}</span>
                                            @else
                                                {{get_sub_field($item, 'noi_dung')}}
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </a>
                            @if (has_field($page, 'images_slide_two'))
                                <div class="flex_caption3 slide_banner_wrapper">
                                    @foreach (get_field($page,'images_slide_two') as $k => $item)
                                        @php $t = 1; @endphp
                                        <a class="slide_banner slide{{$t}}_banner{{$k+1}} captionDelay{{$k+4}} FromBottom" href="javascript:void(0);" ><img src="{{RvMedia::getImageUrl(get_sub_field($item, 'slide_two'))  }}" alt="" /></a>      
                                    @endforeach
                                </div>
                            @endif
                        </div><!-- //CONTAINER -->
                    </li>
            @endif
          
        </ul>
    </div><!-- //TOP SLIDER -->
</section>