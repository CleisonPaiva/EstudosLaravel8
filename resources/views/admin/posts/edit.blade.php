@extends('admin.Layouts.Template')
@section('title','Editar Post')

<h1>Editando Post: {{$post->title}}</h1>
<body>



<form action="{{route('update',$post->id)}}" method="post">
    @method('put')
    @include('admin.posts.forms')
    <a href="{{route('index')}}">Voltar</a>
</form>

