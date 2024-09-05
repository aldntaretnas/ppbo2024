<?php

function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}
$luas_tanah = luasLingkaran(45);
echo "Luas tanah budi adalah {$luas_tanah}\n";



function kllingkaran($jari) : float {
    $keliling = 2*3.14*$jari;
    return $keliling;
}
$kelilingtanah = kllingkaran(21);
echo "Keliling lingkaran tanah budi adalah {$kelilingtanah}\n";



function vbola($jari) : float {
    $volbola = (4/3)*3.14*pow($jari, 3);
    return $volbola;
}
$volumetanah = vbola(20);
echo "volume bola budi adalah {$volumetanah}\n";



function vtabung($jari, $tinggitab) : float {
    $voltabung = 3.14*($jari**2)*$tinggitab;
    return $voltabung;
}
$tabtanah = vtabung(45,12);
echo "volume tabung budi adalah {$tabtanah}\n";



function vkerucut($jari, $tinggiker) : float {
    $volker = (1/3)*3.14*($jari**2)*$tinggiker;
    return $volker;
}
$kertanah = vkerucut(12,3);
echo "volume kerucut budi adalah {$kertanah}\n";

