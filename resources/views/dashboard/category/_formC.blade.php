
@csrf
<div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" value="{{old('title',$category->title)}}" name="title" id="title" placeholder="Título">
    @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <label for="url_clean">Url limpia</label>
    <input type="text" class="form-control" value="{{old('url_clean',$category->url_clean)}}" name="url_clean" id="url_clean" placeholder="Url">
    @error('url_clean')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<input type="submit" value="Enviar" class="btn btn-success">
