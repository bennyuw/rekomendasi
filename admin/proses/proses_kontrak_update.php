<?php

include 'koneksi.php';
session_start();

$id_kontrak = $_POST['id_kontrak'];
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


mysqli_query($conn,"UPDATE kontrak set durasi_kontrak='$durasi_kontrak', tanggal='$tanggal' where id_kontrak='$id_kontrak'");


header("location:../kontrak.php");




