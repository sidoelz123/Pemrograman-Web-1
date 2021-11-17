<?php 
    // latihan3.php
    function hitung($teks, $nilai_1, $nilai_2){
        $hasil = $nilai_1 + $nilai_2;
        echo $teks. "$nilai_1 + $nilai_2 = ".$hasil;

    }
    $isi ="Hasil dari Penjumlahan ";
    $a = 5;
    echo hitung($isi, $a, 5)

?>