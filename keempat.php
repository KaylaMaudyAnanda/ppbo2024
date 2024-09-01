<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

$nasi_tumpeng = new Lingkaran();
$nasi_tumpeng->jari_jari = 4;
echo "luas lingkaran: " . $nasi_tumpeng->luas() . "\n";
echo "keliling lingkaran: " . $nasi_tumpeng->keliling() . "\n";

$bola = new Bola();
$bola->jari_jari = 4;
echo "volume bola: " . $bola->volume() . "\n";

$tabung = new Tabung();
$tabung->jari_jari = 4;
$tabung->tinggi = 4;
echo "volume tabung: " . $tabung->volume() . "\n";

$kerucut = new Kerucut();
$kerucut->jari_jari = 4;
$kerucut->tinggi = 4;
echo "volume kerucut: " . $tabung->volume() . "\n";
?>

