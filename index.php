<?php



class mobil{
    public $nama,
            $merk,
            $warna;
    public function tambahKecepatan(){

    }
    public function kurangiKecepatan(){

    }
}

$mobil1 = new mobil();

class produk { 
    public $nama = 'ini nama',
            $jenis = 'ini jenis',
            $harga = 9999 ;

    public function __construct($nama,$jenis,$harga){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->harga = $harga;
    }

    public function printharga (){
            return $this ->harga;
    }

}

$produk1 = new produk("HOODIE","JAKET",185000);

echo "$produk1->nama, $produk1->jenis";
echo "<br>";
echo "Harga : ". $produk1->printHarga();

?>