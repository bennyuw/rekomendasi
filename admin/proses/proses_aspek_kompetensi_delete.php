<?php
// include database connection file
include 'koneksi.php';
session_start();
// Get id from URL to delete that user
echo$id_nilai_kompetensi = $_GET['id_nilai_kompetensi'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM nilai_kompetensi WHERE id_nilai_kompetensi=$id_nilai_kompetensi");


// After delete redirect to Home, so that latest user list will be displayed.
header("location:../aspek_kompetensi.php");
?>