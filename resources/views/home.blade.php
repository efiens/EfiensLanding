@extends('master')
@section('title', 'Home')
@section('header', '')
@section('content2')
<div class="container-xl container-cus" style="margin-top: -6rem; text-align: center;">
    <!-- <img class="activity__img" src="https://teameq.net/wp-content/uploads/2018/03/Team-eq-home1.png" alt="Activity" /> -->
    <div class="activity__content">
        <div class="activity__content__item">
            <img class="activity__content__item__icon" src="./img/icon/podium.png" alt="Active CTF Competitor" />
            <h4>Active CTF Competitor</h4>
            <p>Efiens practices computer security through CTFs competitions around the world. As an academic team,
                we have participated in national competitions and received many awards.</p>
        </div>
        <div class="activity__content__item">
            <img class="activity__content__item__icon" src="./img/icon/man.png" alt="Weekly sharing" />
            <h4>Weekly sharing</h4>
            <p>We thrive to learn and share our knowledge on weekly sharing seminars among club members.
                Weekly meetings are hosted by our members, to discuss CTFs problems solution and relevant topics of cyber security.
                We occasionally gather around at weekends to participate in CTFs in order to hone our skills.</p>
        </div>
        <div class="activity__content__item">
            <img class="activity__content__item__icon" src="./img/icon/science-research.png" alt="Educational resources" />
            <h4>Educational resources</h4>
            <p>We cumulates security resources through researches for both educational purposes and enterprise solution.
                We also grant electable candidates with internships and job opportunities.</p>
        </div>
        <div class="activity__content__item">
            <img class="activity__content__item__icon" src="./img/icon/cryptography.png" alt="Applied cryptography research" />
            <h4>Applied cryptography research</h4>
            <p>Efiens was originally a cryptography research team. We research novel cryptography terminology for applications
                in security field and train potential young mathematics Master/PhD candidates.</p>
        </div>
    </div>
</div>
<div class="ourteam">
    <div class="container-xl container-cus ourteam__content" style="margin-top: -3rem;">
        <div>
            <h3>Our Team</h3>
            <p style="margin-bottom: 2rem">With our team of more than 25 persons we provide the full service to our clients in our offices in Ho Chi Minh City and Hanoi. For every client, we will organize a dedicated team and agree on the services exactly according to the specific needs.</p>
            <a href="/member" class="ourteam__button">See members</a>
        </div>
        <img class="ourteam__img" src="https://miro.medium.com/max/764/1*DR3m8YaZrHX32fnCaK8Ppg.png" alt="members" />
    </div>
</div>

<div class="container-xl container-cus" style="text-align: center;">
    <h3>Sponsors</h3>
    <img class="sponsors__logo" src="img/sponsor_vnsec.png" alt="VNSEC">
    <img class="sponsors__logo" src="img/sponsor_vng.png" alt="VNG">
</div>
@endsection
