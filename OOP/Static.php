<?php

class ContohStatic
{
  public static $angka = 1;

  public static function halo()
  {
    return "Halo " . self::$angka++ . " kali.";
  }
}

echo ContohStatic::$angka;
echo "\n";
echo ContohStatic::halo();
echo "\n\n";
echo ContohStatic::halo();
echo "\n\n";

class Contoh
{
  public static $angka = 1;

  public function halo()
  {
    return "Halo " . self::$angka++ . " kali.\n";
  }
}


$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "\n";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
