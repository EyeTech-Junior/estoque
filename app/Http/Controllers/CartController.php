<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\DB;
class CartController extends Controller
{
//exibir itens do carrinho
    function cartList()
    {
        $cartItems = Cart::getContent();
        $troco = 0;
        return view('cart',compact('cartItems','troco'));
    }

//adicionar item do carrinho
    public function addToCart(Request $request)
    {
        $products = DB::table('products')
        ->where('code', '=', $request->search)
        ->value('id') ?
        $products = DB::table('products')
        ->where('code', '=', $request->search)
        ->value('id') :
        $products = DB::table('products')
        ->where('name', '=', $request->search)
        ->value('id') ;

        $produto = Product::all();
        $produtos = $produto->find($products);
        //dd($produtos);
        
        $quantity = 1;
        if($produtos != null){
            Cart::add([
                'id' => $produtos->id,
                'name' => $produtos->name,
                'price' => $produtos->price,
                'quantity' => $quantity,
                'category' => $produtos->category_id,
                'attributes' => array(
                    'image' => $produtos->image,
                    'stock' => $produtos->stock,
                )
            ]);

            return redirect()->route('cart.list');
        }else{
            return redirect('404');
        }
    }
//atualizar item do carrinho
    public function updateCart(Request $request)
    {
        Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        return redirect()->route('cart.list');
    }
//remover item do carrinho
    public function removeCart(Request $request)
    {
        Cart::remove($request->remover);
        $cartItems = Cart::getContent();
        return view('cart', compact('cartItems'));
    }
//limpar itens do carrinho
    public function clearAllCart()
    {
        Cart::clear();
        return redirect()->route('cart.list');
    }

//calcula troco
    public function cartTroco(Request $request)
    {
        $troco = 0;
        $total = Cart::getTotal();
        if($total == 0 || $total == null){

            $cartItems = Cart::getContent();
            $troco = 0;
            return view('cart',compact('cartItems','troco'));
        }else{

            $cartItems = Cart::getContent();
            $valor = $request->troco;
            $troco = $valor - $total;

            return view('cart',compact('cartItems','troco'));
        }



    }
}
