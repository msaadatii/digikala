<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//landing page
Route :: get('/','LandingPageController@index')->name('landing-page');
//products
Route :: get('/products','ShopController@index')->name('products');
Route :: get('/product/{product}','ShopController@show')->name('product.show');
//Cart
Route :: get('/cart','CartController@index')->name('cart.index');
Route :: post('/cart','CartController@store')->name('cart.store');
Route :: get('/cart/empty','CartController@empty')->name('cart.empty');
Route ::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');
Route ::patch('/cart/{product}','CartController@update')->name('cart.update');
//save for saveForLater
Route::post('/cart/saveForLater/{product}','SaveForLaterController@saveForLater')->name('cart.saveForLater');
Route:: delete('/cart/deleteSavedForLater/{product}','SaveForLaterController@destroy')->name('cart.destroySavedForLater');
Route:: post('/cart/switchFromSaveToCart/{product}','SaveForLaterController@switchFromSaveToCart')->name('cart.switchFromSaveToCart');
//Checkout
Route::get('/checkout','CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::post('/checkout','CheckoutController@store')->name('checkout.pay')->middleware('auth');
Route::get('/checkout/callback','CheckoutController@zarinpalCallBack')->name('checkout.callback')->middleware('auth');
Route::get('/checkout/successfull{refid}','CheckoutController@successfull')->name('checkout.successfull');
//coupons
Route::post('/coupon','CouponController@store')->name('coupon.store');
Route::delete('/coupon','CouponController@destroy')->name('coupon.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Search
Route::get('/search','ShopController@search')->name('search');
Route::get('autoComplete-ajax',array('as'=>'autocomplete.ajax','uses'=>'ShopController@ajaxSearchData'));

Route::get('/my-profile','UserController@edit')->name('user.edit')->middleware('auth');
Route::patch('/my-profile','UserController@update')->name('user.update')->middleware('auth');
Route::get('my-orders','UserController@orders')->name('user.orders')->middleware('auth');
Route::get('/order-products/{id}','UserController@order_products')->name('order.products')->middleware('auth');
