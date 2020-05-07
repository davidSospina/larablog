
@csrf
<div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" value="{{old('title',$post->title)}}" name="title" id="title" placeholder="Título">
    @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="url_clean">Url limpia</label>
    <input type="text" class="form-control" value="{{old('url_clean',$post->url_clean)}}" name="url_clean" id="url_clean" placeholder="Url">
    @error('url_clean')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="category_id">Categorías</label>
    <select class="form-control" name="category_id" id="category_id">
        @foreach ($categories as $title => $id)
            <option value="{{$id}}">{{$title}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="contenido">Contenido</label>
    <textarea class="form-control" name="content" id="contenido" rows="3" placeholder="Contenido">{{old('content',$post->content)}}</textarea>
    @error('content')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<input type="submit" value="Enviar" class="btn btn-success">
