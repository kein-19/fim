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
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    // contoh method
    // public function sayHello() {
    //     return "Hello World!";
    // }

    // method mengambil nilai dari property
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
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
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();
// echo $produk3->getLabel();

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

?>