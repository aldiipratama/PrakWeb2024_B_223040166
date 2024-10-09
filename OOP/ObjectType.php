<?php

class ProdukObjectType
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

class CetakInfoProduk
{
  public function cetak(ProdukObjectType $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new ProdukObjectType("One Piece", "Oiichiro Oda", "Weekly Shonen Jump", 30000);
$produk2 = new ProdukObjectType("Uncharted", "Neil Druckmann", "Sony Computer", 25000);

echo "Komik : " . $produk1->getLabel();
echo "\n";
echo "Game : " . $produk2->getLabel();
echo "\n";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
