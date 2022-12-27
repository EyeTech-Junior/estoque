<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DenominationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;


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
Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/404', function () {
    return view('404');
});

//lista de usuários
Route::get('/user_list',[UserController::class, 'show']);

//lista de produtos
Route::get('/product_list',[ProductController::class, 'show']);

//lista de vendas
Route::get('/sale_list',[SaleController::class, 'show']);

//lista de categorias
Route::get('/category_list',[CategoryController::class, 'show']);

//cadastro de usuários
Route::get('/user_register', [UserController::class, 'index']);
Route::post('/user_register', [UserController::class, 'store'])->name('usuario');

//alterar informações de usuário
Route::get('/user_change/{id}', [UserController::class, 'edit']);
Route::post('/user_change/{id}', [UserController::class, 'update'])->name('user.change');

//alterar informações de categoria
Route::get('/category_change/{id}', [CategoryController::class, 'edit']);
Route::post('/category_change/{id}', [CategoryController::class, 'update'])->name('category.change');

//cadastro de categorias
Route::get('/category_register', [CategoryController::class, 'index']);
Route::post('/category_register', [CategoryController::class, 'store'])->name('categoria');

//alterar informações de produto
Route::get('/product_change/{id}', [ProductController::class, 'edit']);
Route::post('/product_change/{id}', [ProductController::class, 'update'])->name('products.change');

//cadastrar produto
Route::get('/product_register', [ProductController::class, 'index_register']);
Route::post('/product_register', [ProductController::class, 'store'])->name('produto');

//deletar usuário
Route::get('/user_delete/{id}', [UserController::class, 'delete']);
Route::post('/user_delete/{id}', [UserController::class, 'destroy'])->name('user.delete');

//deletar categoria
Route::get('/category_delete/{id}', [CategoryController::class, 'delete']);
Route::post('/category_delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

//deletar produto
Route::get('/product_delete/{id}', [ProductController::class, 'delete']);
Route::post('/product_delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');

Route::get('/sale_register', function () {
    return view('sale_register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


//Rotas carrinho de compra
Route::post('remover', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/cart', [ProductController::class, 'produto_busca'])->name('cart.store');

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');

Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::post('troco', [CartController::class, 'cartTroco'])->name('cart.troco');
//Route::get('/home', [LoginController::class, 'login']);
//Route::post('/welcome', [LoginController::class, 'logar'])->name('registrar');
//Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
//Route::get('/', [ProductController::class, 'productList'])->name('products.list');
Route::get('/vendas', [SaleController::class, 'index']);

/*

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

*/

