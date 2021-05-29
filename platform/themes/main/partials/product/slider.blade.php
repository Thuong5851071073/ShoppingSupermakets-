
                        <div class="banner_block margbot15">
                            <div class="swiper-container mySwiper">
                                <div class="swiper-wrapper">
                                  @foreach ($sliders as $value)
                                    <div class="swiper-slide"><img class="img_slide" src="{{ RvMedia::getImageUrl($value) }}" alt="" /></div>
                                  @endforeach
                               
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                              </div>  
						              </div>