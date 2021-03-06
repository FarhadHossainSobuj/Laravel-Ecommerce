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

//Front end parts
Route::get('/', 'frontend\PagesController@index')->name('index');
Route::get('/contact', 'frontend\PagesController@contact')->name('contact');

//Product controller
Route::get('/products', 'frontend\ProductController@index')->name('products');
Route::get('/product/{slug}', 'frontend\ProductController@show')->name('products.show');
Route::get('/search', 'frontend\PagesController@search')->name('search');


// Back end parts
Route::group(['prefix'=>'admin'], function (){
    Route::get('/', 'backend\AdminPagesController@index')->name('admin.index');
    Route::get('/product/create', 'backend\AdminPagesController@create')->name('admin.product.create');
    Route::get('/products', 'backend\AdminPagesController@manage_products')->name('admin.products');
    Route::get('/product/edit/{id}', 'backend\AdminPagesController@product_edit')->name('admin.product.edit');
    Route::post('/product/create', 'backend\AdminPagesController@store')->name('admin.product.store');
    Route::post('/product/edit/{id}', 'backend\AdminPagesController@update')->name('admin.product.update');
    Route::post('/product/delete/{id}', 'backend\AdminPagesController@delete')->name('admin.product.delete');
});

// category routes
Route::group(['prefix'=>'category'], function (){
    Route::get('/', 'backend\CategoryController@index')->name('admin.categories');
    Route::get('/create', 'backend\CategoryController@create')->name('admin.category.create');
    Route::get('/edit/{id}', 'backend\CategoryController@edit')->name('admin.category.edit');
    Route::post('/create', 'backend\CategoryController@store')->name('admin.category.store');
    Route::post('/edit/{id}', 'backend\CategoryController@update')->name('admin.category.update');
    Route::post('/delete/{id}', 'backend\CategoryController@delete')->name('admin.category.delete');
});

// brand routes
Route::group(['prefix'=>'brands'], function (){
    Route::get('/', 'backend\BrandsController@index')->name('admin.brands');
    Route::get('/create', 'backend\BrandsController@create')->name('admin.brand.create');
    Route::get('/edit/{id}', 'backend\BrandsController@edit')->name('admin.brand.edit');
    Route::post('/create', 'backend\BrandsController@store')->name('admin.brand.store');
    Route::post('/edit/{id}', 'backend\BrandsController@update')->name('admin.brand.update');
    Route::post('/delete/{id}', 'backend\BrandsController@delete')->name('admin.brand.delete');
});



