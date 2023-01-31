<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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

Route::group(['namespace'  => 'App\Http\Controllers'], function () {
  /**
   * Home Routes
   */
  Route::get('/', 'HomeController@index')->name('index');
  Route::get('/detail/{id}', 'HomeController@detail')->name('detail');
  Route::get('/shop', 'HomeController@shop')->name('shop');
  Route::get('/shop/search', 'HomeController@search');

  Route::get('/category-galery', 'HomeController@categories')->name('category-galery');


  Route::group(['middleware' => ['guest']], function () {
    /**
     * Register Routes
     */
    Route::get('/register', 'RegisterController@show')->name('register.show');
    Route::post('/register', 'RegisterController@register')->name('register.perform');

    /**
     * Login Routes
     */
    Route::get('/login', 'LoginController@show')->name('login');
    Route::post('/login', 'LoginController@login')->name('login.perform');
  });

  Route::group(['middleware' => ['auth']], function () {
    /**
     * Product And Cateogry Routes
     */
    Route::resource('products', 'ProductsController')->only(['index', 'store', 'edit', 'update', 'destroy', '']);
    Route::resource('categories', 'CategoryController')->only(['index', 'store', 'edit', 'update', 'destroy']);


    /**
     * Admin Routes
     */
    Route::get('/admin', 'AdminController@index')->name('admin');

    /**
     * Logout Routes
     */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
  });
});
