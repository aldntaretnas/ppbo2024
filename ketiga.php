<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }
    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}
$nasi_tumpeng = new Lingkaran();
$nasi_tumpeng->jari_jari = 8;
echo "luas lingkaran nasi tumpeng yaitu {$nasi_tumpeng->luas()}\n";
echo "keliling lingkaran nasi tumpeng yaitu {$nasi_tumpeng->keliling()}\n";


class Bola
{
    const PHI = 3.14;
    public $jari_jari;
    public function luaspermukaan() : float {
        return 4*self::PHI*$this->jari_jari;
    }
    public function volume(): float {
        return (4/3) * self::PHI * pow($this->jari_jari,3);
    }
}
$nasi_tumpeng = new Bola();
$nasi_tumpeng->jari_jari=12;
echo "luas permukaan bola yaitu {$nasi_tumpeng->luaspermukaan()}\n";
echo "volume bola yaitu {$nasi_tumpeng->volume()}\n";


class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function luaspermukaan() : float {
        return 2*self::PHI*$this->jari_jari*($this->jari_jari+$this->tinggi);
    }

    public function volume() : float {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}
$nasi_tumpeng = new Tabung();
$nasi_tumpeng->jari_jari=12;
$nasi_tumpeng->tinggi=5;
echo "luas permukaan tabung yaitu {$nasi_tumpeng->luaspermukaan()}\n";
echo "volume tabung yaitu {$nasi_tumpeng->volume()}\n";


class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;
 
    public function luaspermukaan() : float {
        $s = sqrt(($this->jari_jari*$this->jari_jari)+($this->tinggi*$this->tinggi));
        return self::PHI*$this->jari_jari*($this->jari_jari+$s);
    }
    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

$nasi_tumpeng = new Kerucut();
$nasi_tumpeng->jari_jari=6;
$nasi_tumpeng->tinggi=5;
echo "luas permukaan kerucut yaitu {$nasi_tumpeng->luaspermukaan()}\n";
echo "volume kerucut yaitu {$nasi_tumpeng->volume()}\n";
