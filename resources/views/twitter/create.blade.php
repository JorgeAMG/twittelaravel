@extends('layouts.administrador')


@section('contenido')
<div class="container-fluid">
    <form method="POST" action="{{route("twitter.store")}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label class="form-control" for="titulo">Titulo</label>
            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo..."
                value="{{ old('titulo') }}">
        </div>
        <div class="form-group">
            <label class="form-control" for="urlfoto">Selecciona una imagen</label>
            <input type="file" name="urlfoto" class="form-control-file" id="urlfoto">
        </div>
        <div class="form-group">
            <label class="form-control" for="contenido">Inserta el contenido</label>
            <textarea class="form-control" name="contenido" id="contenido">{{ old('contenido') }}</textarea>
        </div>

        <div class="form-group pt-2">
            <input class="btn btn-block btn-primary" type="submit" value="Enviar">
        </div>
    </form>

</div>
<script>
    CKEDITOR.replace( 'contenido' );
</script>
@endsection