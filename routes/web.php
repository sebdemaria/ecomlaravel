<?php

//Home
Route::get('/home', function () {
    return view("home");
});

//Home
Route::get('/plantillaprueba', function () {
    return view("plantillaprueba");
});

//Registro
Route::get('/registro', function () {
    return ("Este es el registro");
});
Route::post('/registro', function () {
    return ("Este es el registro por post");
});

//Login
Route::get('/login', function () {
    return ("Este es el login");
});
Route::post('/home', function () {
    return ("Este es el login por post");
});

//Perfil
Route::get('/perfil', function () {
    return ("Este es el perfil");
});
Route::post('/perfil', function () {
    return ("Este es el perfil por  post");
});

//FAQ
Route::get('/FAQ', function () {
    return ("Este es el FAQ");
});

//Contacto
Route::get('/contacto', function () {
    return ("Este es el contacto");
});

//Productos
Route::get('/productos', function () {
    return ("Un listado de los productos");
});

//Detalle producto
Route::get('/productos/{id}', function ($id) {
    return ("Este es el producto $id");
});

//Carrito
Route::post('/carrito', function () {
    return ("Este es el carrito");
});

//Checkout
Route::get('/checkout', function () {
    return ("Este es el checkout");
});

?>
