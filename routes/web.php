<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthenticatedSessionController;
use App\http\Controllers\CategoryController;
use App\http\Controllers\SubcategoryController;
use App\http\Controllers\ProductController;
use App\http\Controllers\ListController;
use App\http\Controllers\SublistController;
use App\http\Controllers\ProductlistController;
use App\http\Controllers\CoustomerController;
use App\http\Controllers\SendMailController;
use App\http\Controllers\ContactController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
//admin-login
        //admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->group(function(){
        //login route
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('adminlogin');
        // Route::get('login','AuthenticatedSessionController@create1')->name('login');
        // Route::post('login','AuthenticatedSessionController@store1')->name('adminlogin');
        // Route::post('logout','AuthenticatedSessionController@destroy')->name('logout.destroy');

       
    });
});
//category
Route::get('category','CategoryController@create1')->name('category');
Route::post('category',[CategoryController::class,'adddata']);
Route::get('list','ListController@list')->name('list');
Route::get('delete/{id}','ListController@delete')->name('delete');
Route::get('showdata/{id}','ListController@showdata')->name('showdata');

//subcategory

Route::get('subcategory','SubcategoryController@creat2')->name('subcategory');
Route::post('subcategory',[SubcategoryController::class,'addsubdata']);
Route::get('sublist','SublistController@sublist')->name('sublist');
Route::get('delete/{id}','SublistController@delete')->name('delete');
//product

Route::get('product','ProductController@creat3')->name('product');
Route::post('product',[ProductController::class,'addproduct']);
Route::get('productlist','ProductlistController@productlist')->name('productlist');
Route::get('delete/{id}','ProductlistController@delete')->name('delete');
//yajra-datable(coustomer)

Route::get('coustomer', 'CoustomerController@index5')->name('coustomer');
Route::post('coustomer',[CoustomerController::class,'addcosdata']);                              
Route::get('coustomer', 'CoustomerController@coustomerlist')->name('coustomerlist'); 


//registration form(sending mail)
Route::get('/mail',[ContactController::class,'contact']);
Route::post('send','ContactController@sendEmail')->name('sendEmail');

//send mail
Route::get('/contact-us',[ContactController::class,'contact']);
Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');

