<?php
include 'koneksi.php';
session_start();

$USERNAME = $_POST['username'];
$PASSWORD = $_POST['password'];

$sql = "select * from user where USERNAME_USER='$USERNAME' and PASSWORD_USER ='$PASSWORD'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
if ($result){
    if ($count == 1){
        $_SESSION['id_user'] = $data['ID_USER'];
        $_SESSION['nama'] = $data['NAMA_USER'];
        $_SESSION['foto'] = $data['FOTO_USER'];
        $_SESSION['username'] = $data['USERNAME_USER'];
        $_SESSION['password'] = $data['PASSWORD_USER'];
        
        header('Location: ../index.php');
    } else {
        header('Location: ../login.php');
    }
}
?>