{{-- form lien he --}}
<div class="col-lg-8 col-md-8 col-sm-12 col-12 padbot30">
    
    {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST']) !!}
    @if(session()->has('success_msg') || session()->has('error_msg') || isset($errors))
        @if (session()->has('success_msg'))
            <div class="alert alert-success">
                <p>{{ session('success_msg') }}</p>
            </div>
        @endif
        @if (session()->has('error_msg'))
            <div class="alert alert-danger">
                <p>{{ session('error_msg') }}</p>
            </div>
        @endif
        @if (isset($errors) && count($errors))
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span> <br>
                @endforeach
            </div>
        @endif
    @endif

    <div class="row">
        <h3 class="name_contact "><b class="text20">Liên Hệ Với Chúng Tôi</b></h3>
        <div class="col-md-6">
            <div class="form-group">
                <label for="contact_name" class="control-label required">{{ trans('plugins/contact::contact.form_name') }}</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="contact_name"
                    placeholder="{{ trans('plugins/contact::contact.form_name') }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="contact_email" class="control-label required">{{ trans('plugins/contact::contact.form_email') }}</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="contact_email"
                    placeholder="{{ trans('plugins/contact::contact.form_email') }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="contact_address" class="control-label">{{ trans('plugins/contact::contact.form_address') }}</label>
                <input type="text" class="form-control" name="address" value="{{ old('address') }}" id="contact_address"
                    placeholder="{{ trans('plugins/contact::contact.form_address') }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="contact_phone" class="control-label">{{ trans('plugins/contact::contact.form_phone') }}</label>
                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" id="contact_phone"
                    placeholder="{{ trans('plugins/contact::contact.form_phone') }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="contact_subject" class="control-label">{{ trans('plugins/contact::contact.form_subject') }}</label>
                <input type="text" class="form-control" name="subject" value="{{ old('subject') }}" id="contact_subject"
                    placeholder="{{ trans('plugins/contact::contact.form_subject') }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="contact_content" class="control-label required">{{ trans('plugins/contact::contact.form_message') }}</label>
                <textarea name="content" id="contact_content" class="form-control" rows="5" placeholder="{{ trans('plugins/contact::contact.form_message') }}">{{ old('content') }}</textarea>
            </div>
        </div>
        @if (setting('enable_captcha') && is_plugin_active('captcha'))
            <div class="col-md-12">
                <div class="form-group">
                    <label for="contact_robot" class="control-label required">{{ trans('plugins/contact::contact.confirm_not_robot') }}</label>
                    {!! Captcha::display('captcha') !!}
                    {!! Captcha::script() !!}
                </div>
            </div>
       @endif
        </div>

        <div class="form-group"><p>{!! trans('plugins/contact::contact.required_field') !!}</p></div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary cyan text">{{ trans('plugins/contact::contact.send_btn') }}</button>
        </div>

    {!! Form::close() !!}
    <!-- CONTACT FORM -->
    {{-- <div class="contact_form">
        <h3><b>Contacts form</b></h3>
        <p>Sign in to save and share your Love List.</p>
        <div id="note"></div>
        <div id="fields">
            <form id="ajax-contact-form" action="">
                <label>Name</label>
                <input type="text" name="name" value="" placeholder="Name" />
                <label>E-mail</label>
                <input type="text" name="email" value="" placeholder="E-mail" />
                <label>Phone</label>
                <input type="text" name="phone" value="" placeholder="Phone" />
                <label>Message</label>
                <textarea name="message" placeholder="Message" ></textarea><br>
                <input class="btn active" type="submit" value="Send Message" />
            </form>
        </div>
    </div><!-- //CONTACT FORM --> --}}
</div>
{{-- end form lien he --}}