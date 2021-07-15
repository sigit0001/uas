<?php
//include koneksi database
include './config.php';

// menangkap data yang di kirim dari form
$no = $_GET['no'];


// menginput data ke database
mysqli_query($koneksi, "delete from sibuku where no='$no'");
// mengembalikan ke halaman awal
header("location:./halaman_awal.php");