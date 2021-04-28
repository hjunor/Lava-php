@extends('layouts.app')
@section('content')
<style>
.m-10 {
    margin: 0 400px 0 400px;
}
</style>
<form class="m-10" action="/product/update/{{$product->id}}" method="POST">
    @csrf
    @method('PUT')
    <h1>Editando Produto</h1>
    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="name"
            placeholder="Nome do produto" value="{{$product->name}}">
    </div>
    <div class="form-group">
        <label>Valor de Compra</label>
        <input type="text" name='value_purchase' class="form-control" id="value" placeholder="valor de compra"
            value="{{$product->value_purchase}}">
    </div>
    <div class="form-group">
        <label>Valor de Venda</label>
        <input type="text" name='value_sale' class="form-control" id="value" placeholder="valor de venda"
            value="{{$product->value_sale}}">
    </div>
    <div class=" form-group">
        <label>Descrição</label>
        <input type="text" name="descripition" class="form-control" id="description" placeholder="descrição"
            value="{{$product->description}}">
    </div>
    <div class=" form-group">
        <label>Numero de Registro</label>
        <input type="text" name="numberRegister" class="form-control" id="numberRegister"
            placeholder="Numero de Registro" value="{{$product->numberRegister}}">
    </div>
    <button type=" submit" class="btn btn-primary">Editar</button>


</form>




@endsection