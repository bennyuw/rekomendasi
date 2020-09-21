<?php

include 'koneksi.php';
session_start();

echo $id_nilai_pengalaman = $_POST['id_nilai_pengalaman'];
echo $nilai_p1 = $_POST['nilai_p1'];
echo $nilai_p2 = $_POST['nilai_p2'];

mysqli_query($conn,"UPDATE nilai_pengalaman set nilai_p1='$nilai_p1', nilai_p2='$nilai_p2' where id_nilai_pengalaman='$id_nilai_pengalaman'");

header("location:../aspek_pengalaman.php");




