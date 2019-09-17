<?php


Route::redirect('/', '/products');
Route::redirect('/admin', '/login');
Route::redirect('/home', '/products');
Auth::routes(['register' => false]);

    Route::get('products', 'Front\ProductController@index')->name('product.index'); 
    Route::get('carts/add/{product}', 'Front\CartController@addToCart')->name('cart.add'); 
    Route::get('carts/show', 'Front\CartController@show')->name('cart.show'); 

    Route::delete('carts/remove/{row}', 'Front\CartController@remove')->name('cart.remove');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Products
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    
    Route::resource('products', 'ProductController');

    // Carts
    Route::delete('carts/destroy', 'CartController@massDestroy')->name('carts.massDestroy');
    Route::resource('carts', 'CartController');
});


