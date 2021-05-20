<?php

use Illuminate\Support\Facades\Route;
use Platform\Slug\SlugHelper;

// Custom routes
// You can delete this route group if you don't need to add your custom routes.
Route::group(['namespace' => 'Theme\Main\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

       
        Route::get('/lien-he', 'MainController@getcontact')->name('public.get_contact');
        Route::get('/thuong-hieu', 'MainController@getbrand')->name('get_brand');
        Route::get('/gio-hang', 'MainController@getshoppingbag')->name('get_shoppingbag');
        
        Route::prefix('nguoi-dung')->group(function(){
            Route::get('/dang-nhap', 'MainController@getlogin')->name('get_login');
            Route::post('/dang-nhap', 'MainController@login')->name('guest.login');
            Route::get('/lay-lai-mat-khau', 'MainController@getreset') ->name('get_reset');
            Route::get('/dang-ky', 'MainController@getregister')->name('get_dangky');
        });
        Route::prefix('tin-tuc')->group(function(){
            Route::get('/', 'MainController@getblog') ->name('get_reset');
            Route::get('/chi-tiet', 'MainController@getdetailblog') ->name('get_reset');
        });

        Route::prefix('check-pay')->group(function(){
            Route::get('/thong-tin-nguoi-nhan', 'MainController@getinforreship') ->name('get_inforreship');
            Route::get('/hinh-thuc-giao-hang', 'MainController@getwayshiping')->name('get_wayshiping');
            Route::get('/hinh-thuc-thanh-toan', 'MainController@getwaypay')->name('get_waypay');
            Route::get('/hinh-thuc-thanh-toan2', 'MainController@getwaypay2')->name('get_waypay2');
        });

        Route::prefix('san-pham')->group(function() {
            Route::get('{slug}', 'MainController@getCategory')->name('product.category');
            Route::get('{slug}/{slugPost}', 'MainController@getproductdetail')->name('product.detail');
        });

        Route::prefix('tin-tuc')->group(function() {
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
