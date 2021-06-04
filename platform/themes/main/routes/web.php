<?php

use Illuminate\Support\Facades\Route;
use Platform\Slug\SlugHelper;

Route::group([
    'namespace'  => 'Platform\Ecommerce\Http\Controllers\Customers',
    'middleware' => ['web', 'core', 'customer.guest'],
], function () {
    Route::post('dang-nhap', 'LoginController@login')->name('login.post');
});
// Custom routes
// You can delete this route group if you don't need to add your custom routes.
Route::group(['namespace' => 'Theme\Main\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::get('/tim-kiem','MainController@getViewSeach')->name('public.search');
       
        Route::get('/lien-he', 'MainController@getcontact')->name('public.get_contact');
        Route::get('tag','MainController@getTag')->name('blog.tag');
        // Route::get('/gio-hang', 'MainController@getshoppingbag')->name('get_shoppingbag');

        // Route::group(['middleware' => 'customer'], function () {
        //     Route::get('gio-hang', 'MainController@getshoppingbag')->name('get_shoppingbag');
        // });
        Route::prefix('gio-hang')->group(function () {
            Route::post('them-vao-gio', 'CartController@addCart')->name('cart.add');
            Route::group(['middleware' => 'customer'], function () {
                Route::get('', 'CartController@getCart')->name('public.get-cart');
                Route::post('cap-nhat-gio-hang', 'CartController@updateCart')->name('public.update');
                Route::post('xoa-gio-hang', 'CartController@removeDetailCart')->name('cart.remove-detail');
            });
        });

        Route::prefix('nguoi-dung')->group(function(){
            Route::get('/dang-nhap', 'MainController@getlogin')->name('get_login');
            Route::get('/dang-ky', 'MainController@getregister')->name('get_dangky');
            Route::post('/dang-ky', 'MainController@register')->name('guest.register');

        });
     

        Route::prefix('thanh-toan')->group(function(){
            Route::get('/thong-tin-nguoi-nhan', 'MainController@getinforreship') ->name('get_inforreship');
            Route::get('/hinh-thuc-giao-hang', 'MainController@getwayshiping')->name('get_wayshiping');
            Route::get('/hinh-thuc-thanh-toan', 'MainController@getwaypay')->name('get_waypay');
            Route::get('/hinh-thuc-thanh-toan2', 'MainController@getwaypay2')->name('get_waypay2');
        });

        Route::prefix('san-pham')->group(function() {
            Route::get('{slug}', 'MainController@getCategory')->name('product.category');
            // Route::get('{slug}/', 'MainController@getbrandProduct')->name('product.brand');
            Route::get('{slug}/{slugPost}', 'MainController@getproductdetail')->name('product.detail');
        });
        Route::prefix('thuong-hieu')->group(function() {
            Route::get('', 'MainController@getViewBrand')->name('brand.index');
            Route::get('{slug}', 'MainController@getbrand')->name('get_brand');
        });

        Route::prefix('tin-tuc')->group(function() {
            Route::get('', 'MainController@getBlogTotal')->name('blog.index');
            Route::get('{slug}', 'MainController@getblog') ->name('get_reset');
            Route::get('{slug}/{slugPost}', 'MainController@getBlogDetail')->name('blog.detail');
           
        });

      

    });
}); 


Theme::routes();

Route::group(['namespace' => 'Theme\Main\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::get('/', 'MainController@index')
            ->name('public.index');


        Route::get('sitemap.xml', 'MainController@getSiteMap')
            ->name('public.sitemap');

        Route::get('{slug?}' . config('core.base.general.public_single_ending_url'), 'MainController@getView')
            ->name('public.single');
    });
});
