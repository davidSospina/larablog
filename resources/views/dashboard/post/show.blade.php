@extends('dashboard.master')

@section('title')
    Post: {{$post->title}}
@endsection

@section('content')

<h1 class="text-center">Post: {{$post->title}}</h1>

@csrf
<div class="form-group">
    <label for="titulo">Titulo</label>
    <input readonly class="form-control" type="text" value="{{$post->title}}" name="title" id="title" placeholder="Título">
</div>

<div class="form-group">
    <label for="url_clean">Url limpia</label>
    <input readonly class="form-control" type="text" value="{{$post->url_clean}}" name="url_clean" id="url_clean" placeholder="Url">
</div>

<div class="form-group">
    <label for="contenido">Contenido</label>
    <textarea readonly class="form-control" name="content" id="contenido" rows="3" placeholder="Contenido">{{$post->content}}</textarea>
</div>
<a class="btn btn-info" href="{{URL::previous()}}">Regresar</a>

@endsection