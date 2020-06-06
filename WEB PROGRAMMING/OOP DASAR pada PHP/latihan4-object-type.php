<?php 

// class Coba {

// }

// $a = new Coba();
// $b = new Coba();
// $c = new Coba();

// var_dump($a);
// var_dump($b);
// var_dump($c);

// Jualan Produk
// Komik
// Game
class Produk {
    // property
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    // contoh method
    // public function sayHello() {
    //     return "Hello World!";
    // }

    // method mengambil nilai dari property
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    
    // contoh constructor
    // public function __construct() {
    //     echo "Hello World!";
    // }

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

}

// contoh object type
class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// // object
// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Ucharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

// instance
// $produk3 = new Produk();
// $produk3->judul = "Naruto";
// $produk3->penulis = "Masashi Kishimoto";
// $produk3->penerbit = "Shonen Jump";
// $produk3->harga = 30000;

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();
// echo $produk3->getLabel();

// $produk4 = new Produk();
// $produk4->judul = "Uncharted";
// $produk4->penulis = "Neil Druckmann";
// $produk4->penerbit = "Sony Computer";
// $produk4->harga = 250000;

// echo "Komik : " . $produk3->getLabel();
// echo "<br>";
// echo "Game : " . $produk4->getLabel();

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
// $produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
// var_dump($produk3);

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak("asds");

?>