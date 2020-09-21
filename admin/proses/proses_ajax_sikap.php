<?php
include 'koneksi.php';

$id_prt = $_GET['ID_PRT'];

$query = mysqli_query($conn, "select * from prt_baru where ID_PRT='$id_prt'");
$data_prt = mysqli_fetch_array($query);
$data = array(
            'nama'      =>  $data_prt['NAMA_PRT'],
        
        );
 echo json_encode($data);
?>