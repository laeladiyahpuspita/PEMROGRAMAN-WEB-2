<?php
class Buku {
    private $Judul;
    private $Tahun;
    private $Jumlah_Halaman;
    private $Bahan_Material;
    private $Diskon;

    public function __construct($Judul, $Tahun, $Jumlah_Halaman, $Bahan_Material, $Diskon) {
        $this->Judul = $Judul;
        $this->Tahun = $Tahun;
        $this->Jumlah_Halaman = $Jumlah_Halaman;
        $this->Bahan_Material = $Bahan_Material;
        $this->Diskon = $Diskon;
    }

    public function get_Judul() {
        return $this->Judul;
    }

    public function get_Tahun() {
        return $this->Tahun;
    }

    public function get_Jumlah_Halaman() {
        return $this->Jumlah_Halaman;
    }

    public function get_Bahan_Material() {
        return $this->Bahan_Material;
    }

    public function get_Diskon() {
        return $this->Diskon;
    }

    public function set_Diskon($Diskon) {
        $this->Diskon = $Diskon;
    }
    public function cekHarga($hargaDasar) {
        $hargaSetelahDiskon = $hargaDasar - ($hargaDasar * ($this->Diskon / 100));

        $currentYear = date("Y");
        $bookAge = $currentYear - $this->Tahun;

        if ($bookAge <= 5) {
            if ($this->Jumlah_Halaman <= 100) {
                $hargaSetelahDiskon = 100000;
            } elseif ($this->Jumlah_Halaman > 100 && $this->Jumlah_Halaman <= 500) {
                $hargaSetelahDiskon = 300000;
            } else {
                $hargaSetelahDiskon = 500000;
            }
        } elseif ($bookAge <= 10) {
            if ($this->Jumlah_Halaman <= 100) {
                $hargaSetelahDiskon = 500000;
            } elseif ($this->Jumlah_Halaman > 100 && $this->Jumlah_Halaman <= 500) {
                $hargaSetelahDiskon = 150000;
            } else {
                $hargaSetelahDiskon = 250000;
            }
        } else {
            $hargaSetelahDiskon = 10000;
        }
        return $hargaSetelahDiskon;
    }
}

$buku1 = new Buku("Judul Buku", 2022, 300, "Kertas", 10);
echo "Judul: " . $buku1->get_Judul() . "<br>";
echo "Tahun: " . $buku1->get_Tahun() . "<br>";
echo "Jumlah Halaman: " . $buku1->get_Jumlah_Halaman() . "<br>";
echo "Bahan Material: " . $buku1->get_Bahan_Material() . "<br>";
echo "Diskon: " . $buku1->get_Diskon() . "%<br>";
echo "Harga setelah diskon: $" . $buku1->cekHarga(100); // Misalkan harga dasar $100

?>