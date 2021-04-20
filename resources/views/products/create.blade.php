@extends('layouts.app')
@section('content')

<form class="m-5" action="{{ route('create_product') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="name"
            placeholder="Nome do produto">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Valor de Compra</label>
        <input type="text" name='value_purchase' class="form-control" id="value" placeholder="valor de compra">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Valor de Venda</label>
        <input type="text" name='value_sale' class="form-control" id="value" placeholder="valor de venda">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Descrição</label>
        <input type="text" name="descripition" class="form-control" id="description" placeholder="descrição">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Numero de Registro</label>
        <input type="text" name="numberRegister" class="form-control" id="numberRegister"
            placeholder="Numero de Registro">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>

    <!-- <label for="">Nome</label> <br />
        <input type="text" name="name"> <br />
        <label for="">Value</label> <br /> <input type="text" name="value"> <br />
        <label for="">descrição</label> <br /> <input type="textarea" name="descripition"> <br />
        <label for="">Numero de registro</label> <br />
        <input type="text" name="numberRegister">
        <button>Salvar</button> -->
</form>

@endsection
