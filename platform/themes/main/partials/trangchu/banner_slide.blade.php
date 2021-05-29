
<section id="home" class="padbot0">	 
    <!-- TOP SLIDER -->
    <div class="flexslider top_slider">
        <ul class="slides">
            @if (has_field($page, 'background_first'))
                    <li class="slide1"  style="background-image:url({{RvMedia::getImageUrl(get_field($page, 'background_first'), 'slider_background')  }}); ">  
                    </li>
                    <li class="slide1"  style="background-image:url({{RvMedia::getImageUrl(get_field($page, 'background_two'), 'slider_background')  }}); "> 
                    </li>
            @endif
          
        </ul>
    </div><!-- //TOP SLIDER -->
</section>