<?php

include 'koneksi.php';
session_start();

$nama_prt = $_POST['nama_prt'];
$jkel_prt = $_POST['jkel_prt'];
$tl_prt = $_POST['tl_prt'];
$kota_lahir_prt = $_POST['kota_lahir_prt'];
$alamat_prt = $_POST['alamat_prt'];
$telp_prt = $_POST['telp_prt'];
$no_ktp_prt = $_POST['no_ktp_prt'];
$no_kk_prt = $_POST['no_kk_prt'];
$email_prt = $_POST['email_prt'];
$username_prt = $_POST['username_prt'];
$password_prt = $_POST['password_prt'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$pengalaman_bekerja = $_POST['pengalaman_bekerja'];
$status_prt = $_POST['status_prt'];

// upload foto KTP
// $temp = $_FILES['foto_ktp_prt']['tmp_name'];
// $foto_ktp_prt = $_FILES['foto_ktp_prt']['name'];
// $size = $_FILES['foto_ktp_prt']['size'];
// $type = $_FILES['foto_ktp_prt']['type'];
// $folder = "proses/file";

// move_uploaded_file($temp, $folder . $name);

// upload foto KK
// $temp = $_FILES['foto_kk_prt']['tmp_name'];
// $foto_kk_prt = $_FILES['foto_kk_prt']['name'];
// $size = $_FILES['foto_kk_prt']['size'];
// $type = $_FILES['foto_kk_prt']['type'];
// $folder = "proses/file";

// move_uploaded_file($temp, $folder . $name);


mysqli_query($conn,"INSERT INTO prt_baru
(id_prt,nama_prt,jkel_prt,tl_prt,kota_lahir_prt,alamat_prt,telp_prt,no_ktp_prt,no_kk_prt,email_prt,username_prt,password_prt,pendidikan_terakhir,pengalaman_bekerja,status_prt) VALUES
(NULL,'$nama_prt','$jkel_prt','$tl_prt','$kota_lahir_prt','$alamat_prt','$telp_prt','$no_ktp_prt','$no_kk_prt','$email_prt','$username_prt','$password_prt','$pendidikan_terakhir','$pengalaman_bekerja', '$status_prt')");

header("location:../master_prt_baru.php");




