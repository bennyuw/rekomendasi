<?php

include 'koneksi.php';
session_start();

$id_prt = $_POST['id_prt'];
$nama_prt = $_POST['nama_prt'];
$durasi_kontrak = $_POST['durasi_kontrak'];
$tanggal = $_POST['tanggal'];

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


mysqli_query($conn,"INSERT INTO kontrak
(id_kontrak,id_prt,nama_prt,durasi_kontrak,tanggal) VALUES
(NULL, '$id_prt' ,'$nama_prt','$durasi_kontrak','$tanggal')");

header("location:../kontrak.php");




