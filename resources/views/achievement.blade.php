@extends('master')
@section('title', 'Achievement')
@section('header', 'Achievement')
@section('content')
<link rel="stylesheet" href="{{ asset('css/achievement.css') }}" />
<h3>CTF contest</h3>
<div class="ctf-contest">
    @foreach($ctfs as $ctf)
    <div class="contest">
        <img src="{{$ctf -> logo}}" alt="{{$ctf -> name}}">
        <h4>{{$ctf -> name}}</h4>
        <p>Rank: {{$ctf -> rank}}</p>
    </div>
    @endforeach
</div>
<h3>Publication / Conference</h3>
<!-- <div class="achievement">
    @foreach($achievements as $achievement)
    <div class="achievement-slider">
        <div class="achievement-slider__wrp swiper-wrapper">
            <div class="achievement-slider__item swiper-slide">
            <div class="achievement-slider__img">
                <img src="{{$achievement -> image}}" alt="">
            </div>
            <div class="achievement-slider__content">
                <span class="achievement-slider__code">{{$achievement -> date}}</span>
                <div class="achievement-slider__title">{{$achievement -> name}}</div>
                <div class="achievement-slider__text">{{$achievement -> description}}</div>
                <a href="{{$achievement -> link}}" class="achievement-slider__button">READ MORE</a>
            </div>
            </div>
        </div>
    </div>
    @endforeach
</div> -->
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