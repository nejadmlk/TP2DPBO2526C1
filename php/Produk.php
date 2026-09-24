<?php

class Produk
{
    private $nama;
    private $harga;
    private $merek;

    public function __construct($nama = "", $harga = "", $merek = "")
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->merek = $merek;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getMerek()
    {
        return $this->merek;
    }

    public function setMerek($merek)
    {
        $this->merek = $merek;
    }
}

?>