<?php

class ProdukInheritance
{
  public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }
}

class KomikInheritance extends ProdukInheritance
{
  // public $jmlHalaman;
  public function getInfoProduk()
  {
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class GameInheritance extends ProdukInheritance
{
  // public $jmlHalaman;
  public function getInfoProduk()
  {
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new KomikInheritance("One Piece", "Oiichiro Oda", "Weekly Shonen Jump", 30000, 100, 0);
$produk2 = new GameInheritance("Uncharted", "Neil Druckmann", "Sony Computer", 25000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br/>";
echo $produk2->getInfoProduk();
