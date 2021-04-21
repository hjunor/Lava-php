@extends('layouts.app')
@section('content')
<form class="m-5" action="/product/update/{{$product->id}}" method="POST">
    @csrf
    @method('PUT')
    <h1>Editando Produto</h1>
    <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="name"
            placeholder="Nome do produto" value="{{$product->name}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Valor de Compra</label>
        <input type="text" name='value_purchase' class="form-control" id="value" placeholder="valor de compra"
            value="{{$product->value_purchase}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Valor de Venda</label>
        <input type="text" name='value_sale' class="form-control" id="value" placeholder="valor de venda"
            value="{{$product->value_sale}}">
    </div>
    <div class=" form-group">
        <label for="exampleInputPassword1">Descrição</label>
        <input type="text" name="descripition" class="form-control" id="description" placeholder="descrição"
            value="{{$product->description}}">
    </div>
    <div class=" form-group">
        <label for="exampleInputPassword1">Numero de Registro</label>
        <input type="text" name="numberRegister" class="form-control" id="numberRegister"
            placeholder="Numero de Registro" value="{{$product->numberRegister}}">
    </div>
    <button type=" submit" class="btn btn-primary">Editar</button>


</form>




@endsection
