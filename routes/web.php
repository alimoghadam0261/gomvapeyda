<?php

use App\Http\Controllers\Auth\Googleauthcontroller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\SendController;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('index');
Route::get('/single/{formads}', 'App\Http\Controllers\FormadsController@single')->name('single');
Route::get('/category/{category}', 'App\Http\Controllers\CategoryController@category')->name('category');



Auth::routes();

//----------auto login
Route::get('/auth/google', [Googleauthcontroller::class,'redirect'])->name('auth.google');
Route::get('/auth/google/callback', [Googleauthcontroller::class,'callback']);





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

Route::get('/aboute/index','App\Http\Controllers\AboutController@index')->name('aboute.index');
Route::get('/aboute/create','App\Http\Controllers\AboutController@create')->name('aboute.create');
Route::post('/aboute/store','App\Http\Controllers\AboutController@store')->name('aboute.store');
Route::delete('/aboute/destroy/{about}', 'App\Http\Controllers\AboutController@destroy')->name('aboute.destroy');


Route::get('/hemayat/index','App\Http\Controllers\HemayatController@index')->name('hemayat.index');
Route::get('/rull/index','App\Http\Controllers\RullController@index')->name('rull.index');





Route::get('/formads/index/', 'App\Http\Controllers\FormadsController@index')->middleware('auth')->name('formads.index');
Route::post('/formads/store', 'App\Http\Controllers\FormadsController@store')->name('formads.store');
Route::get('/formads/create/', 'App\Http\Controllers\FormadsController@create')->name('formads.create');
Route::get('/formads/create/edit/{formads}', 'App\Http\Controllers\FormadsController@edit')->name('formads.edit');
Route::get('/formads', 'App\Http\Controllers\FormadsController@show')->name('formads.show');
Route::patch('/formads/update/{formads}', 'App\Http\Controllers\FormadsController@update')->name('formads.update');
Route::delete('/formads/destroy/{formads}', 'App\Http\Controllers\FormadsController@destroy')->name('formads.destroy');
Route::delete('/formads/del/{formads}', 'App\Http\Controllers\FormadsController@del')->name('formads.delprofile');








//Route::delete('/formads/visitor/', 'App\Http\Controllers\SendController@visitor')->name('formads.visitor');


Route::prefix('admin')->middleware('auth.admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::resource('/category', 'App\Http\Controllers\CategoryController');
    Route::resource('/slider', 'App\Http\Controllers\SliderController');

});




//------------------sitemap----------------
Route::get('/sitemap.xml','App\Http\Controllers\SitemapController@index');

//-----geoip----
//Route::get('/geoip','App\Http\Controllers\GeoipController@index');
//Route::post('/geoip/store','App\Http\Controllers\GeoipController@store')->name('geoip.store');
Route::resource('/geoip','App\Http\Controllers\GeoipController');


//-------------dargah--------------------------
Route::get('/transactions/pay', 'App\Http\Controllers\TransactionController@pay');
Route::get('/transactions/verify', 'App\Http\Controllers\TransactionController@verify');
Route::get('/transaction/done', 'App\Http\Controllers\TransactionController@done')->name("transaction.done");
Route::get('/transaction/fail', 'App\Http\Controllers\TransactionController@fail')->name("transaction.fail");
//Route::get('/test/{i}','App\Http\Controllers\TransactionController@done');

Route::get('/transaction/adminpage','App\Http\Controllers\TransactionController@adminpage')->name('transaction.adminpage');
Route::get('/transaction/profilepage','App\Http\Controllers\TransactionController@profilepage')->name('transaction.profile');


