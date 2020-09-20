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
            <p>Efiens is an active member of CTFtime.org. We have been participating in a huge number of competitions both nationwide and worldwide. </p>
        </div>
        <div class="activity__content__item">
            <img class="activity__content__item__icon" src="./img/icon/man.png" alt="Weekly sharing" />
            <h4>Weekly sharing</h4>
            <p>We are eager to learn and share new knowledge about cybersecurity. Every week, the team’s members host several seminars to discuss solutions to CTF problems or relevant topics of cybersecurity.</p>
        </div>
        <div class="activity__content__item">
            <img class="activity__content__item__icon" src="./img/icon/science-research.png" alt="Educational resources" />
            <h4>Educational resources</h4>
            <p>Ever since founded, we have cummulated a vast amount of resources of all topics in cybersecurity via doing research and practicing CTFs for both educational purposes and enterprise solutions. Every year, we also nominate young and talented people for internships and job opportunities in the industry.</p>
        </div>
        <div class="activity__content__item">
            <img class="activity__content__item__icon" src="./img/icon/cryptography.png" alt="Applied cryptography research" />
            <h4>Applied cryptography research</h4>
            <p>Efiens was originally a cryptography research team. We research novel cryptographic topics both theoretical and practical. Through time, many of our members have acquired scholarships for postgraduate study in this field at top-ranking universities.</p>
        </div>
    </div>
</div>
<div class="ourteam">
    <div class="container-xl container-cus ourteam__content" style="margin-top: -3rem;">
        <div>
            <h3>Our Team</h3>
            <p style="margin-bottom: 2rem">With our team of more than 25 members, we believe to maintain the activities of cyber security field growing constantly in HCMUT and to keep the educational environment for our potential, well-trained future security engineers.</p>
            <a href="/member" class="ourteam__button">See members</a>
        </div>
        <img class="ourteam__img" src="https://miro.medium.com/max/764/1*DR3m8YaZrHX32fnCaK8Ppg.png" alt="members" />
    </div>
</div>

<div class="container-xl container-cus" style="text-align: center;">
    <h3>Sponsors</h3>
    <img class="sponsors__logo" src="./img/logo-hcmut.svg" alt="HCMUT" />
    <img class="sponsors__logo" src="img/sponsor_vnsec.png" alt="VNSEC">
    <img class="sponsors__logo" src="img/sponsor_vng.png" alt="VNG">
</div>
@endsection
