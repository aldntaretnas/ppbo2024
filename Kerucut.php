<?php
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