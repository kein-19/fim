<?php
// manipulasi string 1
include "koneksi.php";
$query=mysqli_query($koneksi,"SELECT c_name FROM tabel_1");
$data=mysqli_fetch_array($query);

$nama_panggilan=$data['c_name'];
echo "Nama di database (original) = ".$nama_panggilan."<br>";
echo "Nama dalam huruf besar = ".strtoupper($nama_panggilan)."<br>";
echo "Nama dalam huruf kecil = ".strtolower($nama_panggilan)."<br>";
echo "Huruf besar di awal = ".ucwords($nama_panggilan)."<br>";

echo "<h2>Menggunakan array 2 dimensi (menampilkan urutan array)</h2>";
$query2=mysqli_query($koneksi,"SELECT c_name FROM tabel_1");
$data2=array($query2);
while ($data2[] = mysqli_fetch_array($query2));
$nama_panggilan2=$data2[4]['c_name'];
echo "Nama di database (original) = ".$nama_panggilan2."<br>";
echo "Nama dalam huruf besar = ".strtoupper($nama_panggilan2)."<br>";
echo "Nama dalam huruf kecil = ".strtolower($nama_panggilan2)."<br>";
echo "Huruf besar di awal = ".ucwords($nama_panggilan2)."<br>";

echo "<h2>Menggunakan Query SQL</h2>";
$potongananama=substr($nama_panggilan2,2);
echo "Tampil Nama = ".ucwords(substr($nama_panggilan2,1))."<br>";
echo "Tampil Nama = ".ucwords(substr($nama_panggilan2,0,3))."<br>";
echo "Tampil Nama = ".ucwords(substr($nama_panggilan2,2))."$potongananama<br><br><br>";

$query3=mysqli_query($koneksi,"SELECT tgl_out,rupiah,array_days FROM tabel_1");
$data3=mysqli_fetch_array($query3);
$tanggal_default=$data3['tgl_out'];
$tanggal_replace=str_replace("-","/",$data3['tgl_out']);
$uang_default=$data3['rupiah'];
$uang_rupiah=number_format($uang_default,0,',','.');
$kumpulan_hari=$data3['array_days'];
$kumpulan_hari_explode=explode(" ",$kumpulan_hari);

echo "Tanggal Default = ".$tanggal_default."<br>";
echo "Tanggal Replace = ".$tanggal_replace."<br>";
echo "Uang Default = ".$uang_default."<br>";
echo "Uang Rupiah = Rp ".$uang_rupiah."<br>";
echo "<hr><h4>Hari2</h4><table border='1' cellpadding='3'>";
foreach ($kumpulan_hari_explode as $hari) {
    echo "<tr><td>".$hari."</td></tr>";
}
echo "</table>";

?>