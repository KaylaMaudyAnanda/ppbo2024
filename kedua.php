<?php
function kelilingLingkaran($jari) : float{
    $keliling = 2*3.14*$jari;
    return $keliling;
}
function volumeBola($jari) : float{
    $volbol = 1.3*3.14*$jari*$jari*$jari;
    return $volbol;
}
function volumeTabung($jari,$tinggi) : float{
    $voltab = 3.14*$jari*$jari*$tinggi;
    return $voltab;
}
function volumeKerucut($jari,$tinggi) : float{
    $volcut = 0.3*3.14*$jari*$jari*$tinggi;
    return $volcut;
}
$luas_tanah = kelilingLingkaran(45);
echo "Keliling Lingkaran dari tanah budi adalah {$luas_tanah}".PHP_EOL;
$luas_tanah = volumeBola(45);
echo "Volume Bola dari tanah budi adalah {$luas_tanah}".PHP_EOL;
$luas_tanah = volumeTabung(45,2);
echo "Volume Tabung dari tanah budi adalah {$luas_tanah}".PHP_EOL;
$luas_tanah = volumeKerucut(45,5);
echo"Volume kerucut dari tanah budi adalah {$luas_tanah}".PHP_EOL;