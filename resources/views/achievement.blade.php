@extends('master')
@section('title', 'Achievement')
@section('header', 'Achievement')
@section('content')
<link rel="stylesheet" href="{{ asset('css/achievement.css') }}" />
<div class="achievement">
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
</div>
@endsection