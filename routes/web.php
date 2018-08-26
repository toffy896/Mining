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

Route::get('/site', function()
{
    return View::make('site_pages.landing');
}) ->name('site');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('miners','MinerController') ->middleware('auth');
Route::resource('statuss','StatusController')->middleware('auth');
Route::resource('updates','UpdateController')->middleware('auth');
Route::get('calender', 'UpdateController@calender')->name('calender');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::resource('reports','ReportController')->middleware('auth');
Route::get('/test', 'ProductController@show');

Route::get('upload', 'UpdateController@upload')->name('upload');
Route::get('/reports/step1', 'ReportController@createStep1')->name('report_1');
Route::post('/reports/step1', 'ReportController@postCreateStep1')->name('report_1p');

Route::get('/reports/step2', 'ReportController@createStep2')->name('report_2');
Route::post('/reports/step2', 'ReportController@postCreateStep2')->name('report_2p');
Route::post('/products/remove-image', 'ReportController@removeImage');
 
Route::get('/reports/step3', 'ReportController@createStep3')->name('report_3');
Route::post('/reports/store', 'ReportController@store')->name('report_3p');
 
Route::get('/products', 'ReportController@index');
 
Route::get('/products/downloadPDF/{id}','ReportController@downloadPDF')->name('pdf');

