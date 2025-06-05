<?php



class Mobil
{
    // ini property
    public $nama;
    public $warna;
    public $merk;

    public function hidupkanMesin()
    {
        echo "mesin mobil " . $this->nama . " sudah hidup" . "mobil saya bermerk " . $this->merk . " dan berwarna " . $this->warna;
    }
}


$mobilSaya = new Mobil();
$mobilSaya->nama = "avanza";
$mobilSaya->warna = "merah";
$mobilSaya->merk = "toyota";
echo $mobilSaya->hidupkanMesin();