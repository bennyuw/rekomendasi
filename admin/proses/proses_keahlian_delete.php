<?php
// include database connection file
include 'koneksi.php';
session_start();
// Get id from URL to delete that user
echo$id_keahlian = $_GET['id_keahlian'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM keahlian WHERE id_keahlian=$id_keahlian");


// After delete redirect to Home, so that latest user list will be displayed.
header("location:../keahlian.php");
?>