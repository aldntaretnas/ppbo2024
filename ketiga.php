<?php

class Lingkaran
{
    const PHI =3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }
    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }
    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}
$nasi_tumpeng = new Lingkaran(5);
echo "Luas lingkaran nasi tumpeng yaitu {$nasi_tumpeng->luas()}\n";
echo "Keliling lingkaran nasi tumpeng yaitu {$nasi_tumpeng->keliling()}\n";


class Bola
{
    const PHI=3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari=$jari_jari;
    }
    public function luaspermukaan() : float {
        return 4*self::PHI*$this->jari_jari*$this->jari_jari;
    }
    public function volume(): float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}
$nasi_tumpeng = new Bola(5);
echo "Luas permukaan bola yaitu {$nasi_tumpeng->luaspermukaan()}\n";
echo "Volume bola yaitu {$nasi_tumpeng->volume()}\n";


class Tabung
{
    const PHI=3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari,$tinggi) {
        $this->jari_jari=$jari_jari;
        $this->tinggi=$tinggi;
    }
    public function luaspermukaan() : float {
        return 2*self::PHI * $this->jari_jari*($this->jari_jari+$this->tinggi);
    }

    public function volume() : float {
        return self::PHI*pow($this->jari_jari, 2)*$this->tinggi;
    }
}
$nasi_tumpeng = new Tabung(5,5);
echo "Luas permukaan tabung yaitu {$nasi_tumpeng->luaspermukaan()}\n";
echo "Volume tabung yaitu {$nasi_tumpeng->volume()}\n";


class Kerucut
{
    const PHI=3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari,$tinggi) {
        $this->jari_jari=$jari_jari;
        $this->tinggi=$tinggi;
    }
    public function luaspermukaan() : float {
        $s = sqrt(($this->jari_jari*$this->jari_jari)+($this->tinggi*$this->tinggi));
        return self::PHI*$this->jari_jari*($this->jari_jari+$s);
    }
    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}
$nasi_tumpeng = new Kerucut(5, 5);
echo "Luas permukaan kerucut yaitu {$nasi_tumpeng->luaspermukaan()}\n";
echo "Volume kerucut yaitu {$nasi_tumpeng->volume()}\n";