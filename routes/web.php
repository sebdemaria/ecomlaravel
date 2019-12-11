<?php

//Home
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

//Perfil
Route::get('/perfil', 'PerfilController@listar');
Route::post('/perfil', 'PerfilController@actualizar');

//FAQ
Route::get('/faq', function () {
    return view("faq");
});

//Contacto
Route::get('/contacto', function () {
    return view("contacto");
});

//Productos
Route::get('/productos', function () {
    return ("Un listado de los productos");
});

//Detalle producto
Route::get('/detalle-prod', function () {
    return view("detalle-prod");
});

//Carrito
Route::get('/carrito', function () {
    return view("carrito");
});

//Checkout
Route::get('/checkout', function () {
    return view("checkout");
});

Auth::routes();
//Logout
Route::get('/logout', 'Auth\LoginController@logout');
//Home
//Route::get('/home', 'HomeController@index')->name('home');
