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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// users
Route::get('/users', 'UsersController@index')->name('profile');

// Data Polis Asuransi Kebakaran
Route::get('/policies', 'PoliciesController@index')->name('index');
Route::get('/policies/create-new', 'PoliciesController@create_page')->name('create_page');
Route::post('/policies/create-new', 'PoliciesController@save_page')->name('save_page');
Route::get('/policies/update/{polis}', 'PoliciesController@update_page')->name('edit');
Route::post('/policies/update/{polis}', 'PoliciesController@update_save')->name('update');
Route::delete('/policies/delete/{polis}', 'PoliciesController@delete')->name('delete');

// Data Tipe Bangunan
Route::get('/buildings', 'BuildingsController@index')->name('index');
Route::get('/buildings/create-new', 'BuildingsController@create_page')->name('create_page');
Route::post('/buildings/create-new', 'BuildingsController@save_page')->name('save_page');
// Route::get('/buildings/update/{building}', 'BuildingsController@update_page')->name('edit');
// Route::post('/buildings/update/{building}', 'BuildingsController@update_save')->name('update');
// Route::delete('/buildings/delete/{building}', 'BuildingsController@delete')->name('delete');

// Data Kantor Cabang 
Route::get('/trees', 'TreesController@index')->name('index');
Route::get('/trees/create-new', 'TreesController@create_page')->name('create_page');
Route::post('/trees/create-new', 'TreesController@save_page')->name('save_page');
// Route::get('/trees/update/{tree}', 'TreesController@update_page')->name('edit');
// Route::post('/trees/update/{tree}', 'TreesController@update_save')->name('update');
// Route::delete('/trees/delete/{tree}', 'TreesController@delete')->name('delete');