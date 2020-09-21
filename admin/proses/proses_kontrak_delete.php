<?php
// include database connection file
include 'koneksi.php';
session_start();
// Get id from URL to delete that user
$id_kontrak = $_GET['id_kontrak'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM kontrak WHERE id_kontrak=$id_kontrak");


// After delete redirect to Home, so that latest user list will be displayed.
header("location:../kontrak.php");
?>