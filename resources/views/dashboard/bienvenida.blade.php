@extends('dashboard.master')

@section('title', 'Bienvenida Larablog')

@section('content')

    @include("dashboard.partials.infoAlerts")

    <div class="card text-center">
        <div class="card-body">
          <h1 class="card-title">¡Hola!</h1>
          <h3 class="card-text">¿Qué deseas ver?</h3>

          <a class="btn btn-primary mt-3 mb-3" href="{{route('post.index')}}">Posts</a> <br>
          <a class="btn btn-primary mt-3 mb-3" href="{{route('category.index')}}">Categorías</a>
        </div>
    </div>


@endsection