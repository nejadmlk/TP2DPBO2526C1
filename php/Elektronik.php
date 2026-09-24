<?php

include "Produk.php";

class Elektronik extends Produk
{
    private $garansi;
    private $baterai;
    private $warna;

    public function __construct($nama = "", $harga = "", $merek = "", $garansi = "", $baterai = "", $warna = "")
    {
        parent::__construct($nama, $harga, $merek);

        $this->garansi = $garansi;
        $this->baterai = $baterai;
        $this->warna = $warna;
    }

    public function getGaransi()
    {
        return $this->garansi;
    }

    public function setGaransi($garansi)
    {
        $this->garansi = $garansi;
    }

    public function getBaterai()
    {
        return $this->baterai;
    }

    public function setBaterai($baterai)
    {
        $this->baterai = $baterai;
    }

    public function getWarna()
    {
        return $this->warna;
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }
}

?>