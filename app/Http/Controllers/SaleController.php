<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\SaleDetails;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class SaleController extends Controller
{


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sale_register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cartItems = Cart::getContent();
       // try {
            Sale::create([
                
                'total' => $request->total,
                'itens'=>Cart::getTotalQuantity(),
                'cash'=>$request->recebido,
                'change'=>$request->troco,
                'status'=>'PAID',
                'user_id'=>auth()->id(),
                ]);
                
                $idCompra = Sale::getContent()->orderBy('created_at', 'desc')->first();

                //insere produtos na tabela Sale_datails
                $cartItems = Cart::getContent();
                dd();/*
                foreach ($cartItems as $item) {
                    $
                    $item->id;
                    SaleDetails::create ([
                        'price'=>$item->price,
                        'quantity'=>$item->quantity,
                        'product_id'=>$item->id,
                        'sale_id'=>$idCompra->id
                    ]) ;
                }
                //limpa o carrinho atual
                Cart::clear();
*/
                //envia informações para a tabela de vendas
                $sales = Sale::getContent();
                return view('sale_list', compact('sales'));

       // } catch (\Throwable $th) {
           
           //return view('404', compact('th'));
       //}
        
    
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
