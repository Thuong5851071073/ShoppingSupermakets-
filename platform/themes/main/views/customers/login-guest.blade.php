<div class="login_register_wrap section">
    <div class="container">  
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10 justify-content-center-config">
                <div class="login_wrap">
                    <div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>{{ __('Login') }}</h3>
                        </div>
                        
                        
                        @dd(isset($errors))
                        <div class="container">
                            <form action="{{ route('guest.login') }}" method="POST">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" value="{{ old('email') }}" name="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" value="" name="password">
                                    </div>
                                </div>
                                <button type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    