<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Cadastrar um novo produto</title>
</head>

<body>
    <form action="{{ route('create_product') }}" method="POST">
        @csrf
        <label for="">Nome</label> <br />
        <input type="text" name="name"> <br />
        <label for="">Value</label> <br /> <input type="text" name="value"> <br />
        <label for="">descrição</label> <br /> <input type="textarea" name="descripition"> <br />
        <label for="">Numero de registro</label> <br />
        <input type="text" name="numberRegister">
        <button>Salvar</button>
    </form>
</body>