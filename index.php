<?php


include "Animal.php";


class anjing{
}
class elang{
}
class angsa{
}
class kucing{
    public jumlah_kaki;
    public bisa_terbang;
}
$momo = new kucing;
$momo -> jumlah_kaki = 4;
$momo -> bisa_terbang = "Tidak bisa terbang";
$momo -> bersuara = "meoooong";
echo "Momo adalah kucing <br>";
echo "Punya kaki sebanyak : " .$momo -> jumlah_kaki."<br>";
echo $momo -> bisa_terbang."<br>";
echo "Suaranya : " .$momo-> bersuara."<br>";

echo "<hr>";

$doggo = new anjing;
$doggo -> jumlah_kaki = 4;
$doggo -> bisa_terbang = "Tidak bisa terbang";
$doggo -> bersuara = "Guk Guk";
echo "Doggo adalah anjing <br>";
echo "Punya kaki sebanyak : " .$doggo -> jumlah_kaki. "<br>";
echo $doggo -> bisa_terbang.  "<br>";
echo "Suaranya : " .$doggo -> bersuara."<br>";

echo "<hr>";

$zya = new elang;
$zya -> jumlah_kaki = 2;
$zya -> bisa_terbang = "Bisa terbang";
$zya -> bersuara = "miiiip";
echo "Zya adalah elang <br>";
echo "Punya kaki sebanyak : " .$zya -> jumlah_kaki."<br>";
echo $zya -> bisa_terbang."<br>";
echo "Suaranya : " .$zya -> bersuara. "<br>";

echo "<hr>";

$masha = new angsa;
$masha -> jumlah_kaki = 2;
$masha -> bisa_terbang = "Bisa terbang";
$masha -> bersuara = "Kwaak";
echo "Masha adalah angsa <br>";
echo "Punya kaki sebanyak : " .$masha -> jumlah_kaki. "<br>";
echo $masha -> bisa_terbang.  "<br>";
echo "Suaranya : " .$masha -> bersuara."<br>";