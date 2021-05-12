<section class="services_section">
			
    <!-- CONTAINER -->
    <div class="container">
        @if (has_field($page, 'service'))
            @foreach(get_field($page, 'service') as $k => $item)
                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 padbot60 services_section_description" data-appear-top-offset='-100' data-animated='fadeInLeft'>
                        <p>{{get_sub_field($item, 'name_talk')}}</p>
                        <span>{{get_sub_field($item, 'content_talk')}}</span>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 padbot30" data-appear-top-offset='-100' data-animated='fadeInRight'>
                        
                        <!-- ROW -->
                    
                        <div class="row" style="margin-right: 0; margin-left: 0;">
                            <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 col-ss-12 padbot30">
                                <div class="service_item">
                                    <div class="clearfix"><i class="fas fa-umbrella" style="margin-right:2rem;"></i>
                                        <p>{{get_sub_field($item, 'name_service')}}</p></div>
                                    <span>{{get_sub_field($item, 'content_service')}}</span>
                                </div>
                            </div>
                          
                            <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 col-ss-12 padbot30">
                                <div class="service_item">
                                    <div class="clearfix"><i class="fas fa-truck-moving" style="margin-right:2rem;"></i></i>
                                        <p>{{get_sub_field($item, 'name_service_two')}}</p></div>
                                    <span>{{get_sub_field($item, 'content_service_two')}}</span>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 col-ss-12 padbot30">
                                <div class="service_item">
                                    <div class="clearfix"><i class="fas fa-microscope" style="margin-right:2rem;"></i>
                                        <p>{{get_sub_field($item, 'name_service_three')}}</p></div>
                                    <span>{{get_sub_field($item, 'content_service_three')}}</span>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 col-ss-12 padbot30">
                                <div class="service_item">
                                    <div class="clearfix"><i class="fas fa-chalkboard-teacher" style="margin-right:2rem;"></i>
                                        <p>{{get_sub_field($item, 'name_service_four')}}</p></div>
                                    <span>{{get_sub_field($item, 'content_service_four')}}</span>
                                </div>
                            </div>

                        </div><!-- //ROW -->
                    </div>
                </div><!-- //ROW -->
            @endforeach
        @endif
    </div><!-- //CONTAINER -->
</section>