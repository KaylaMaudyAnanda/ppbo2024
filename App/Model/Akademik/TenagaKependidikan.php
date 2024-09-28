<?php
namespace App\Model\Akademik;

class TenagaKependidikan extends Pegawai {
    public int $gaji_pokok;

    public function cuti(): void {
        // Implementasi cuti
        echo "{$this->nama} sedang cuti";
    }
}
