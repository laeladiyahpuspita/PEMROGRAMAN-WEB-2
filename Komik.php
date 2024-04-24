<?php
class Komik extends Buku {
    private $isColorful;

    private function __construct($Judul, $Tahun, $Jumlah_Halaman, $Bahan_Material, $Diskon, $isColorful) {
        parent::__construct($Judul, $Tahun, $Jumlah_Halaman, $Bahan_Material, $Diskon);
        $this->isColorful = $isColorful;
    }

    public static function createKomik($Judul, $Tahun, $Jumlah_Halaman, $Bahan_Material, $Diskon, $isColorful) {
        return new self($Judul, $Tahun, $Jumlah_Halaman, $Bahan_Material, $Diskon, $isColorful);
    }

    public function get_isColorful() {
        return $this->isColorful;
    }
}

// Objek buku
$buku2 = new Buku("Calculus", 2024, 1000, "Kertas", 10);
echo "Judul Buku: " . $buku2->get_Judul() . "<br>";

// Objek komik
$komik = Komik::createKomik("One Piece", 1998, 500, "Kertas", 20, true);
echo "Judul Komik: " . $komik->get_Judul() . "<br>";
?>
