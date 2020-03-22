<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

const HEADER = 'header';

Route::get('/', function () {
    return view('home', [
        HEADER => true
    ]);
});
Route::get('/member', function () {
    return view('member', [
        HEADER => true,
        "members" => [
            (object) array(
                "name" => "Bao Nguyen-Quoc",
                "title" => "CTO - VNG Corp",
                "description" => "As much mud in the streets as if the waters had but newly retired from the face of the earth, and it would not be wonderful to meet a Megalosaurus, forty feet long or so, waddling like an elephantine lizard up Holborn Hill.",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "abc@gmail.com",
            ),
            (object) array(
                "name" => "Bao Nguyen-Quoc",
                "title" => "CTO - VNG Corp",
                "description" => "As much mud in the streets as if the waters had but newly retired from the face of the earth, and it would not be wonderful to meet a Megalosaurus, forty feet long or so, waddling like an elephantine lizard up Holborn Hill.",
                "image" => "https://www.incimages.com/uploaded_files/image/970x450/getty_685132229_396731.jpg",
                "mail" => "abc@gmail.com",
            ),
            (object) array(
                "name" => "Bao Nguyen-Quoc",
                "title" => "CTO - VNG Corp",
                "description" => "As much mud in the streets as if the waters had but newly retired from the face of the earth, and it would not be wonderful to meet a Megalosaurus, forty feet long or so, waddling like an elephantine lizard up Holborn Hill.",
                "image" => "https://ak2.picdn.net/shutterstock/videos/21124222/thumb/10.jpg",
                "mail" => "abc@gmail.com",
            ),
            (object) array(
                "name" => "Bao Nguyen-Quoc",
                "title" => "CTO - VNG Corp",
                "description" => "As much mud in the streets as if the waters had but newly retired from the face of the earth, and it would not be wonderful to meet a Megalosaurus, forty feet long or so, waddling like an elephantine lizard up Holborn Hill.",
                "image" => "https://qph.fs.quoracdn.net/main-qimg-ebfe46700ef7b8a086df8fcc440b9971-c",
                "mail" => "abc@gmail.com",
            ),
            (object) array(
                "name" => "Bao Nguyen-Quoc",
                "title" => "CTO - VNG Corp",
                "description" => "As much mud in the streets as if the waters had but newly retired from the face of the earth, and it would not be wonderful to meet a Megalosaurus, forty feet long or so, waddling like an elephantine lizard up Holborn Hill.",
                "image" => "https://www.exoticvoyages.com/uploads/images/userfiles/2018/07/myanmar-white-faced-2.jpg",
                "mail" => "abc@gmail.com",
            ),
        ]
    ]);
});
Route::get('/achievement', function () {
    return view('achievement', [
        HEADER => true,
        "achievements" => [
            (object) array(
                "date" => "26 December 2019",
                "name" => "Lorem Ipsum Dolor",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?",
                "image" => "https://static01.nyt.com/images/2020/02/13/sports/13-cfp-title-live16/merlin_167107434_821f828a-9bc3-45c9-8aec-2e53c68a4ad0-mobileMasterAt3x.jpg",
                "link" => "#links",
            ),
            (object) array(
                "date" => "26 December 2019",
                "name" => "Lorem Ipsum Dolor",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?",
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRWney9lHQOArv5jupcsULMuiYr9FnC00wmgxYAV8ySddSK7f7N",
                "link" => "#links",
            ),
            (object) array(
                "date" => "26 December 2019",
                "name" => "Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?",
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSnpmBZkeiYtjwWJFO6maKBoaT-Tiwk9Y1kTDevpJDDnLnYVrDf",
                "link" => "#links",
            ),
        ]
    ]);
});
Route::get('/blog', function () {
    return view('blog', [
        HEADER => true,
        "blogs" => [
            (object) array(
                "day" => "19",
                "month" => "MAR",
                "title" => "[AngstromCTF 2020] bookface (pwn) writeup",
                "category" => "AngstromCTF 2020",
                "author" => "midas",
                "description" => "Github link here. bookface Given files: bookface.tar.gz. The binary has: Full RELRO, Canary found, NX enabled and PIE enabled.",
                "image" => "",
                "link" => "https://blog.efiens.com/angstromctf2020bookface/",
                "tags" => "Pwn, Exploit"
            ),
            (object) array(
                "day" => "19",
                "month" => "MAR",
                "title" => "[AngstromCTF 2020] bookface (pwn) writeup",
                "category" => "AngstromCTF 2020",
                "author" => "midas",
                "description" => "Github link here. bookface Given files: bookface.tar.gz. The binary has: Full RELRO, Canary found, NX enabled and PIE enabled.",
                "image" => "https://vic.news/wp-content/uploads/2019/07/crypto-san-dgiao-dich-crypto.jpg",
                "link" => "https://blog.efiens.com/angstromctf2020bookface/",
                "tags" => "Pwn, Exploit"
            ),
            (object) array(
                "day" => "19",
                "month" => "MAR",
                "title" => "[AngstromCTF 2020] bookface (pwn) writeup",
                "category" => "AngstromCTF 2020",
                "author" => "midas",
                "description" => "Github link here. bookface Given files: bookface.tar.gz. The binary has: Full RELRO, Canary found, NX enabled and PIE enabled.",
                "image" => "",
                "link" => "https://blog.efiens.com/angstromctf2020bookface/",
                "tags" => "Pwn, Exploit"
            ),
            (object) array(
                "day" => "19",
                "month" => "MAR",
                "title" => "[AngstromCTF 2020] bookface (pwn) writeup",
                "category" => "AngstromCTF 2020",
                "author" => "midas",
                "description" => "Github link here. bookface Given files: bookface.tar.gz. The binary has: Full RELRO, Canary found, NX enabled and PIE enabled.",
                "image" => "",
                "link" => "https://blog.efiens.com/angstromctf2020bookface/",
                "tags" => "Pwn, Exploit"
            ),
        ]
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        HEADER => false
    ]);
});
Route::get('/sponsor', function () {
    return view('sponsor', [
        HEADER => true,
        "sponsors" => [
            (object) array(
                "logo" => "https://www.seo-vietnam.org/wp-content/uploads/2018/07/shopee.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "type" => ""
            ),
            (object) array(
                "logo" => "https://upload.wikimedia.org/wikipedia/vi/8/80/FPT_New_Logo.png",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "type" => ""
            ),
            (object) array(
                "logo" => "https://lh3.googleusercontent.com/proxy/8G5c23BRVwxpBhBbY4ka18cc60YB_5MSv96UJvxpfOFE2sLgAeKYhSO9Y8ruFwi_BgJEgUl02cC2_Jcpvg0idQMOZ53dJW2LCUk-SqWkGrsug7vUWItJGtGvtrmY88LpliO-dYQIVqE_KRDu",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "type" => ""
            ),
            (object) array(
                "logo" => "https://thietkelogodep.com.vn/wp-content/uploads/2016/04/Thiet-ke-logo-dep-gia-re.png",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "type" => ""
            ),
        ]
    ]);
});
