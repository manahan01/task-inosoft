<?php
$phi= 3.14;

echo "perulangan 1 - 100";
for ($i=1;$i<=100;$i++){
    echo $i;
    echo ".00";
    echo "\n";
}
echo "\n";
echo "percabangan";
echo "input 1 untuk luas lingkaran kelipatan 3, input 2 untuk keliling lingkaran kelipatan 5";
echo "\n";
$a = trim(fgets(STDIN));
switch($a){
    case 1:
        echo "luas lingkaran untuk kelipatan 3";
        for ($j=1;$j<=100;$j++){
            $tiga =+ 2;
            echo $hasil = $j + $tiga;
            echo ".00";
            echo "\n";
        }
        $luas = $phi * 3*3;
        echo "luas lingkaran = ";
        echo $luas;
    break;
    case 2:
        echo "keliling lingkaran untuk kelipatan 5";
        for ($j=1;$j<=100;$j++){
            $lima =+ 4;
            echo $hasil = $j + $lima;
            echo ".00";
            echo "\n";
        }
        $keliling = 2 * $phi * 5*5;
        echo "keliling lingkaran = ";
        echo $keliling;
    break;

    default:
    echo "berhasil";
}
?>