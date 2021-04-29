@extends('admin.Layouts.Template')
@section('title','Exibir Post')

@section('content')
<h1>Posts</h1>

    <p>{{$post->title}}</p>
    <p>{{$post->content}}</p>

<a href="{{route('index')}}">Voltar</a>
@endsection
