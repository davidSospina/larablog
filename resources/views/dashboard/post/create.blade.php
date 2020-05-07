@extends('dashboard.master')

@section('title', 'Crear Post')

@section('content')

    <h1 class="text-center">Crear Post</h1>

    @include("dashboard.partials.validation-error")

    <form action="{{ route('post.store') }}" method="POST">
        @include('dashboard.post._form')
        <a class="btn btn-info" href="{{route('post.index')}}">Regresar</a>
    </form>

@endsection