<?php

namespace App\Http\Controllers;

use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdutosController extends Controller
{
    public function create(){
        if(Auth::check() === true){
            return view('products.create');
        }else{
            return view('auth.login');
        }

    }

    public function store(Request $request){



        ModelsProduct::create([
            'name'=> $request['name'],
            'value_purchase'=> $request['value_purchase'],
            'value_sale'=> $request['value_sale'],
            'description'=> $request['descripition'],
            'numberRegister'=> $request['numberRegister'],

        ]);

        return redirect('/product/list')->with('msg','Produto criado com sucesso!');

    }

    public function index(){

        $products = ModelsProduct::all();

        return view('products.list', ['products'=>$products]);
    }

    public function destroy($id){

        ModelsProduct::findOrFail($id)->delete();

        return redirect('/product/list')->with('msg','Produto excluido com sucesso!');
    }
    public function edit($id){

        $product = ModelsProduct::find($id);

        return view('products.edit', ['product'=>$product]);
    }
    public function update(Request $request){

      $product = ModelsProduct::find($request->id);

      $product->name = $request['name'];
      $product->value_purchase = $request['value_purchase'];
      $product->value_sale = $request['value_sale'];
      $product->description = $request['descripition'];
      $product->numberRegister = $request['numberRegister'];

      $product->save();

      return redirect('/product/list')->with('msg','Produto editado com sucesso!');
    }
}