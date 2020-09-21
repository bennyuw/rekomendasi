<?php

include 'koneksi.php';
session_start();

echo $id_nilai_kompetensi = $_POST['id_nilai_kompetensi'];
$nilai_k1 = $_POST['nilai_k1'];
$nilai_k2 = $_POST['nilai_k2'];
$nilai_k3 = $_POST['nilai_k3'];

mysqli_query($conn,"UPDATE nilai_kompetensi set nilai_k1='$nilai_k1', nilai_k2='$nilai_k2', nilai_k3='$nilai_k3' where id_nilai_kompetensi='$id_nilai_kompetensi'");

header("location:../aspek_kompetensi.php");




