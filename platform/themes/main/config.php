<?php

use Platform\Theme\Theme;

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials" and "views"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function (Theme $theme)
        {
            // Partial composer.
            // $theme->partialComposer('header', function($view) {
            //     $view->with('auth', \Auth::user());
            // });
          
            // You may use this event to set up your assets.
            $theme->asset()->add('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'); //fontawesome
           
            $theme->asset()->add('fontawesome2', 'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'); //fontawesome
            $theme->asset()->container('after_header')->add('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css'); //bootstrap
            $theme->asset()->container('after_header')->add('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css');
            $theme->asset()->container('after_header')->usePath()->add('style', 'templates/css/style.css');
            
            $theme->asset()->container('after_header')->usePath()->add('aos_animation', 'templates/css/animate.css');
            $theme->asset()->container('after_header')->usePath()->add('fancySelect', 'templates/css/fancySelect.css');
            $theme->asset()->container('after_header')->usePath()->add('flexslider', 'templates/css/flexslider.css');
            $theme->asset()->container('after_header')->usePath()->add('flipclock', 'templates/css/flipclock.css');
            $theme->asset()->container('after_header')->usePath()->add('animate', 'templates/css/animate.css');
            $theme->asset()->add('swiper_css', 'https://unpkg.com/swiper/swiper-bundle.min.css'); //swiper
            $theme->asset()->add('swiper_codebean', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css'); //swiper
            $theme->asset()->container('after_header')->usePath()->add('common', 'css/common.css'); //css
   
            $theme->asset()->container('footer')->usePath()->add('jquery', 'templates/js/jquery.min.js'); //js
            
            $theme->asset()->container('footer')->usePath()->add('fancySelect', 'templates/js/fancySelect.js'); //js
            // $theme->asset()->container('footer')->usePath()->add('script', 'templates/js/script.js'); //js
            $theme->asset()->container('footer')->usePath()->add('flipclock', 'templates/js/flipclock.min.js'); //js
            $theme->asset()->container('footer')->usePath()->add('flexslider', 'templates/js/jquery.flexslider-min.js'); //js
            $theme->asset()->container('footer')->usePath()->add('jcarousel', 'templates/js/jquery.jcarousel.js'); //js
            $theme->asset()->container('footer')->usePath()->add('magnific', 'templates/js/jquery.magnific-popup.min.js'); //js

            $theme->asset()->container('footer')->usePath()->add('sticky', 'templates/js/jquery.sticky.js'); //js
            $theme->asset()->container('footer')->usePath()->add('jqueryui', 'templates/js/jqueryui.custom.min.js'); //js
            $theme->asset()->container('footer')->usePath()->add('myscript', 'templates/js/myscript.js'); //js
            $theme->asset()->container('footer')->usePath()->add('parallax', 'templates/js/parallax.js'); //js
            $theme->asset()->container('footer')->usePath()->add('superfish', 'templates/js/superfish.min.js'); //js
            $theme->asset()->container('footer')->usePath()->add('animate', 'templates/js/animate.js'); //js
            $theme->asset()->container('footer')->add('jqueryboostrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js');
            // $theme->asset()->container('footer')->add('jqueryboostrap4', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');
            // $theme->asset()->container('footer')->add('boostrap4ajax', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
            // $theme->asset()->container('footer')->add('boostrap4js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
            // $theme->asset()->container('footer')->add('aos.js', 'https://unpkg.com/aos@next/dist/aos.js');
          
            $theme->asset()->container('footer')->add('swiper_js', 'https://unpkg.com/swiper/swiper-bundle.min.js');

            $theme->asset()->container('footer')->usePath()->add('common', 'js/common.js'); //js

            if (function_exists('shortcode')) {
                $theme->composer(['index', 'page', 'post'], function (\Platform\Shortcode\View\View $view) {
                    $view->withShortcodes();
                });
            }
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function ($theme)
            {
                $theme->asset()->usePath()->add('common2', 'css/common.css');
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }
        ]
    ]
];
