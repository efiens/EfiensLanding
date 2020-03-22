@extends('master')
@section('title', 'Sponsor')
@section('header', 'Sponsor')
@section('content')
<?php
$positions = ['left', 'top', 'right', 'bottom'];
?>
<link rel="stylesheet" href="{{ asset('css/sponsor.css') }}" />
<div class='container'>
  @foreach($sponsors as $sponsor)
    @if($sponsor->description)
    <div class='card-{{$positions[array_rand($positions)]}}'>
        <div class='card-image'>
            <img src='{{$sponsor->logo}}'>
        </div>
        <div class='card-text'>
            <p>{{$sponsor->description}}</p>
        </div>
    </div>
    @else
        <div class='card-image' style="background-color: white;
    border-radius: 1rem;
    padding: 3rem;">
            <img src='{{$sponsor->logo}}'>
        </div>
    @endif
  @endforeach
</div>

@endsection