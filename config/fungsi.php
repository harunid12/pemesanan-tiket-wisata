<?php

function hitung_dewasa($jumlah_dewasa){
    $hasil_dewasa = $jumlah_dewasa * 10000;
    return $hasil_dewasa;
}

function hitung_anak($jumlah_anak){
    $hasil_anak = $jumlah_anak * 10000;
    $hasil_diskon = $hasil_anak * 50/100;
    return $hasil_diskon;
}

function total_bayar($hasil_dewasa, $hasil_diskon){
    $sum = $hasil_dewasa + $hasil_diskon;
    return $sum;

}

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
} 

function getYoutubeEmbedUrl($url)
{
     $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
     $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }

    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }
    return 'https://www.youtube.com/embed/' . $youtube_id ;
}


?>