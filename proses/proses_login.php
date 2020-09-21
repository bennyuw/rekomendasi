<?php
include 'koneksi.php';
session_start();

$USERNAME = $_POST['username'];
$PASSWORD = $_POST['password'];

$sql = "select * from majikan where USERNAME_MAJIKAN='$USERNAME' and PASSWORD_MAJIKAN ='$PASSWORD'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
if ($result){
    if ($count == 1){
        $_SESSION['id_majikan'] = $data['ID_MAJIKAN'];
        $_SESSION['nama'] = $data['NAMA_MAJIKAN'];
        $_SESSION['jkel'] = $data['JKEL_MAJIKAN'];
        $_SESSION['tempat_lahir'] = $data['KOTA_LAHIR_MAJIKAN'];
        $_SESSION['tanggal_lahir'] = $data['TL_MAJIKAN'];
        $_SESSION['alamat'] = $data['ALAMAT_MAJIKAN'];
        $_SESSION['no_hp'] = $data['TELP_MAJIKAN'];
        $_SESSION['pendapatan'] = $data['PENDAPATAN_MAJIKAN'];
        $_SESSION['no_kk'] = $data['NO_KK_MAJIKAN'];
        $_SESSION['no_ktp'] = $data['NO_KTP_MAJIKAN'];
        $_SESSION['email'] = $data['EMAIL_MAJIKAN'];
        $_SESSION['username'] = $data['USERNAME_MAJIKAN'];
        $_SESSION['password'] = $data['PASSWORD_MAJIKAN'];
        $_SESSION['foto'] = $data['FOTO_MAJIKAN'];
        $_SESSION['fotoktp'] = $data['FOTO_KTP_MAJIKAN'];
        $_SESSION['fotokk'] = $data['FOTO_KK_MAJIKAN'];
        $_SESSION['fotoslip'] = $data['FOTO_SLIP_GAJI'];
        $_SESSION['status'] = $data['STATUS_MAJIKAN'];
        
        header('Location: ../index.php');
    } else {
        header('Location: ../login.php');
    }
}
?>