<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Http\Requests\ProductUpdateRequest;
use App\Http\Resources\ProductResource;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Order::with(['items', 'payments'])->get();
        $customers_count = Customer::count();

        $vendas = DB::table('payments')
                    ->select(DB::raw("DATE_FORMAT(created_at, '%m') AS month"), DB::raw("SUM(amount) AS total"))
                    ->groupBy('month')
                    ->get();

        $labels = array();
        $data = array();

        foreach ($vendas as $venda) {
            $labels[] = $venda->month;
            $data[] = $venda->total;
        }

        $product = Product::get();
        $item = OrderItem::get();
        $cost = 0;
        $cost_today = 0;
        $item_hoje = $item->where('created_at', '=', today());
        foreach($item as $itens){
            
            foreach($product as $products){
                if ( $itens->product_id ==  $products->id) {
                    $cost = $products->cost + $cost;
                }
            }
        }
        foreach($item_hoje as $itens_hoje){
            foreach($product as $products){
                if ($products->id == $itens_hoje->product_id) {
                    $cost_today = $products->cost_today + $cost_today;
                }
            }
        }

        //dd($data);
        return view('home', ['labels'=> json_encode($labels),'data'=> json_encode($data)], [
            'orders_count' => $orders->count(),
            'cost'=>$cost,
            'cost_today'=>$cost_today,

            'income' => $orders->map(function($i) {
                if($i->receivedAmount() > $i->total()) {
                    return $i->total();
                }
                return $i->receivedAmount();
            })->sum(),

            'income_cost' => $orders->map(function($i) {
                if($i->receivedAmount() > $i->total()) {
                    return $i->total();
                }
                return $i->receivedAmount();
            })->sum(),


            'income_today' => $orders->where('created_at', '>=', date('Y-m-d').' 00:00:00')->map(function($i) {
                if($i->receivedAmount() > $i->total()) {
                    return $i->total();
                }
                return $i->receivedAmount();
            })->sum(),


            'customers_count' => $customers_count
        ]);
    }
}
