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



        $data = ModelsProduct::create([
            'name'=> $request['name'],
            'value'=> $request['value'],
            'description'=> $request['descripition'],
            'numberRegister'=> $request['numberRegister'],

        ]);

        // dd($data->all());

        return 'criado com sucesso'.$data;
    }
}