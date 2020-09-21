<?php
include 'koneksi.php';
session_start();

$ID_MAJIKAN= $_SESSION['id_majikan'];
$ID_PRT = $_POST['id_prt'];
$NAMA_PELAPOR=$_POST['napel'];
$NAMA_TERLAPOR=$_POST['nater'];
$JENIS_KELUHAN=$_POST['jekel'];
$DESKRIPSI_KELUHAN=$_POST['deskel'];
$DESKRIPSI_SARAN=$_POST['dessa'];


$SQL1="INSERT INTO nilai_kompetensi (ID_LAYANAN_MAJIKAN, ID_MAJIKAN,ID_PRT, JENIS_KELUHAN, DESKRIPSI_KELUHAN, DESKRIPSI_SARAN, STATUS ) VALUES (UUID(),'$ID_MAJIKAN','$ID_PRT','$JENIS_KELUHAN','$DESKRIPSI_KELUHAN','$DESKRIPSI_SARAN','Sedang Diproses')";
$SQL2="INSERT INTO nilai_pengalaman (ID_LAYANAN_MAJIKAN, ID_MAJIKAN,ID_PRT, JENIS_KELUHAN, DESKRIPSI_KELUHAN, DESKRIPSI_SARAN, STATUS ) VALUES (UUID(),'$ID_MAJIKAN','$ID_PRT','$JENIS_KELUHAN','$DESKRIPSI_KELUHAN','$DESKRIPSI_SARAN','Sedang Diproses')";
$result1 = mysqli_query($conn, $SQL1);
$result2 = mysqli_query($conn, $SQL2);
if($result1 && $result2){
    header('Location: ../profil_aktual.php');
} else {
    echo $SQL;
}

?>