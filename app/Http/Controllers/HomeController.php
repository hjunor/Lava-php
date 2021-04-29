<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $search = request('search');

        if($search){
           $products = Product::where([
                ['name', 'like', '%'.$search.'%']
            ])->get();
        }else{
            $products = false;
        }
        return view('home', ['products'=>$products, 'search'=> $search]);
    }
}