<?php

Route::get('products', 'API\ProductController@index');

Route::post('products', 'API\ProductController@store');

Route::get('products/{id}', 'API\ProductController@show');
