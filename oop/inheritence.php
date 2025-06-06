<?php

class Hewan
{
    protected $nama;
    protected $jenis;
}

class Kucing extends Hewan

{
    protected $warna;
    protected $umur;
    public function __construct($nama, $jenis, $warna, $umur)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->warna = $warna;
        $this->umur = $umur;
        echo "Kucing ini bernama " . $this->nama . " dan jenisnya adalah " . $this->jenis . "<br>";
        echo "Kucing ini Berwarna " . $this->warna . " dan umurnya " . $this->umur . " tahun <br>";
    }
}

$kucing1 = new Kucing("Kitti", "persia", "cokelat", 2);