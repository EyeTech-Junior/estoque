<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
//use Darryldecode\Cart\Facades\CartFacade as Cart;
//use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    //retorna a página de cadastro
    public function index_register()
    {
        $categorias = Category::get();
        return view('product_register',['categorias' => $categorias]);
    }


    //faz a busca do produto no banco e insere no carrinho
    public function produto_busca(Request $request)
    {
        return view('cart');
    }

    public function create(Request $request)
    {



    }

    //cadastra produto no banco
    public function store(Request $request)
    {
        if($request!=null){
            Product::create([
                'name' => $request->name,
                'code'=>$request->codigo,
                'cost'=>$request->cost,
                'price'=>$request->price,
                'stock'=>$request->quantidade,
                'category_id'=>$request->categoria,

                'unity' => $request->unidade,
                'company'=> $request->marca,
                'group' => $request->grupo,
                'provider' => $request->fornecedor,
                'percentage' => $request->porcentagem,
                'tax' => $request->imp_federal,
                'icms' => $request->icms,
                'nsc' => $request->nsc,
                ]);
                return redirect('/product_list');
        }else{
            return redirect('/404');
        }


            //retornar valores
            //$produtos = Product::get();
            //return view('estoque',['produtos' => $produtos]);
    }

    //Exibe lista de produtos
    public function show()
    {
        $produtos = Product::get();
        return view('product_list',['produtos' => $produtos]);
    }

    //pesquisar produto por código ou nome
    public function search(String $pesquisa)
    {
        $produtos = Product::where('name', 'like', "%{$pesquisa}%")->orWhere('code', 'like', "%{$pesquisa}%")->get();
        //$produtos = Product::get();
        return $produtos;
    }

    //retornar informações para serem alteradas
    public function edit($id)
    {
        $categorias = Category::get();
        $product = Product::findOrFail($id);
        return view('product_change',['product' => $product,'categorias' => $categorias]);
    }

    //atualiza informações no banco
    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);

        if($request != null){

            $products->update([
                'name' => $request->nome,
                'code'=>$request->codigo,
                'cost'=>$request->custo,
                'price'=>$request->preco,
                'stock'=>$request->quantidade,
                'category_id'=>$request->categoria,
                //'preco_custo' => $request->pcusto,
                //'preco_venda' => $request->pvenda,
                //'unidade' => $request->unidade,
                //'quantidade' => $request->quantidade,
                //'quant_max' => $request->quant_max,
                //'quant_min'=> $request->quant_min,
                //'referencia' => $request->referencia,
                //'marca'=> $request->marca,
                //'grupo' => $request->grupo,
                //'fornecedor' => $request->fornecedor,
                //'porcentagem' => $request->porcentagem,
                //'imp_federal' => $request->imp_federal,
                //'icms' => $request->icms,
                //'lucro' => $request->lucro,
                //'codigo' => $request->codigo,
                //'nsc' => $request->nsc,
                //'categoria' => $request->categoria,
                ]);

                return redirect('/product_list');

        }else{
            return redirect('/404');
        }
    }

     //abre tela de confirmação de exclusão
     public function delete($id){
        $item = Product::findOrFail($id);
        return view('product_delete', ['item' => $item]);
    }

    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect('/product_list');
    }
}
