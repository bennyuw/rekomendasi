<?php
include 'koneksi.php';

$id_prt = $_GET['id_prt'];

$query = mysqli_query($conn, "select * from prt_baru where id_prt='$id_prt'");
$data_prt = mysqli_fetch_array($query);
$data = array(
            'nama'      =>  $data_prt['NAMA_PRT'],
        
        );
 echo json_encode($data);
?>