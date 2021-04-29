@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Painel') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <a class="btn btn-primary" href="{{ url('/product/new') }}"> Criar produtos</a>
                    <a class="btn btn-primary" href="{{ url('/product/list') }}"> Gerir produtos</a>


                </div>
                <div class="col-md-12 mt-5 mb-5">
                    <h1 class="text-center mb-5">Busque um produto</h1>
                    <form action="/home" method="GET">
                        <input type="text" class="form-control" name="search" placeholder="Procure o produto ..."
                            value="">

                    </form>
                    @if($products == true)
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Valor Compra</th>
                                <th scope="col">Valor Venda</th>
                                <th scope="col">Descrição</th>
                                <th scope="col"></th>
                                <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach($products as $product )
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->name}} </td>
                                <td>{{$product->value_purchase}}</td>
                                <td>{{$product->value_sale}}</td>
                                <td>{{$product->description}}</td>
                                <td>
                                    <a href="/product/edit/{{$product->id}}" type="button"
                                        class="btn btn-success">Editar</a>
                                </td>
                                <td>
                                    <form action="/product/{{$product->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger ">Deletar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection