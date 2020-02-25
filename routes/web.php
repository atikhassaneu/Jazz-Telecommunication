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

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/','HomeController@index')->name('index');
    Route::get('/services','ServiceController@index')->name('services');
    Route::get('/service/{id}','ServiceController@show')->name('service.show');
    Route::get('/about-us','AboutUsController@index')->name('aboutUs');
    Route::get('/contact-us','ContactUsController@index')->name('contactUs');
    Route::post('/contact-us','ContactUsController@store')->name('contact.store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//admin route 
Route::group(['as' => 'admin.','prefix' => 'admin/','namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('dashboard','DashboardController@index')->name('dashboard.index');
    Route::resource('slider','SliderController');
    Route::get('service','ServiceController@index')->name('service.index');
    Route::post('service/store','ServiceController@store')->name('service.store');
    Route::put('service/update','ServiceController@update')->name('service.update');
    Route::delete('service/{id}','ServiceController@destroy')->name('service.destroy');

    Route::get('contact',"ContactController@index")->name('contact.index');

    Route::get('contact','ContactController@index')->name('contact.index');
    Route::get('contact/show/{id}','ContactController@show')->name('contact.show');
    Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');

});


