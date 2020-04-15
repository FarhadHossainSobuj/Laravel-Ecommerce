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


Route::get('/', 'PagesController@index')->name('index');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/products', 'PagesController@products')->name('products');

Route::group(['prefix'=>'admin'], function (){
    Route::get('/', 'AdminPagesController@index')->name('admin.index');
    Route::get('/product/create', 'AdminPagesController@create')->name('admin.product.create');
    Route::get('/products', 'AdminPagesController@manage_products')->name('admin.products');
    Route::get('/product/edit/{id}', 'AdminPagesController@product_edit')->name('admin.product.edit');
    Route::post('/product/create', 'AdminPagesController@store')->name('admin.product.store');
    Route::post('/product/edit/{id}', 'AdminPagesController@update')->name('admin.product.update');
    Route::post('/product/delete/{id}', 'AdminPagesController@delete')->name('admin.product.delete');
});

// category routes
Route::group(['prefix'=>'category'], function (){
    Route::get('/', 'CategoryController@index')->name('admin.categories');
    Route::get('/create', 'CategoryController@create')->name('admin.category.create');
    Route::get('/edit/{id}', 'CategoryController@edit')->name('admin.category.edit');
    Route::post('/create', 'CategoryController@store')->name('admin.category.store');
    Route::post('/edit/{id}', 'CategoryController@update')->name('admin.category.update');
    Route::post('/delete/{id}', 'CategoryController@delete')->name('admin.category.delete');
});



