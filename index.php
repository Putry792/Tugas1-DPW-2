<?php
include "Animal.php";

class kucing{
  public $jumlah_kaki, $bisa_terbang, $suara;
  function bersuara(){
    return "meoooong".$this ->suara;
  }
}
$momo = new kucing;
$momo -> jumlah_kaki = 4;
$momo -> bisa_terbang = "Tidak bisa terbang";
echo "Momo adalah kucing <br>";
echo "Punya kaki sebanyak : " .$momo -> jumlah_kaki."<br>";
echo $momo -> bisa_terbang."<br>";
echo "Suaranya : " .$momo-> bersuara();

echo "<hr>";

class anjing{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
      return "Guk Guk".$this ->suara;
    }
  }
$doggo = new anjing;
$doggo -> jumlah_kaki = 4;
$doggo -> bisa_terbang = "Tidak bisa terbang";
echo "Doggo adalah anjing <br>";
echo "Punya kaki sebanyak : " .$doggo -> jumlah_kaki. "<br>";
echo $doggo -> bisa_terbang.  "<br>";
echo "Suaranya : " .$doggo -> bersuara();

echo "<hr>";

class elang{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
      return "Miiip".$this ->suara;
    }
  }
$zya = new elang;
$zya -> jumlah_kaki = 2;
$zya -> bisa_terbang = "Bisa terbang";
echo "Zya adalah elang <br>";
echo "Punya kaki sebanyak : " .$zya -> jumlah_kaki."<br>";
echo $zya -> bisa_terbang."<br>";
echo "Suaranya : " .$zya -> bersuara();

echo "<hr>";

class angsa{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
      return "Kwaak".$this ->suara;
    }
  }
$masha = new angsa;
$masha -> jumlah_kaki = 2;
$masha -> bisa_terbang = "Bisa terbang";
echo "Masha adalah angsa <br>";
echo "Punya kaki sebanyak : " .$masha -> jumlah_kaki. "<br>";
echo $masha -> bisa_terbang.  "<br>";
echo "Suaranya : " .$masha -> bersuara();