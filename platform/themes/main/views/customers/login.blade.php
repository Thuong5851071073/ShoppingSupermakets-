@php Theme::set('pageName', __('Login')) @endphp
 <div class="login_register_wrap section">
     <div class="container">  
         <div class="row justify-content-center">
             <div class="col-xl-6 col-md-10 justify-content-center-config">
                 <div class="login_wrap">
                     <div class="padding_eight_all bg-white">
                         <div class="heading_s1">
                             <h3>{{ __('Login') }}</h3>
                            </div>
                        {{-- <div class="log-form">
                               <h2 class=" header-title">Login to your account</h2> --}}
                         @if ($errors->any())
                            <span class="text-danger">{{ $errors->first() }}</span>
                         @endif
                         <form class="form" method="POST" action="{{ route('login.post') }}">
                             @csrf
                                
                                  {{-- <input class="form-title" type="text" title="username" placeholder="username" />
                                  <input  class="form-title"  type="password" title="username" placeholder="password" />
                                  <button type="submit" class="btn btn-submit">Login</button>
                                  <a class="forgot" href="#">Forgot Username?</a> --}}
                                
                                <div class="form-group">
                                    <input class="form-control" name="email" id="txt-email" type="email" value="{{ old('email') }}" placeholder="{{ __('Your Email') }}">
                                    
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" id="txt-password" placeholder="{{ __('Password') }}">
                                    
                                </div>
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember-me" value="1">
                                            <label class="form-check-label" for="remember-me"><span>{{ __('Remember me') }}</span></label>
                                        </div>
                                    </div>
                                    {{-- <a href="{{ route('get_resetPass') }}">{{ __('Quên Mật Khẩu') }}</a> --}}
                                </div>
                              <div class="form-group"> 
                                    <button type="submit" class="btn btn-fill-out btn-block">{{ __('Đăng Nhập') }}</button>
                                </div> 
                                 {{-- </div><!--end log form --> --}}
                            </form>

                         <div class="text-center">
                             {!! apply_filters(BASE_FILTER_AFTER_LOGIN_OR_REGISTER_FORM, null, \Platform\Ecommerce\Models\Customer::class) !!}
                         </div>
                         <div class="form-note text-center">{{ __("Nếu Bạn Chưa Có Tài Khoản") }} <a href="{{ route('get_dangky') }}">{{ __('Đăng Ký ') }}</a></div>
                         <div class="form-note text-center">{{ __('Nếu Bạn Mất Tài Khoản Vui Lòng Liên Hệ Số : 0326912693') }} </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- END LOGIN SECTION -->
