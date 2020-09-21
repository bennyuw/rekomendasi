<?php
include 'koneksi.php';
session_start();

date_default_timezone_set('Asia/Jakarta');
$ID_PRT = $_GET['id'];
$ID_MAJIKAN = $_SESSION['id_majikan'];
$TANGGAL = date('Y-m-d');



    $SQL = "INSERT INTO `permintaan` (`ID_PERMINTAAN`, `ID_PRT`, `ID_MAJIKAN`, `TGL_PERMINTAAN`, `STATUS_PERMINTAAN`) VALUES (NULL, '$ID_PRT', '$ID_MAJIKAN', '$TANGGAL', '0');";
    $result = mysqli_query($conn, $SQL);    

    if ($result) {
        header('Location: ../permintaan_prt.php');
    } else {
        echo $SQL;
    }

