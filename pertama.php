<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan Nama Anda :');
$waktu = date('H:m');
echo "Selamat Sore, {$nama}, sekarang pukul {$waktu}\n";