@extends('layouts.app')
@section('content')



<body>



    <table class="table m-5">
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
                    <a href="/product/edit/{{$product->id}}" type="button" class="btn btn-success">Editar</a>
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
        </tbody>
    </table>



</body>


@endsection
