@extends('dashboard.master')

@section('title')
    Categoría: {{$category->title}}
@endsection

@section('content')

<h1 class="text-center">Categoría: {{$category->title}}</h1>

@csrf
<div class="form-group">
    <label for="titulo">Titulo</label>
    <input readonly class="form-control" type="text" value="{{$category->title}}" name="title" id="title" placeholder="Título">
</div>

<div class="form-group">
    <label for="url_clean">Url limpia</label>
    <input readonly class="form-control" type="text" value="{{$category->url_clean}}" name="url_clean" id="url_clean" placeholder="Url">
</div>

<a class="btn btn-info" href="{{URL::previous()}}">Regresar</a>

@endsection