@extends('master')
@section('title', 'Member')
@section('header', 'Member')
@section('content')
<link rel="stylesheet" href="{{ asset('css/member.css') }}" />
<div class="member">
    @foreach ($members as $member)
    <div class="member-card" style="background-image: url({{$member -> image}})">
        <div class="member-card__overlay"></div>
        <div class="member-card__share">
            <a href="mailto:{{$member -> mail}}" class="member-card__icon">&#9993;</a>
        </div>
        <div class="member-card__content">
            <div class="member-card__header">
            <h1 class="member-card__title">{{$member -> name}}</h1>
            <h4 class="member-card__info">{{$member -> title}}</h4>
            </div>
            <p class="member-card__desc text">{{$member -> description}}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection
