<?php
// include database connection file
include 'koneksi.php';
session_start();
// Get id from URL to delete that user
$id_nilai_pengalaman = $_GET['id_nilai_pengalaman'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM nilai_pengalaman WHERE id_nilai_pengalaman=$id_nilai_pengalaman");


// After delete redirect to Home, so that latest user list will be displayed.
header("location:../aspek_pengalaman.php");
?>