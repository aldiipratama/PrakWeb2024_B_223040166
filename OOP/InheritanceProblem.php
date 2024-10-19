<?php

class ProdukInheritanceProblem
{
  public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "Tipe")
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoLengkap()
  {
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    if ($this->tipe == "Komik") {
      $str .= " - {$this->jmlHalaman} Halaman.";
    } else {
      $str .= " - {$this->waktuMain} Jam.";
    }

    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(ProdukInheritanceProblem $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new ProdukInheritanceProblem("One Piece", "Oiichiro Oda", "Weekly Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new ProdukInheritanceProblem("Uncharted", "Neil Druckmann", "Sony Computer", 25000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br/>";
echo $produk2->getInfoLengkap();
