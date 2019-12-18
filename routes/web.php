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
Route::get('/productos', 'ProductosController@listar');

//ProductosXmas
Route::get('/xmas', 'XmasProductosController@listar');

//Detalle producto
Route::get('/detalle-prod/{id}', 'DetalleProdController@actualizarEstado');

//Carrito
Route::get('/carrito', 'CarritoController@listar');
Route::post('/carrito','CarritoController@agregar');
Route::post('/borrarProducto','CarritoController@borrarProducto');
Route::post('/modificarCantidad','CarritoController@modificarCantidad');

//Checkout
Route::get('/checkout', function () {
    return view("checkout");
});

//No Auth If No Cookies
Route::get('/noAuth', function () {
    return view("noAuth");
});

Route::get('/upload', 'UploadController@return');
Route::post('/upload', 'UploadController@return');

//Login / Register
Auth::routes();
//Logout
Route::get('/logout', 'Auth\LoginController@logout');
