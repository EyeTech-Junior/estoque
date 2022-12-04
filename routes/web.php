<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
return view('auth/login');
});

Route::get('/welcome', [LoginController::class, 'login']);
Route::post('/welcome', [LoginController::class, 'logar'])->name('registrar');


Route::get('/menu', function () {
return view('menu'/*,['id' => $id]*/);
});

//rotas do cadastro de produtos
Route::get('/products', [ProductsController::class, 'cadastroPro']);
Route::post('/products', [ProductsController::class, 'cadastrarPro'])->name('produto');

//rota do cadastro de usuarios
Route::get('/register_users', [UserController::class, 'cadastroUser']);
Route::post('/register_users', [UserController::class, 'cadastrarUser'])->name('usuario');


//rota de alterar usuario
Route::get('/change_users/{id}',[UserController::class, 'show']);
Route::post('/change_users/{id}',[UserController::class, 'update'])->name('alterar');

//rota de excluir usuario
Route::get('/delete_user/{id}',[UserController::class, 'delete']);
Route::post('/delete_user/{id}',[UserController::class, 'destroy'])->name('deletar');

//rota de excluir produto
Route::get('/delete_product/{id}',[ProductsController::class, 'delete_product']);
Route::post('/delete_product/{id}',[ProductsController::class, 'destroy_product'])->name('apagar');

//rota de alterar produto
Route::get('/change_products/{id}',[ProductsController::class, 'show_product']);
Route::post('/change_products/{id}',[ProductsController::class, 'update_product'])->name('mudar');

Route::get('/funcionario',[UserController::class, 'index']);

Route::get('/estoque',[ProductsController::class, 'showProducts']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('menu');
    })->name('dashboard');
});
