<?php
// include database connection file
include 'koneksi.php';
session_start();
// Get id from URL to delete that user
$id_sertifikat_pelatihan = $_GET['id_sertifikat_pelatihan'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM sertifikat_pelatihan WHERE id_sertifikat_pelatihan=$id_sertifikat_pelatihan");


// After delete redirect to Home, so that latest user list will be displayed.
header("location:../sertifikat_pelatihan.php");
?>