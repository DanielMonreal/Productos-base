<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "blade";
});

Route::get('productos', function(){
    return "Catalogos de productos";
});

Route::get('productos/{producto}', function($producto){
    return "Detalles del producto $producto";
});

Route::get('clientes/{id?}', function($id = 1){
    return "Cliente $id";
}); 

Route::get('clientes/{id}/venta/{idVenta?}', function($id, $idVenta = null){
    if($idVenta == null){
        return "Error";
    }
    return "El cliente $id realizo la venta $idVenta";

});