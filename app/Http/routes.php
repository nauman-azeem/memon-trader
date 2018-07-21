<?php

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::match(['get', 'post'], 'register', function(){
  return redirect('/');
});

Route::group(['middleware'=>'admin'], function(){

  Route::get('/admin', function(){
    return view('admin.index');
  });

  Route::resource('/admin/products', 'AdminProductsController');

  Route::resource('/admin/brands', 'AdminBrandsController');

  Route::resource('/admin/categories', 'AdminCategoriesController');

  Route::resource('/admin/subcategories', 'AdminSubcategoriesController');
});