<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProductsController extends Controller
{
    public function showProducts(){
        $produtos = Produto::get();
        return view('estoque',['produtos' => $produtos]);
    }
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
        'quant_max' => $request->quant_max,
        'quant_min'=> $request->quant_min,
        'referencia' => $request->referencia,
        'marca'=> $request->marca,
        'grupo' => $request->grupo,
        'fornecedor' => $request->fornecedor,
        'porcentagem' => $request->porcentagem,
        'imp_federal' => $request->imp_federal,
        'icms' => $request->icms,
        'lucro' => $request->lucro,
        'codigo' => $request->codigo,
        'nsc' => $request->nsc,
        'categoria' => $request->categoria,
        ]);
        return "cadastrado com sucesso";
    }

    public function show($id){
        $produto = Produto::findOrFail($id);
        return view('products',['produto' => $produto]);
    }
    
    public function update(Request $request, $id){
        $products = Produto::findOrFail($id);

        if($request != null){

            $products->update([
                'nome' => $request->nome,
                'preco_custo' => $request->pcusto,
                'preco_venda' => $request->pvenda,
                'unidade' => $request->unidade,
                'quantidade' => $request->quantidade,
                'quant_max' => $request->quant_max,
                'quant_min'=> $request->quant_min,
                'referencia' => $request->referencia,
                'marca'=> $request->marca,
                'grupo' => $request->grupo,
                'fornecedor' => $request->fornecedor,
                'porcentagem' => $request->porcentagem,
                'imp_federal' => $request->imp_federal,
                'icms' => $request->icms,
                'lucro' => $request->lucro,
                'codigo' => $request->codigo,
                'nsc' => $request->nsc,
                'categoria' => $request->categoria,
                ]);

            return view('/estoque');
    
        }else{
            return view('/change_products');
        }
        
        
        
    }
    
    public function exibir($id){
        $products = Produto::findOrFail($id);
        return view('delete_product', ['products' => $products]);
    }
    
    public function apagar($id){
        $products = Produto::findOrFail($id);
        $products->delete();
        return view('funcionario');
    }

}
