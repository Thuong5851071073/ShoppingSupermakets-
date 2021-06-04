<div class="zalo-chat-widget" data-oaid="579745863508352884" data-welcome-message="Rất vui khi được hỗ trợ bạn!"
    data-autopopup="0" data-width="350" data-height="420">
</div>
<ul class="sticky">
    <li class="sticky__list">
        <a href="https://zalo.me/0969786807" target="_blank" class="sticky__list-link">
            <i class="sticky__list-link--icontext">Zalo</i>
            <div class="sticky__list-link--hide">Zalo: {{ theme_option('company_phonezalo') }}</div>
        </a>
    </li>
    <li class="sticky__list">
        <a href="{{ theme_option('company_facebook_mess') }}" title="" class="sticky__list-link" id="mess-fb">
            <i class="fab fa-facebook-f sticky__list-link--icon"></i>
            <div class="sticky__list-link--hide">Nhắn tin facebook</div>
        </a>
    </li>
 
    <li class="sticky__list">
        <a href="mailto:{{ theme_option('company_gmail') }}" class="sticky__list-link">
            <i class="fas fa-envelope sticky__list-link--icon"></i>
            <div class="sticky__list-link--hide">  {!! theme_option('Email') !!}</div>
        </a>
    </li>
    <li class="sticky__list">
        <a href="tel:{!! theme_option('phone_247') !!}" class="sticky__list-link">
            <i class="fas fa-phone-alt sticky__list-link--icon"></i>
            <div class="sticky__list-link--hide"> {!! theme_option('phone') !!}</div>
        </a>
    </li>
   
</ul>

