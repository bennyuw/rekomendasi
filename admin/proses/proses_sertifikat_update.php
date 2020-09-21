<?php

include 'koneksi.php';
session_start();

$id_sertifikat_pelatihan = $_POST['id_sertifikat_pelatihan'];
$jumlah_sertifikat_pelatihan = $_POST['jumlah_sertifikat_pelatihan'];
$deskripsi = $_POST['deskripsi'];


mysqli_query($conn,"UPDATE sertifikat_pelatihan set jumlah_sertifikat_pelatihan='$jumlah_sertifikat_pelatihan',deskripsi='$deskripsi'  where id_sertifikat_pelatihan='$id_sertifikat_pelatihan'");

header("location:../sertifikat_pelatihan.php");




