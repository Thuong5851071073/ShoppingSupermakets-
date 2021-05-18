{{-- <!-- SHOP BANNER -->1
						<div class="banner_block margbot15">
							<a class="banner nobord" href="javascript:void(0);" ><img src="{{ Theme::asset()->url('images/tovar/banner24.jpg') }}" alt="" /></a>
						</div><!-- //SHOP BANNER --> --}}
                        <div class="banner_block margbot15">
                            <div class="swiper-container mySwiper">
                                <div class="swiper-wrapper">
                                  @foreach ($sliders as $value)
                                    <div class="swiper-slide"><img class="img_slide" src="{{ RvMedia::getImageUrl($value) }}" alt="" /></div>
                                  @endforeach
                                  {{-- <div class="swiper-slide"><img class="img_slide" src="{{ Theme::asset()->url('images/articles/mien-phi-giao-hang.png') }}" alt="" /></div>
                                  <div class="swiper-slide"><img class="img_slide" src="{{ Theme::asset()->url('images/articles/bia-page-chao-he.png') }}" alt="" /></div>
                                  <div class="swiper-slide"><img class="img_slide" src="{{ Theme::asset()->url('images/articles/mien-phi-giao-hang.png') }}" alt="" /></div>
                                  <div class="swiper-slide"><img class="img_slide" src="{{ Theme::asset()->url('images/articles/bia-page-chao-he.png') }}" alt="" /></div>
                                  <div class="swiper-slide"><img class="img_slide" src="{{ Theme::asset()->url('images/articles/mien-phi-giao-hang.png') }}" alt="" /></div> --}}
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                              </div>  
						</div>