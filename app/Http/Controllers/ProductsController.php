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
        
        $produtos = Produto::get();
        return view('estoque',['produtos' => $produtos]);
    }

    public function show_product($id){
        $products = Produto::findOrFail($id);
        return view('change_products',['products' => $products]);
    }
    
    public function update_product(Request $request, $id){
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

                $produtos = Produto::get();
                return view('estoque',['produtos' => $produtos]);
    
        }else{
            return view('/change_products');
        }  
    }

//leva para uma página de confirmação
public function delete_product($id){
    $products = Produto::findOrFail($id);
    return view('delete_product', ['products' => $products]);
}

//apaga as informações depois de confirmar
public function destroy_product($id){
    $products = Produto::findOrFail($id);
    $products->delete();
    $produtos = Produto::get();
    return view('estoque',['produtos' => $produtos]);
    
}

}
