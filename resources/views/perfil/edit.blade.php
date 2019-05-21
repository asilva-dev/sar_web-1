<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ action('PerfilsController@update', $dados->id_perfil) }}" method="POST">
@method('PUT')
    @csrf
    <div class="row">
        <label class="required" for="name">Nome do perfil:</label><br />
        <input id="name" class="input" name="nome" type="text" value="{{$dados->nome}}" size="50" />
        <input type="submit" value="Cadastrar" />
    </div>
</form>
</body>
</html>