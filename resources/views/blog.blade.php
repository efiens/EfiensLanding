@extends('master')
@section('title', 'Blog')
@section('header', 'Blog')
@section('content')
<link rel="stylesheet" href="{{ asset('css/blog.css') }}" />
<div class="blog">
    @foreach ($blogs as $blog)
        <article class="card">
        <header class="card__thumb">
            <a href="{{$blog->link}}" target="_blank"><img src="
            @if($blog->image)
            {{$blog->image}}
            @else
            {{asset('img/EFIENS-04.png')}}
            @endif
            " alt=""/></a>
        </header>
        <date class="card__date">
            <span class="card__date__day">{{$blog->day}}</span>
            <br/>
            <span class="card__date__month">{{$blog->month}}</span>
        </date>
        
        <div class="card__body">
            <div class="card__category"><a href="#">{{$blog->category}}</a></div>
            <h2 class="card__title"><a href="{{$blog->link}}" target="_blank">{{$blog->title}}</a></h2>
            <div class="card__subtitle">{{$blog->author}}</div>
            <p class="card__description text">{{$blog->description}}</p>
        </div>
        
        <footer class="card__footer">
            Tags: {{$blog->tags}}
        </footer>
        </article>
    @endforeach
</div>
@endsection