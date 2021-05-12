<section class="brands_carousel">
			
    <!-- CONTAINER -->
    <div class="container">
        
        <!-- JCAROUSEL -->
        <div class="jcarousel-wrapper">
            
            <!-- NAVIGATION -->
            <div class="jCarousel_pagination">
                <a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
                <a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
            </div><!-- //NAVIGATION -->
            
            <div class="jcarousel" data-appear-top-offset='-100' data-animated='fadeInUp'>
                <ul>
                    @foreach ($brand as $k )  
                        <li><a href="javascript:void(0);" >  <img src="{{ RvMedia::getImageUrl($k->logo, 'featured', false, RvMedia::getDefaultImage()) }}" alt="" /></a></li>
                    @endforeach
                </ul>
            </div>
        </div><!-- //JCAROUSEL -->
    </div><!-- //CONTAINER -->
</section>