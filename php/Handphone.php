<?php

include "Elektronik.php";

class Handphone extends Elektronik
{
    private $ram;
    private $penyimpanan;
    private $gambar;

    public function __construct($nama = "", $harga = "", $merek = "", $garansi = "", $daya = "", $warna = "", $ram = "", $penyimpanan = "", $gambar = "")
    {
        parent::__construct($nama, $harga, $merek, $garansi, $daya, $warna);

        $this->ram = $ram;
        $this->penyimpanan = $penyimpanan;
        $this->gambar = $gambar;
    }

    public function getRam()
    {
        return $this->ram;
    }

    public function setRam($ram)
    {
        $this->ram = $ram;
    }

    public function getPenyimpanan()
    {
        return $this->penyimpanan;
    }

    public function setPenyimpanan($penyimpanan)
    {
        $this->penyimpanan = $penyimpanan;
    }

    public function getGambar()
    {
        return $this->gambar;
    }

    public function setGambar($gambar)
    {
        $this->gambar = $gambar;
    }
}

?>