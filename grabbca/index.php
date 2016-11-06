<?php

function bacaHTML($url){
     // inisialisasi CURL
     $data = curl_init();
     // setting CURL
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     // menjalankan CURL untuk membaca isi file
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}

$kodeHTML =  bacaHTML('http://www.klikbca.com');
$result = '<h1>KURS Rupiah</h1>';
// Grab Date Kurs
$gDateKurs = explode('<table width="139" border="0" cellspacing="0" cellpadding="0">', $kodeHTML);
$gDateKurs = explode('<tr>', $gDateKurs[1]);
$result .= '<h3>Date : ' . strip_tags(str_replace('&nbsp;', '', $gDateKurs[2])) . '</h3>';

// Grab Table Kurs
$gTableKurs = explode('<table width="139" border="0" cellspacing="0" cellpadding="0">', $kodeHTML);
$gTableKurs2 = explode('</table>', $gTableKurs[2]);

// Result
$result .= '<table border="1">';
$result .= '<tr><th>KURS</th><th>JUAL</th><th>BELI</th></tr>';
$result .= $gTableKurs2[0];
$result .= '</table>';
echo $result;
?>