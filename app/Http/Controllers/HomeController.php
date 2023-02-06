<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use App\Models\SaleDetails;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

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
        
        $products = Product::get();
        $total_product = 0;
        $count_product = 0;
        foreach($products as $product){
            $count_product=  $count_product+1;
            $total_product = $product->stock + $total_product;
            
        }

        $sales = Sale::get();
        $total_sale = 0;
        $count_sale = 0;
        foreach($sales as $sale){
            $count_sale= $count_sale +1;
            $total_sale = $sale->total + $total_sale;
            
        }
        $sale_d = SaleDetails::get();

        return view('home', compact('total_sale','count_product','count_sale','total_product'));

    }

    public function dashboard(){
        
        
    }
}
