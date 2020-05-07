@extends('dashboard.master')

@section('title')
    Editar Post: {{$post->title}}
@endsection

@section('content')

    <h1 class="text-center">Editar Post: {{$post->title}}</h1>

    @include("dashboard.partials.validation-error")

    <form action="{{ route('post.update', $post->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.post._form')
        <a class="btn btn-info" href="{{route('post.index')}}">Regresar</a>
    </form>
    
@endsection