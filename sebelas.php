<?php

require_once 'vendor/autoload.php';

use App\Admin\Dosen;

// Membuat instance dari kelas Dosen
$dian = new Dosen();

// Mengisi atribut objek $dian
$dian->nama = "Dian Prawira";
$dian->nip = 198411132015041001;
$dian->setNoHp(62111111);
$dian->alamat = "Jln Purnama";
$dian->nidn = "0013118405";

// Menjalankan fungsi mengajar
$dian->mengajar();  // Output: Dian Prawira sedang mengajar perkuliahan