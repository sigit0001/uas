<?php
//include koneksi database
include './config.php';

// menangkap data yang di kirim dari form
$NamaBuku = $_POST['NamaBuku'];
$Kategori = $_POST['Kategori'];
$Penerbit = $_POST['Penerbit'];
$Harga = $_POST['Harga'];
$Harga = $_POST['Diskon'];

// menginput data ke database
mysqli_query($koneksi, "insert into sibuku values('','$NamaBuku','$Kategori','$Penerbit','$Harga','Diskon')");
// mengembalikan ke halaman awal
header("location:./halaman_awal.php");