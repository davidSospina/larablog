@extends('dashboard.master')

@section('title', 'Posts')

@section('content')

<h1 class="text-center">Posts</h1>

<a class="btn btn-success btn-block mt-3 mb-3" href="{{route('post.create')}}">Crear post</a>

<table class="table">
    <thead>
        <tr>
            <td>
                Id
            </td>
            <td>
                Titulo
            </td>
            <td>
                Posteado
            </td>
            <td>
                Creación
            </td>
            <td>
                Actualización
            </td>
            <td>
                Acciones
            </td>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>
                {{$post->id}}
            </td>
            <td>
                {{$post->title}}
            </td>
            <td>
                {{$post->posted}}
            </td>
            <td>
                {{$post->created_at->format('d-m-Y')}}
            </td>
            <td>
                {{$post->updated_at->format('d-m-Y')}}
            </td>
            <td>
                <a class="btn btn-sm btn-info" href="{{route('post.show', $post->id)}}">Ver</a>
                <a class="btn btn-sm btn-warning" href="{{route('post.edit', $post->id)}}">Editar</a>
                <button data-toggle="modal" data-target="#eliminarModal" data-id="{{$post->id}}" class="btn btn-sm btn-danger" type="button">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$posts->links()}}

<div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>¿Desea eliminar el post seleccionado?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
            <form id="formDelete" method="POST" action="{{route('post.destroy', 0)}}" data-action="{{route('post.destroy', 0)}}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
      </div>
    </div>
</div>

<script>
    window.onload=function(){
        $('#eliminarModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id');
            action = $('#formDelete').attr('data-action').slice(0,-1);
            var modal = $(this);
            $('#formDelete').attr('action', action+id);
            modal.find('.modal-title').text('Estas eliminando el Post: ' + id);
        })
    }
</script>

@endsection
