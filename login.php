<?php
//include koneksi database
include './config.php';

$nama = $_POST["username"];
$katasandi = $_POST["password"];

$user = mysqli_query($koneksi,"SELECT * FROM user WHERE id = 1");
while($data = mysqli_fetch_assoc($user)){
    if($nama == $data["nama_user"] && $katasandi == $data["kata_sandi"]){
        header("location:./halaman_awal.php");
    }
}

?>


