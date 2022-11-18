<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProductsController extends Controller
{
    public function cadastroPro(){
        return view('products');
    }
    public function cadastrarPro(Request $request){

        Produto::create([
        'nome' => $request->nome,
        'preco_custo' => $request->pcusto,
        'preco_venda' => $request->pvenda,
        'unidade' => $request->unidade,
        'quantidade' => $request->quantidade,
        'codigo' => $request->codigo,
        'nsc' => $request->nsc,
        'categoria' => $request->categoria,
        ]);
        return "cadastrado com sucesso";
    }
}
