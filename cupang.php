<?php
echo "\033[1;32mCreator \033[31;1m: \033[36;1mIndraYudaAdiSaputra
\033[1;32mChannel \033[31;1m: \033[36;1mBeakEight

\033[37;1mBantu Dukung Channel Saya Dengan Subscribe Ya :)
\n\n\n";

echo "\033[1;32mMau Nuyul Akun Ke Berapa\033[0;36m...\033[31;1m?\033[36;1m ";
$akun = trim(fgets(STDIN));


include("config$akun.php");
//keterangan
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/user/login/visitor");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$headers   = array();
$headers[] = "cookie: $cookie";
$headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9; Redmi 4X Build/PQ3B.190801.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/5.1.8";
$headers[] = "authorization: BASIC YjU2ZTkzM2E4NDY0NGFkMmE0Zjk0Y2IzNWUxOGRmMDk6ZjA5NzFkYjUyODZjNzkyNGQ2YmRkZmIwMTMwOGEzZmE=";
$headers[] = "ts: 1582275010855";
$headers[] = "index: 3";
$headers[] = "content-type: application/json";
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"city":"Jakarta"}');
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$nama   = explode('"user_name":"', $result);
$nama1  = explode('","', $nama[1]);
$tcoin  = explode('"user_score":', $result);
$tcoin1 = explode(',"', $tcoin[1]);
$level  = explode('"user_level":', $result);
$level1 = explode(',"', $level[1]);
echo "\033[1;31m••• \033[1;32mLogin Sebagai \033[31;1m: \033[36;1m$nama1[0] \033[31;1m| \033[1;32mTotal Koin \033[31;1m: \033[36;1m$tcoin1[0] \033[31;1m| \033[1;32mLevel \033[31;1m: \033[36;1m$level1[0] \033[1;31m•••\n\n";


//new list artikel
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/news/getNewsList2");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$headers   = array();
$headers[] = "cookie: $cookie";
$headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9; Redmi 4X Build/PQ3B.190801.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/5.1.8";
$headers[] = "authorization: BASIC YjU2ZTkzM2E4NDY0NGFkMmE0Zjk0Y2IzNWUxOGRmMDk6YTA5ZWJiYzNkYzA4YmM4ZGUwMWY4MjI5MDhkZmUzYTE=";
$headers[] = "ts: 1582019803925";
$headers[] = "index: 19";
$headers[] = "content-type: application/json";
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"articleType":512,"channelId":0,"page":1}');
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$news   = explode('"NewsId":', $result);
$news1  = explode(',"', $news[1]);


//new list video
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/news/getNewsList2");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$headers   = array();
$headers[] = "cookie: $cookie";
$headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9; Redmi 4X Build/PQ3B.190801.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/5.1.8";
$headers[] = "authorization: BASIC YjA3OWE4YWZmN2ZiNDQyYzk4ZjFjZTQxMmUxZjk1YTg6YzYxOTU4YTQ5MTE0MmE3MWMxYTcxNmMyYzhhY2Q3MGM=";
$headers[] = "ts: 1582289447438";
$headers[] = "index: 17";
$headers[] = "content-type: application/json";
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"articleType":512,"channelId":0,"page":1}');
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$vid    = explode('"NewsId":', $result);
$vid1   = explode(',"', $vid[1]);








//absen
sleep(1);
echo "\033[37;1m1. | Absen...! |\n\n";
sleep(1);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/event/signin");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$headers   = array();
$headers[] = "cookie: $cookie";
$headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9; Redmi 4X Build/PQ3B.190801.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/5.1.8";
$headers[] = "ts: 1582276556974";
$headers[] = "authorization: BASIC YjA3OWE4YWZmN2ZiNDQyYzk4ZjFjZTQxMmUxZjk1YTg6YTQ0ODM2ODFjNWIzOGMxZWNkMzBhNjc5MGJiZjljNzg=";
$headers[] = "index: 43";
$headers[] = "content-type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$coin   = explode('"get_coin":', $result);
$coin1  = explode(',"', $coin[1]);
$mes    = explode('"message":"', $result);
$mes1   = explode('","', $mes[1]);
if ($mes1[0] == "OK") {
    echo "\033[31;1m[\033[36;1m=\033[31;1m]\033[1;32m Berhasil Absen Hari Ini \033[31;1m| \033[1;32mKoin \033[36;1m+$coin1[0]\n";
} else {
    echo "\033[31;1m[\033[36;1m=\033[31;1m]\033[1;32m Pesan \033[31;1m: \033[1;32m" . $mes1[0] . "\n";
}
echo "        Absen Selesai...\n\n";



//Bonus Harian
sleep(1);
echo "\033[37;1m2. | Mengklaim Bonus Harian...! |\n\n";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/event/random");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$headers   = array();
$headers[] = "cookie: $cookie";
$headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9; Redmi 4X Build/PQ3B.190801.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/5.1.8";
$headers[] = "ts: 1582276565084";
$headers[] = "authorization: BASIC YjA3OWE4YWZmN2ZiNDQyYzk4ZjFjZTQxMmUxZjk1YTg6ZTRmOTJkZDNmYzQ0Yzc1OGJkNmE4MThhOWZjZjgzZDE=";
$headers[] = "index: 46";
$headers[] = "content-type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$coin   = explode('"get_coin":', $result);
$coin1  = explode(',"', $coin[1]);
if ($coin1[0] == 0) {
    echo "\033[31;1m[\033[36;1m=\033[31;1m]\033[1;32m Kamu Sudah Mengklaim Bonus Ini...\n";
} else {
    echo "\033[31;1m[\033[36;1m=\033[31;1m]\033[1;32m Berhasil Mengklaim \033[31;1m| \033[1;32mKoin \033[36;1m+$coin1[0]\n";
}
sleep(1);
echo "        Mengklaim Bonus Harian Selesai...\n\n";



//Baca Berita
sleep(1);
echo "\033[37;1m3. | Membaca Berita...! |\n\n";


$i = 0;
while ($i < 40) {
    $i++;
    $news1[0]++;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/event/next/signin");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $headers   = array();
    $headers[] = "cookie: $cookie";
    $headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9; Redmi 4X Build/PQ3B.190801.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/5.1.8";
    $headers[] = "authorization: $auth";
    $headers[] = "ts: $ts";
    $headers[] = "index: $index";
    $headers[] = "content-type: application/json";
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    
    
    $data = '{"reports":[{"action":"browse_news","list":[{"articleType":1,"newsId":' . $news1[0] . ',"status":1,"times":3,"totalms":45},{"articleType":1,"newsId":' . $news1[0] . ',"status":1,"times":2,"totalms":22}]}]}';
    $ch   = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/event/report");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $headers   = array();
    $headers[] = "cookie: $cookie";
    $headers[] = "authorization: $auth";
    $headers[] = "ts: $ts";
    $headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9; Redmi 4X Build/PQ3B.190801.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/5.1.8";
    $headers[] = "index: $index";
    $headers[] = "content-type: application/json";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $result = curl_exec($ch);
    $coin   = explode('"data":', $result);
    $coin1  = explode('}', $coin[1]);
    if ($coin1[0] == 0) {
        echo "\033[31;1m[\033[36;1m=\033[31;1m]\033[1;32m Artikel Telah Terbaca\n";
        $i = 40;
    } else {
        echo "\033[31;1m[\033[36;1m=\033[31;1m]\033[1;32m Sukses Klaim...\033[31;1m| \033[1;32mKoin \033[36;1m+$coin1[0]\n";
    }
    sleep(20);
}
echo "        \033[1;32mMembaca Berita Selesai...\n\n";


//Menonton Video
echo "\033[37;1m4. | Menonton Video...! |\n\n";

$i = 0;
while ($i < 20) {
    $i++;
    $vid1[0]++;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/event/next/signin");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $headers   = array();
    $headers[] = "cookie: $cookie";
    $headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9; Redmi 4X Build/PQ3B.190801.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/5.1.8";
    $headers[] = "authorization: $auth";
    $headers[] = "ts: $ts";
    $headers[] = "index: $index";
    $headers[] = "content-type: application/json";
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    
    $data = '{"reports":[{"action":"watch_video","list":[{"articleType":512,"newsId":' . $vid1[0] . ',"status":0,"times":1,"totalms":0},{"articleType":0,"newsId":0,"status":0,"times":1,"totalms":0},{"articleType":512,"newsId":' . $vid1[0] . ',"status":1,"times":1,"totalms":52}]}]}';
    $ch   = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/event/report");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $headers   = array();
    $headers[] = "cookie: $cookie";
    $headers[] = "authorization: $auth";
    $headers[] = "ts: $ts";
    $headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9; Redmi 4X Build/PQ3B.190801.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/5.1.8";
    $headers[] = "index: $index";
    $headers[] = "content-type: application/json";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $result = curl_exec($ch);
    $coin   = explode('"data":', $result);
    $coin1  = explode('}', $coin[1]);
    if ($coin1[0] == 0) {
        echo "\033[31;1m[\033[36;1m=\033[31;1m]\033[1;32m Video Telah Tertonton\n";
        $i = 20;
    } else {
        echo "\033[31;1m[\033[36;1m=\033[31;1m]\033[1;32m Sukses Klaim...\033[31;1m| \033[1;32mKoin \033[36;1m+$coin1[0]\n";
    }
    sleep(25);
}
echo "        \033[1;32mMenonton Video Selesai...\n\n";




//push notif
echo "\033[37;1m5. | Push Notifikasi...! |\n\n";
sleep(1);
$i = 0;
while ($i < 40) {
    $i++;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/event/next/signin");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $headers   = array();
    $headers[] = "cookie: $cookie";
    $headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9; Redmi 4X Build/PQ3B.190801.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/5.1.8";
    $headers[] = "authorization: $auth";
    $headers[] = "ts: $ts";
    $headers[] = "index: $index";
    $headers[] = "content-type: application/json";
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/event/share/click/push?content_id=0");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $headers   = array();
    $headers[] = "cookie: $cookie";
    $headers[] = "authorization: $auth";
    $headers[] = "ts: $ts";
    $headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9; Redmi 4X Build/PQ3B.190801.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/5.1.8";
    $headers[] = "index: $index";
    $headers[] = "content-type: application/json";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    $mes    = explode('"message":"', $result);
    $mes1   = explode('"}', $mes[1]);
    if ($mes1[0] == "OK") {
        echo "\033[31;1m[\033[36;1m=\033[31;1m]\033[1;32m Sukses Mendapatkan Koin...\n";
    } else {
        echo "\033[31;1m[\033[36;1m=\033[31;1m]\033[1;32m Gagal Mendapatkan Koin...\n";
    }
    sleep(15);
}
echo "        Push Notifikasi Selesai...\n\n";


//Membagi Konten
echo "\033[37;1m6. | Membagi Konten...! |\n\n";
$i = 0;
while ($i < 5) {
    $i++;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/event/share/news/$news1[0]");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $headers   = array();
    $headers[] = "cookie: $cookie";
    $headers[] = "authorization: $auth";
    $headers[] = "ts: $ts";
    $headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9; Redmi 4X Build/PQ3B.190801.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/5.1.8";
    $headers[] = "index: $index";
    $headers[] = "content-type: application/json";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    $mes    = explode('"message":"', $result);
    $mes1   = explode('"}', $mes[1]);
    if ($mes1[0] == "OK") {
        echo "\033[31;1m[\033[36;1m=\033[31;1m]\033[1;32m Sukses Mendapatkan Koin...\n";
    } else {
        echo "\033[31;1m[\033[36;1m=\033[31;1m]\033[1;32m Gagal Mendapatkan Koin...\n";
    }
    sleep(8);
}
echo "        Membagi Konten Selesai...\n\n";

//membagi kode undangan
echo "\033[37;1m7. | Membagi Kode Undangan...! |\n\n";
$i = 0;
while ($i < 20) {
    $i++;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/event/share/code");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $headers   = array();
    $headers[] = "cookie: $cookie";
    $headers[] = "authorization: $auth";
    $headers[] = "ts: $ts";
    $headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9; Redmi 4X Build/PQ3B.190801.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/5.1.8";
    $headers[] = "index: $index";
    $headers[] = "content-type: application/json";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    $mes    = explode('"message":"', $result);
    $mes1   = explode('"}', $mes[1]);
    if ($mes1[0] == "OK") {
        echo "\033[31;1m[\033[36;1m=\033[31;1m]\033[1;32m Sukses Mendapatkan Koin...\n";
    } else {
        echo "\033[31;1m[\033[36;1m=\033[31;1m]\033[1;32m Gagal Mendapatkan Koin...\n";
    }
    sleep(5);
}
echo "        Membagi Kode Undangan Selesai...\n\n";


// Menyukai Koment
echo "\033[37;1m8. | Menyukai Komentar...! |\n\n";
$i = 0;
while ($i < 50) {
    $com = rand(1850000, 1900000);
    $i++;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/Record/addupcomment");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $headers   = array();
    $headers[] = "cookie: $cookie";
    $headers[] = "authorization: $auth";
    $headers[] = "ts: $ts";
    $headers[] = "user-agent: Mozilla/5.0 (Linux; Android 9; Redmi 4X Build/PQ3B.190801.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/5.1.8";
    $headers[] = "index: $index";
    $headers[] = "content-type: application/json";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"articleType":1,"commentId":' . $com . '}');
    $result = curl_exec($ch);
    $hasil  = explode('"data":', $result);
    $hasil1 = explode('}', $result);
    if ($hasil1[0] == 1) {
        echo "\033[31;1m[\033[36;1m=\033[31;1m]\033[1;32m Gagal Menyukai Komentar, Mengulangi Kembali...\n";
        $i--;
    } else {
        echo "\033[31;1m[\033[36;1m=\033[31;1m]\033[1;32m Sukses Menyukai Komentar...\n";
    }
    sleep(1);
}
echo "        Menyukai Komentar Selesai...\n\n";
?>