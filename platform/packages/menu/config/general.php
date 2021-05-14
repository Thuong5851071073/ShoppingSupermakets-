<?php

return [
    'locations' => [
        'header-menu' => 'Header Navigation',
        'header-menu-desktop' => 'Header Navigation desstop',
        'main-menu'   => 'Main Navigation',
        'category-menu'   => 'Category Navigation',
        'footer-menu-desktop' => 'Footer Navigation Desktop',
        'footer-menu' => 'Footer Navigation',
    ], 
    'cache'     => [
        'enabled' => env('CACHE_FRONTEND_MENU', false),
    ],
];