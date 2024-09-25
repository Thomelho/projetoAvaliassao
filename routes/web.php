<?php

use App\Http\Controllers\VendedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_usuario', [UserController::class, "formCriarUsuario"]);

Route::get('/listar_usuarios', [UserController::class, 'listar']);

Route::post('/criar_usuario', [UserController::class, 'criar']);


//Rotas produto
Route::get('/cadastro_produto', [ProdutoController::class, "formCriarProduto"]);

Route::get('/listar_produto', [ProdutoController::class, 'listar']);

Route::post('/criar_produto', [ProdutoController::class, 'criar']);

//Rotas clientes
Route::get('/cadastro_cliente', [ClienteController::class, "formCriarCliente"]);

Route::get('/listar_cliente', [ClienteController::class, 'listar']);

Route::post('/criar_cliente', [ClienteController::class, 'criar']);

//Rotas vendedor
Route::get('/cadastro_vendedor', [VendedorController::class, "formCriarVendedor"]);

Route::get('/listar_vendedor', [VendedorController::class, 'listar']);

Route::post('/criar_vendedor', [VendedorController::class, 'criar']);