@extends('admin.Layouts.Template')
@section('title','Listagem dos Posts')

@section('content')

<a href="{{route('create')}}">Criar Novo Post</a>

<hr>
@if(session('message'))
<div>
    {{session('message')}}
</div>
@endif

<form action="{{route('search')}}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Filtrar">
    <button type="submit">Filtrar</button>
</form>
<h1>Posts</h1>
@foreach($posts as $post)

        <p>{{$post->title}} -
        [ <a href="{{route('show',$post->id)}}">Ver</a>] ||

            [ <a href="{{route('edit',$post->id)}}">Editar</a>] ||


    <form action="{{route('destroy',$post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>
        </p>


@endforeach
<hr>

{{--Paginação--}}
{{--{{$posts->links()}}--}}
@if(isset($filters))
    {{$posts->appends($filters)->links()}}
@else
    {{$posts->links()}}
@endif
@endsection

