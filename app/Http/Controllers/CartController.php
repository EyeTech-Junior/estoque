<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CartController extends Controller
{
//exibir itens do carrinho
    function cartList()
    {
        $cartItems = Cart::getContent();
        return view('cart', compact('cartItems'));
    }

//adicionar item do carrinho
    public function addToCart(Request $request)
    {
        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
                'category'=> $request->category,)
        ]);
        return redirect()->route('cart.list');
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
        $total = Cart::getTotal();
        $troco = $request->troco - $total;
        return view('cart',['troco' => $troco]);
    }
}
