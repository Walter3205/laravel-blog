@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <h1>Blog</h1>
@stop

@section('content')
    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    @if ($loop->first)
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                    @else
                        <div class="col-md-6">
                    @endif
                        <div class="post">
                            <div class="post-thumb">
                                <a href="{{route('posts.show', $post)}}">
                                    <img class="img-fluid" src="@if($post->image) {{Storage::url($post->image->url)}} @else https://w.wallhaven.cc/full/4v/wallhaven-4v1exm.png @endif" alt="">
                                </a>
                            </div>
                            <h3 class="post-title"><a href="{{route('posts.show', $post)}}"> {{$post->name}} </a></h3>
                            <div class="post-meta">
                                <ul>
                                    <li>
                                        <i class="ion-calendar"></i> {{$post->updated_at->day}}, {{$post->updated_at->monthName}} {{$post->updated_at->year}}
                                    </li>
                                    <li>
                                        <i class="ion-android-people"></i> Publicado por {{$post->user->name}}
                                    </li>
                                    <li>
                                        @foreach ($post->tags as $tag)
                                            <a href="{{route('posts.tag', $tag)}}"><i class="ion-pricetags"></i> {{$tag->name}}</a> @if($loop->last) @else , @endif
                                        @endforeach
                                    </li>

                                </ul>
                            </div>
                            <div class="post-content">
                                <p> {!! $post->extract !!} </p>
                                <a href="{{route('posts.show', $post)}}" class="btn btn-main">Continuar Leyendo</a>
                            </div>
                        </div>
                    @if ($loop->first)
                            </div>
                        </div>
                    @else
                        </div>
                    @endif
                @endforeach
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination post-pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href=" {{$posts->previousPageUrl()}} ">Anterior</a></li>
                    @for ($i = 1 ; $i < $posts->lastPage() ; $i++)
                        <li class="page-item"><a class="page-link" href=" {{$posts->url($i)}} ">{{$i}}</a></li>
                    @endfor
                </ul>
            </nav>
        </div>
        
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="/plugins/Ionicons/css/ionicons.min.css">
@stop

@section('js')
    
@stop