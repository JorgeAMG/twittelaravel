@extends('layouts.usuario')


@section('contenido')
<header class="masthead"
    style="background-image: url('https://cdn.pixabay.com/photo/2020/06/26/17/16/daisies-5343423_960_720.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>TwitteL</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid">
    <form method="POST" action="{{route("twitter.update",$twitter->id)}}">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label class="form-control" for="titulo">Titulo</label>
            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo..."
                value="{{$twitter->titulo }}">
        </div>

        <input type="hidden" name="usuario_id" class="form-control" id="usuario_id" placeholder="usuario"
            value="{{auth()->user()->id}}">

        <div class="form-group">
            <label class="form-control" for="contenido">Inserta el contenido</label>
            <textarea class="form-control" name="contenido" id="contenido">{{$twitter->contenido }}</textarea>
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