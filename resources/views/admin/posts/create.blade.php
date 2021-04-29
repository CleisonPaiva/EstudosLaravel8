
@extends('admin.Layouts.Template')
@section('title','Criar Post')
@section('content')
@if(session('message'))
    <div>
        {{session('message')}}
    </div>
@endif

<form action="{{route('store')}}" method="post">
    @include('admin.posts.forms')


</form>
@endsection
