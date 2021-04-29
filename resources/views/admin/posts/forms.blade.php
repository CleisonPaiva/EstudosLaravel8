@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach

    </ul>
@endif

@csrf

<input type="text" name="title" id="title" placeholder="Titulo" value="{{$post->title ?? old('title')}}">
{{--value="{{$post->title ?? old('title')}}" Verifica se a variavel $post->title vindo do edit existe,se não existir ele poe o valor default old vindo do create--}}

<textarea name="content" id="content" cols="30" rows="4" placeholder="Conteudo">{{$post->content ?? old('content')}}</textarea>
<button type="submit">Salvar</button>
