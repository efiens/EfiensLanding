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
                "name" => "cothan",
                "title" => "",
                "description" => "Team leader",
                "image" => "https://cdn.discordapp.com/avatars/568115736904597518/089b0169b90b5f1ff5b25e4a1eaa9d0f.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "mrsrc",
                "title" => "",
                "description" => "No fear. No hate. No anger.",
                "image" => "https://cdn.discordapp.com/avatars/594800940088033291/9f9ad4a8d57163184766365aa3d2f666.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "kynguyenngoc",
                "title" => "",
                "description" => "Hiện đang lưu lạc ở ENS Paris, gà mờ trong Cryptography :)",
                "image" => "https://cdn.discordapp.com/avatars/293907842984050690/ae2314d2b7932aed2c76f69d40e92bb8.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "lampard",
                "title" => "",
                "description" => "...",
                "image" => "https://cdn.discordapp.com/avatars/411180243987202061/20720c9b0ed442da1cdc56797525ece0.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "ks75vl",
                "title" => "",
                "description" => "",
                "image" => "https://cdn.discordapp.com/avatars/653451018830479364/362be8bdc4e34cdd3d888d4a2b018e4b.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "luibo",
                "title" => "",
                "description" => "",
                "image" => "https://cdn.discordapp.com/avatars/621374396967419938/3680ae0c4ffd47477aa65256697627b9.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "196",
                "title" => "",
                "description" => "Em là tạ, xin hãy gánh em. Hu hu :((",
                "image" => "https://cdn.discordapp.com/avatars/398440248352178177/e149e6d38525db151f82be581894700f.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "nt",
                "title" => "",
                "description" => "",
                "image" => "https://cdn.discordapp.com/avatars/548554405968871471/20b090c4915a81029839ef30132821dc.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "Meganecon",
                "title" => "",
                "description" => "Octave is better than Matlab!",
                "image" => "https://cdn.discordapp.com/avatars/254170660362911744/2794f9313673432560d64904778961e4.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "zl4",
                "title" => "",
                "description" => "Sinh viên năm 3, cùi bắp :)))",
                "image" => "https://cdn.discordapp.com/avatars/454310620834037781/bc201fd42fc83b5b05576dc6fa49e6df.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "huiche",
                "title" => "",
                "description" => "",
                "image" => "https://cdn.discordapp.com/avatars/475538578735366144/6d1c84c0a5e83827f79e37a40a474840.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "pickaxe",
                "title" => "",
                "description" => "Mình chơi pwn",
                "image" => "https://t4.ftcdn.net/jpg/03/00/65/79/240_F_300657927_89Qk6NVB3ZykkAVJFgqGOniV4Xejlr6j.jpg",
                "mail" => "",
            ),
            (object) array(
                "name" => "lifebow",
                "title" => "",
                "description" => "Cục tạ ngàn cân. Noob trên mọi lĩnh vực.",
                "image" => "https://t4.ftcdn.net/jpg/03/00/65/79/240_F_300657927_89Qk6NVB3ZykkAVJFgqGOniV4Xejlr6j.jpg",
                "mail" => "",
            ),
            (object) array(
                "name" => "midas",
                "title" => "",
                "description" => "pepega",
                "image" => "https://cdn.discordapp.com/avatars/349404734643372032/a53b19e4e71151cf7e3395a0a6d6d4d7.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "retis",
                "title" => "",
                "description" => "Đang trên con đường thu phục quái zật RE.",
                "image" => "https://cdn.discordapp.com/avatars/467910729199255582/e0de6db1bd06cf0a10d30ccc4be7a8c3.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "DoubleVKay",
                "title" => "",
                "description" => "Mình rất thích ăn uống và hay sống ảo :>",
                "image" => "https://cdn.discordapp.com/avatars/642395500456312832/96d57e13a26aa0be84282f5f65e7bd66.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "pcback",
                "title" => "",
                "description" => ":v",
                "image" => "https://cdn.discordapp.com/avatars/515395719616790529/fe1cdb994ca5d2c44ae403bc41086018.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "Catafact",
                "title" => "",
                "description" => "Thích chơi DotA 2",
                "image" => "https://cdn.discordapp.com/avatars/621483697970872320/30287c8cc4ccf5f90fdec9a955994d81.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "MN",
                "title" => "",
                "description" => ":)) ",
                "image" => "https://cdn.discordapp.com/avatars/492533393091985419/35fc33b6a4cf471fe9c67fcd6ee7c9f1.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "redandblue",
                "title" => "",
                "description" => "Em còn kém :)",
                "image" => "https://cdn.discordapp.com/avatars/622431038064295949/a22a111d5e4740da139b22e8859a8c02.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "Blackfrost",
                "title" => "",
                "description" => "Một thanh niên 18 tuổi tập tành chơi CTF.",
                "image" => "https://cdn.discordapp.com/avatars/333228117692907531/bacf90bdd8d33412b2bef07f41380e98.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "Edisc",
                "title" => "",
                "description" => "Edisc stands for \"even die I still continue\".",
                "image" => "https://cdn.discordapp.com/avatars/622596145004150786/5ea5f8f004943493a6c0df36a3ab0e2b.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "JstD",
                "title" => "",
                "description" => "Muốn tham gia vào mảng crypto",
                "image" => "https://cdn.discordapp.com/avatars/621525623747379202/7209a1504e724107b95bd9c6ff47bd4d.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "lunaa",
                "title" => "",
                "description" => "Em là trainee của efiens, field của em là PWN, em còn gà lắm",
                "image" => "https://cdn.discordapp.com/avatars/621499751057195011/230f4683478f410cec9f7901b4d25faa.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "catperson",
                "title" => "",
                "description" => "Nhạt :D",
                "image" => "https://cdn.discordapp.com/avatars/621390751867076668/43118b34d0aa1ea4fbc1088dd7245106.png?size=1024",
                "mail" => "",
            ),
            (object) array(
                "name" => "_.npn._",
                "title" => "",
                "description" => "Em mới tập picoCTF thôi :') mong các anh chỉ giáo thêm ạ",
                "image" => "https://cdn.discordapp.com/avatars/622454613408219170/61a45137641591a08e4da4c15644f0ed.png?size=1024",
                "mail" => "",
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
