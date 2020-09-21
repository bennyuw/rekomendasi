<?php

include 'koneksi.php';
session_start();

echo $id_keahlian = $_POST['id_keahlian'];
$nama_keahlian = $_POST['nama_keahlian'];

mysqli_query($conn,"UPDATE keahlian set nama_keahlian='$nama_keahlian' where id_keahlian='$id_keahlian'");

header("location:../keahlian.php");




