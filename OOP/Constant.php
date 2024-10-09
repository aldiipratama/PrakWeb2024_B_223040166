<?php

define("NAMA", "Aldi Pratama");
echo NAMA;

echo "\n";

const UMUR = 22;
echo UMUR;

echo "\n";

class Coba
{
  const NAME = "Aldi";
  public $kelas = __CLASS__;
}

echo Coba::NAME;

echo "\n";

$obj = new Coba();
echo $obj->kelas;

echo "\n";

function func()
{
  return __FUNCTION__;
}

echo func();
