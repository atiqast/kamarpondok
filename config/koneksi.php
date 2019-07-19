<?php
//variabel koneksi
$konek = mysqli_connect("localhost","root","","db_kamar");

if(!$konek){
	echo "Koneksi Database Gagal...!!!";
}
?>