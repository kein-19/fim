<?php 

abstract class Produk {
    // property
    protected $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;

    // contoh constructor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul( $judul ) {
        // if( !is_string($judul) ){
        //     throw new Exception("Judul harus string");
        // }
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }
    
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }
        
    public function getDiskon() {
        return $this->diskon;
    }
        
    
    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    // method mengambil nilai dari property
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();

}