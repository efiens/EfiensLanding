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
                "name" => "Nguyễn Quốc Bảo",
                "title" => "",
                "description" => "No fear. No hate. No anger.",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "quocbao300@gmail.com",
            ),
            (object) array(
                "name" => "Trương Đình Đức",
                "title" => "",
                "description" => "script kiddie",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "truongdinhduc143@gmail.com",
            ),
            (object) array(
                "name" => "Nguyễn Ngọc Kỷ",
                "title" => "",
                "description" => "Hiện đang lưu lạc ở ENS Paris, gà mờ trong Cryptography :)",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "kylk97@gmail.com",
            ),
            (object) array(
                "name" => "Nguyễn Văn Thành",
                "title" => "",
                "description" => "...",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "thanh230497@gmail.com",
            ),
            (object) array(
                "name" => "Nguyễn Chí Văn",
                "title" => "",
                "description" => "",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "nnnnlinh@gmail.com",
            ),
            (object) array(
                "name" => "Nguyễn Anh Khoa",
                "title" => "",
                "description" => "",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "ng.akhoa98@gmail.com",
            ),
            (object) array(
                "name" => "Nguyễn Hồ Minh Phước",
                "title" => "",
                "description" => "Em là tạ, xin hãy gánh em. Hu hu :((",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "phuocqhdt@gmail.com",
            ),
            (object) array(
                "name" => "Trần Ngọc Tín",
                "title" => "",
                "description" => "",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "ngoctint1lvc@gmail.com",
            ),
            (object) array(
                "name" => "Nguyễn Văn Tường",
                "title" => "",
                "description" => "Octave is better than Matlab!",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "tuong98wall@gmail.com",
            ),
            (object) array(
                "name" => "Võ Quý Giang",
                "title" => "",
                "description" => "Sinh viên năm 3, cùi bắp :)))",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "giangdeokinh@gmail.com",
            ),
            (object) array(
                "name" => "Chế Minh Huy",
                "title" => "",
                "description" => "",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "xxx38569459@gmail.com",
            ),
            (object) array(
                "name" => "Bùi Quang Minh",
                "title" => "",
                "description" => "Mình chơi pwn",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "minhquangbui99@gmail.com",
            ),
            (object) array(
                "name" => "Nguyễn Minh Quang",
                "title" => "",
                "description" => "Cục tạ ngàn cân. Noob trên mọi lĩnh vực.",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "artmoney307@gmail.com",
            ),
            (object) array(
                "name" => "Lê Khắc Minh Đăng",
                "title" => "",
                "description" => "pepega",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "lekhacminhdang@gmail.com",
            ),
            (object) array(
                "name" => "Ngô Minh Hạnh",
                "title" => "",
                "description" => "Đang trên con đường thu phục quái zật RE.",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "ngmhah@gmail.com",
            ),
            (object) array(
                "name" => "Võ Vĩ Khang",
                "title" => "",
                "description" => "Mình rất thích ăn uống và hay sống ảo :>",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "vovikhangcdv@gmail.com",
            ),
            (object) array(
                "name" => "Phạm Công Bách",
                "title" => "",
                "description" => ":v",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "congbachpham@gmail.com",
            ),
            (object) array(
                "name" => "Lăng Hoàng Long",
                "title" => "",
                "description" => "Thích chơi DotA 2",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "ThePalazin@Gmail.com",
            ),
            (object) array(
                "name" => "Đặng Minh Ngọc",
                "title" => "",
                "description" => ":)) ",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "minhngoc499@gmail.com",
            ),
            (object) array(
                "name" => "Trần Nguyễn Anh Khoa",
                "title" => "",
                "description" => "Em còn kém :)",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "khoavnpsc@gmail.com",
            ),
            (object) array(
                "name" => "Võ Văn Tiến Dũng",
                "title" => "",
                "description" => "Một thanh niên 18 tuổi tập tành chơi CTF.",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "vovantiendung2001@gmail.com",
            ),
            (object) array(
                "name" => "Võ Minh Long",
                "title" => "",
                "description" => "Edisc stands for "even die I still continue".",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "minhlongv84@gmail.com",
            ),
            (object) array(
                "name" => "Trương Việt Dũng",
                "title" => "",
                "description" => "Muốn tham gia vào mảng crypto",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "truongvietdung2011@gmail.com",
            ),
            (object) array(
                "name" => "Lê Thành Dinh",
                "title" => "",
                "description" => "Em là trainee của efiens, field của em là PWN, em còn gà lắm",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "ltddd3006@gmail.com",
            ),
            (object) array(
                "name" => "Nguyễn Thanh Ngân",
                "title" => "",
                "description" => "Nhạt :D",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "thanhngan190706@gmail.com",
            ),
            (object) array(
                "name" => "Nguyễn Phú Nghĩa",
                "title" => "",
                "description" => "Em mới tập picoCTF thôi :') mong các anh chỉ giáo thêm ạ",
                "image" => "https://kenh14cdn.com/thumb_w/640/2020/photo1577876362597-1577876362678-crop-15778764486721556804772.jpg",
                "mail" => "phunghia200114@gmail.com",
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
