<?php

class ProdukConstructor
{
  public $judul, $penulis, $penerbit, $harga;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

$produk1 = new ProdukConstructor("One Piece", "Oiichiro Oda", "Weekly Shonen Jump", 30000);
$produk2 = new ProdukConstructor("Uncharted", "Neil Druckmann", "Sony Computer", 25000);
$produk3 = new ProdukConstructor("Naruto");

echo "Komik : " . $produk1->getLabel();
echo "\n";
echo "Game : " . $produk2->getLabel();
echo "\n";
var_dump($produk3);
