<?php
$LEADER = "Leader";
$CORE_MEMBER = "Core member";
$ADVISOR = "Advisor";
function renderMember($member, $key, $type) {
    $title = $member -> title ? $member -> title : $type;
    $fb = $member -> fb ? (<<<HTML
        <a class="social" href="{$member -> fb}" target="_blank">
            <i class="fa fa-facebook-square"></i>
        </a>
    HTML) : "";
    $tw = $member -> tw ? (<<<HTML
        <a class="social" href="{$member -> tw}" target="_blank">
            <i class="fa fa-twitter-square"></i>
        </a>
    HTML) : "";
    $lk = $member -> lk ? (<<<HTML
        <a class="social" href="{$member -> lk}" target="_blank">
            <i class="fa fa-linkedin-square"></i>
        </a>
    HTML) : "";
    $mail = $member -> lk ? (<<<HTML
        <a class="social" href="mailto:{$member -> mail}" target="_blank">
            <i class="fa fa-envelope"></i>
        </a>
    HTML) : "";
    return <<<HTML
        <div class="member-card" style="background-image: url({$member -> image})">
        <div class="member-card__overlay"></div>
        <div class="member-card__content">
            <div class="member-card__header">
            <a href="#{$type}{$key}">
                <h1 class="member-card__title">{$member -> name}</h1>
            </a>
            <h4 class="member-card__info">{$title}</h4>
            </div>
            <div>
                {$mail}
                {$fb}
                {$tw}
                {$lk}
            </div>
        </div>
    </div>
    HTML;
}
function renderPopup($member, $key, $type) {
    return <<<HTML
        <div id="{$type}{$key}" class="overlay">
            <div class="popup">
                <h2>{$member -> name}</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    {$member -> description}
                </div>
            </div>
        </div>
    HTML;
}
?>

@extends('master')
@section('title', 'Member')
@section('header', 'Member')
@section('content')
<link rel="stylesheet" href="{{ asset('css/member.css') }}" />
<!-- RENDER CARD MEMBER -->
<h3>Leader</h3>
<div class="member">
    @foreach ($leaders as $key=>$member)
        {!! renderMember($member, $key, $LEADER) !!}
    @endforeach
</div>
<h3>Core members</h3>
<div class="member">
    @foreach ($cores as $key=>$member)
        {!! renderMember($member, $key, $CORE_MEMBER) !!}
    @endforeach
</div>
<h3>Advisors</h3>
<div class="member">
    @foreach ($advisors as $key=>$member)
        {!! renderMember($member, $key, $ADVISOR) !!}
    @endforeach
</div>

<!-- RENDER POPUP -->
@foreach ($leaders as $key=>$member)
    {!! renderPopup($member, $key, $LEADER) !!}
@endforeach
@foreach ($cores as $key=>$member)
    {!! renderPopup($member, $key, $CORE_MEMBER) !!}
@endforeach
@foreach ($cores as $key=>$member)
    {!! renderPopup($member, $key, $ADVISOR) !!}
@endforeach

@endsection
