<?php

Route::get('/', function () {
    return view('home');
});

//Home
Route::get('/home', function () {
    return view('home');
});

//Perfil
Route::get('/perfil', function () {
    return view('perfil');
});
Route::post('/perfil', function () {
    return view('perfil');
});

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
