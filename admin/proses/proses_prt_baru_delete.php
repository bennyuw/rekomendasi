<?php
// include database connection file
include 'koneksi.php';
session_start();
// Get id from URL to delete that user
$id_prt = $_GET['id_prt'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM prt_baru WHERE id_prt=$id_prt");


// After delete redirect to Home, so that latest user list will be displayed.
header("location:../master_prt_baru.php");
?>