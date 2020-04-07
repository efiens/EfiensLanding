@extends('master')
@section('title', 'Contact')
@section('header', 'Contact')
@section('content')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
<div class="row">
    <div class="col-sm-9">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.504638855704!2d106.65550931432688!3d10.772608262211007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec17709146b%3A0x54a1658a0639d341!2zxJDhuqFpIEjhu41jIELDoWNoIEtob2E!5e0!3m2!1svi!2s!4v1584842640601!5m2!1svi!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="col-sm-3">
        <div id="stage" class="stage">
            <form action="/">
                <fieldset>
                    <legend>Contact us.</legend>
                    <div class="control">
                        <input
                            type="text"
                            id="name"
                            placeholder="What should we call you?"
                            required=""
                        /><label>Name</label>
                    </div>
                    <div class="control">
                        <input
                            type="email"
                            id="email"
                            placeholder="Where can we reach you?"
                            required=""
                        /><label>E-mail</label>
                    </div>
                    <div class="control">
                        <textarea
                            id="ba"
                            placeholder="What's on your mind?"
                            required=""
                        ></textarea
                        ><label>Message</label>
                    </div>
                    <input type="submit" value="send"/>
                </fieldset>
                <hr style="border-color: #2980b9;"/>
                <legend>Other channels</legend>
                <a href="mailto:efiens.team@gmail.com?Subject=[Hello Efiens]" target="_top">efiens.team@gmail.com</a>
                <br/><br/>
                <a class="social" href="https://www.facebook.com/efiens.team" target="_blank">
                    <img class="social__icon" src="/img/icon/facebook.png" alt="fb" />
                </a>
                <a class="social" href="https://twitter.com/efiens.team" target="_blank">
                    <img class="social__icon" src="/img/icon/twitter.png" alt="twitter" />
                </a>
                <a class="social" href="https://discord.gg/ZzkVUKK" target="_blank">
                    <img class="social__icon" src="/img/icon/discord.png" alt="discord" />
                </a>
            </form>
        </div>
    </div>
</div>
@endsection