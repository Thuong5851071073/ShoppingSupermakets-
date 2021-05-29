@php Theme::set('pageName', __('Sign up')) @endphp

<!-- START LOGIN SECTION -->
<div class="login_register_wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10 justify-content-center-config">
                <div class="login_wrap">
                    <div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>{{ __('Đăng Ký') }}</h3>
                        </div>
                       
                        <form method="POST" action="{{ route('guest.register') }}">
                            @csrf
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    <strong>Thông báo</strong> {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="form-group">
                                <input class="form-control" name="name" id="txt-name" type="text" value="{{ old('name') }}" placeholder="{{ __('Tên Của Bạn ') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" id="txt-email" type="email" value="{{ old('email') }}" placeholder="{{ __('Email Của Bạn') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="password" id="txt-password" placeholder="{{ __('Mật Khẩu') }}">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="passwordConfirm" id="txt-password-confirmation" placeholder="{{ __('Nhập Lại Mật Khẩu') }}">
                                @if ($errors->has('passwordConfirm'))
                                    <span class="text-danger">{{ $errors->first('passwordConfirm') }}</span>
                                @endif
                            </div>
                            <div class="login_footer form-group">
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="agree_terms_policy" id="terms-policy" value="1">
                                        <label class="form-check-label" for="terms-policy"><span>{{ __('Tôi Đông Ý Với Điều Khoản.') }}</span></label>
                                    </div>
                                </div>
                            </div>
                            @if (setting('enable_captcha') && is_plugin_active('captcha'))
                                {!! Captcha::display() !!}
                            @endif
                            <div class="form-group">
                                <button type="submit" class="btn btn-fill-out btn-block">{{ __('Đăng Ký') }}</button>
                            </div>
                        </form>

                        <div class="text-center">
                            {!! apply_filters(BASE_FILTER_AFTER_LOGIN_OR_REGISTER_FORM, null, \Platform\Ecommerce\Models\Customer::class) !!}
                        </div>

                        <div class="form-note text-center">{{ __('Bạn Đã CÓ Tài Khoản ?') }} <a href="{{ route('get_login') }}">{{ __('Đăng Nhập') }}</a></div>
                        <div class="form-note text-center">{{ __('Nếu Bạn Mất Tài Khoản Vui Lòng Liên Hệ Số : 0326912693') }} </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END LOGIN SECTION -->
