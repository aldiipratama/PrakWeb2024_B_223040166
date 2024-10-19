<?php

define("NAMA", "Aldi Pratama");
echo NAMA;

echo "<br/>";

const UMUR = 22;
echo UMUR;

echo "<br/>";

class Coba
{
  const NAME = "Aldi";
  public $kelas = __CLASS__;
}

echo Coba::NAME;

echo "<br/>";

$obj = new Coba();
echo $obj->kelas;

echo "<br/>";

function func()
{
  return __FUNCTION__;
}

echo func();
