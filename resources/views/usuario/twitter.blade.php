@extends('layouts.usuario')

@section('contenido')
<!-- Page Header -->
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

<!-- Main Content -->
<div class="container">
    <!-- Search form -->
    <div class="d-flex justify-content-center">
        <a href="{{route("twitter.create")}}" class="btn btn-success">Crea un tweet</a>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @forelse ($twitters as $twitter)
            <hr>
            <div class="post-preview">


                <h2 class="post-title">
                    {{$twitter->titulo}}
                </h2>
                <h3 class="post-subtitle">
                    {!!$twitter->contenido!!}
                </h3>

                <p class="post-meta">twiteado por
                    <a>{{$twitter->usuario->name}}</a>
                    el {{$twitter->created_at}}</p>
            </div>
            <hr>
            @if (Auth::user())
            @if ($twitter->usuario->name===Auth::User()->name)
            <a class="btn btn-info" href="{{route("twitter.edit",$twitter->id)}}">Editar</a>
            <form method="POST" class="mt-3" action="{{route("twitter.destroy",$twitter->id)}}">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>

            @endif
            @endif
            @empty
            <h1>No hay twitters, ingresa a tu cuenta para publicar</h1>
            @endforelse

            {{$twitters->links()}}
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy;twitteL 2020</p>
            </div>
        </div>
    </div>
</footer>
@endsection