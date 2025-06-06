<?php


class Manusia
{
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
        echo "Halo, nama saya " . $this->nama . "<br>";
    }
}

$manusia1 = new Manusia("alfan");