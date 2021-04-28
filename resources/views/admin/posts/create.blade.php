<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h1>Novo Post</h1>
<body>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach

    </ul>
    @endif


<form action="{{route('store')}}" method="post">
    @csrf
    <input type="text" name="title" id="title" placeholder="Titulo" value="{{old('title')}}">
    <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteudo">{{old('content')}}</textarea>
    <button type="submit">Salvar</button>

</form>
</body>
</html>
