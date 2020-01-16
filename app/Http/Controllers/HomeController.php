<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
        $products;
        if (auth()->user()->hasRole('company-user')) {
            $products = Product::all()->reject(function($product){
                // keep only products from supplier user [sanity check]
                return $product->user->hasRole('supplier-user') == false;
            });
        } else if(auth()->user()->hasRole('supplier-user')) {
            /**
            * `In supplier page, they can see all the products they had to send to the company`
            * implies => load only logged in users supplied products
            */
            $products = auth()->user()->suppliedProducts()->get();
        }
        return view('home')->with('products', $products);
    }
}
