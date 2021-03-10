<?php

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

// Route::get('/', function () {
//     return view('index');
// })->name('index');
Route::get('/' , 'DefenceController@home')->name('index');
 

// Files

// Route::get('/files/create','FilesController@create')->name('files.create')->middleware('auth');
Route::get('/files', 'FilesController@index')->name('files');
Route::get('/files/create', 'FilesController@store')->name('files.create')->middleware('auth');
Route::post('/files/store', 'FilesController@store')->name('files.store')->middleware('auth');

Route::get('/files/{id}' ,'FilesController@show')->name('files.show')->middleware('auth');
Route::get('/files/{id}/edit' ,'FilesController@edit')->name('files.edit')->middleware('auth');
Route::put('/files/{id}' ,'FilesController@update')->name('files.update')->middleware('auth');
Route::delete('/files/{id}','FilesController@destroy')->name('files.destroy')->middleware('auth');

// Files End
//Files Data
Route::post('/files/data/{id}', 'FilesController@dataAdd')->name('files.data.store');


Route::get('/admin/create', 'UserController@myproperty')->name('admin.create')->middleware('auth');

// Route::get('/admin/fileChart', function () {
//     return view('admin.fileChart');
// })->name('admin.fileChart');

// Route::get('/admin/editFile', function () {
//     return view('admin.update-file');
// })->name('admin.editFile');

// Route::get('/admin/addFile', function () {
//     return view('admin.submit-file');
// })->name('admin.addFile');


Route::get('/loadmore', 'LoadMoreController@index');
Route::any('/loadmore/load_data', 'DefenceController@load_data')->name('loadmore.load_data');

Route::any('/find' , 'DefenceController@find')->name('find');
Route::any('/findP' , 'DefenceController@findProp')->name('findP');
Route::any('/loc/{id}' , 'DefenceController@FindByLocation')->name('findByLocation');
Route::any('/loct/{id}' , 'DefenceController@FindByType')->name('findBytype');
Route::any('/search' , 'DefenceController@searchBar')->name('searchBar');
Route::any('/sidesearch' , 'DefenceController@sideSearch')->name('sideSearch');
Route::any('/filesearch' , 'FilesController@searchBar')->name('file.search');


Route::get('/ads' , 'DefenceController@index')->name('ads.index');
Route::get('/ads/create','DefenceController@create')->name('ads.create')->middleware('auth');
Route::post('/ads', 'DefenceController@store')->name('ads.store');
Route::get('/ads/{id}' ,'DefenceController@show')->name('ads.show');
Route::delete('/ads/{id}','DefenceController@destroy')->name('ads.destroy');
Route::post('/Comments', 'CommentsController@store')->name('Comments.store');
Route::get('/admin' , 'UserController@admin')->name('admin.index')->middleware('auth');
Route::get('/admin/ads' , 'UserController@index')->name('admin.ads')->middleware('auth');
Route::get('/admin/updateform/{id}' , 'UserController@updateform')->name('admin.updateform')->middleware('auth');
Route::get('/admin/aprovelist/{id}' , 'UserController@aprovelist')->name('admin.aprovelist')->middleware('auth');
Route::post('/admin/updateProperty/{id}' , 'UserController@updateProperty')->name('admin.updateProperty')->middleware('auth');
Route::get('/admin/createFile' , 'FilesController@createFile')->name('admin.createFile')->middleware('auth');
Route::get('/seller' , 'UserController@seller')->name('seller.index');

Route::get('/about', function () {
Route::any('/sidesearch' , 'DefenceController@sideSearch')->name('sideSearch');
return view('ads.about');
})->name('about');

Route::get('/contact', function () {
    return view('ads.contact');
})->name('contact');

Route::get('/maps', function () {
    return view('ads.maps');
})->name('maps');

Route::get('/forms', function () {
    return view('ads.forms');
})->name('forms');

// Route::get('/files', function () {
//     return view('ads.files');
// })->name('files');



Auth::routes(['register' => true]);



Route::get('/home', 'DefenceController@home')->name('home');
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::match(['get', 'post'], '/adminOnlyPage/', 'HomeController@admin');
    
});

Route::group(['middleware' => 'App\Http\Middleware\BuyerMiddleware'], function()
{
    Route::match(['get', 'post'], '/buyerOnlyPage/', 'HomeController@buyer');
    
});

Route::group(['middleware' => 'seller'], function()
{
    
    Route::match(['get', 'post'], '/sellerOnlyPage/', 'HomeController@seller');
    // Route::get('/ads/create','DefenceController@create')->name('ads.create');
    
});
