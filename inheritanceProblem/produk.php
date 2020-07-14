<?php 

class produk {
	public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe;

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
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
		return "$this->penulis | $this->penerbit";
	}

	public function getInfoLengkap()
	{
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
		if ($this->tipe == "Komik") {
			$str .= " - {$this->tipe} Halaman.";
		} elseif ($this->tipe == "Game") {
			$str .= " ~ {$this->waktuMain} Jam.";
		}
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak(Produk $produk)
	{
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Anime", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

// Komik : Masashi Kishimoto | Anime
// Game : Neil Druckmann | Sony Computer
// Naruto | Masashi Kishimoto | Anime (Rp. 30000)

// Komik : Naruto | Masashi Kishimoto | Anime (Rp. 30000) - 100 Halaman.
// Game : Uncharted | Neil Druckmannn | Sony Computer (Rp. 250000) ~ 50 Jam.


echo $produk1->getInfoLengkap();
echo '<br>';
echo $produk2->getInfoLengkap();