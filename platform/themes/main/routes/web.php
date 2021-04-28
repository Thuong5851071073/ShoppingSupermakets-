<?php

// Custom routes
// You can delete this route group if you don't need to add your custom routes.
Route::group(['namespace' => 'Theme\Main\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        // Add your custom route here
        // Ex: Route::get('hello', 'MainController@getHello');
        Route::get('/dang-nhap', 'MainController@getlogin')
        ->name('get_login'); 
        Route::get('/reset', 'MainController@getreset')
        ->name('get_reset'); 
        Route::get('/dang-ky', 'MainController@getregister')
        ->name('get_dangky'); 
        Route::get('/bai-viet', 'MainController@getblog')
        ->name('get_blog');  
        Route::get('/san-pham-bim', 'MainController@getproductbim')
        ->name('get_product_bim'); 
        Route::get('/san-pham-sua', 'MainController@getproductsua')
        ->name('get_product_sua'); 
        Route::get('/chitietsanpham', 'MainController@getproductdetail')
        ->name('get_product_detail'); 
        Route::get('/thuong-hieu', 'MainController@getbrand')
        ->name('get_brand'); 
        Route::get('/lien-he', 'MainController@getcontact')
        ->name('get_contact');
        Route::get('/gio-hang', 'MainController@getshoppingbag')
        ->name('get_shoppingbag');
        Route::get('/thong-tin-nguoi-nhan', 'MainController@getinforreship')
        ->name('get_inforreship');
        Route::get('/hinh-thuc-giao-hang', 'MainController@getwayshiping')
        ->name('get_wayshiping');
        Route::get('/hinh-thuc-thanh-toan', 'MainController@getwaypay')
        ->name('get_waypay');
        Route::get('/hinh-thuc-thanh-toan2', 'MainController@getwaypay2')
        ->name('get_waypay2');
        Route::get('/ve-chung-toi', 'MainController@getaboutus')
        ->name('get_about_us');


    });
});

Theme::routes();

Route::group(['namespace' => 'Theme\Main\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::get('/', 'MainController@getIndex')
            ->name('public.index'); 
           
        Route::get('sitemap.xml', 'MainController@getSiteMap')
            ->name('public.sitemap');

        Route::get('{slug?}' . config('core.base.general.public_single_ending_url'), 'MainController@getView')
            ->name('public.single');

    });
});
