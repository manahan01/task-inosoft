<?php
echo "Bangun datar ini adalah {lingkaran/persegi/persegi panjang, sesuai parameter} yang memiliki luas {luas bangun datar} dan keliling{keliling bangun datar}";
class lingkaran {
    
public function luas($jari_jari){
    echo "luas lingkaran";
    return 3.14 * $jari_jari* $jari_jari;
}
public function keliling($jari_jari){
    echo "keliling lingkaran";
    return 2* 3.14 * $jari_jari;
}
}
class persegi{
    public function luas($sisi){
        echo "luas persegi";
        return $sisi * $sisi;
    }
    public function keliling($sisi){
        echo "keliling persegi";
        return 4 * $sisi;
    }

}
class persegi_panjang{
    public function luas($P,$L){
        echo "luas persegi panjang";
        return $P * $L;
    }
    public function keliling($P,$L){
        echo "keliling persegi panjang";
        return 2 * $P + $L;
    }
}

$lingkaran = new lingkaran();
$persegi = new persegi();
$persegi_panjang = new persegi_panjang();

echo $lingkaran->luas(5);
echo "\n";
echo $lingkaran->keliling(5);
echo "\n";
echo $persegi->luas(10);
echo "\n";
echo $persegi->keliling(10);
echo "\n";
echo $persegi_panjang->luas(5,10);
echo "\n";
echo $persegi_panjang->keliling(5,10);

?>