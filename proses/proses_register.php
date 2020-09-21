<?php
include 'koneksi.php';

@$NAMA = $_POST['nama'];
@$JKEL = $_POST['jkel'];
@$TANGGAL_LAHIR = $_POST['tanggal_lahir'];
@$TEMPAT_LAHIR = $_POST['tempat_lahir'];
@$ALAMAT = $_POST['alamat'];
@$NO_HP = $_POST['no_hp'];
@$PENDAPATAN = $_POST['pendapatan'];
@$NO_KK = $_POST['no_kk'];
@$NO_KTP = $_POST['no_ktp'];
@$EMAIL = $_POST['email'];
@$USERNAME = $_POST['username'];
@$PASSWORD = $_POST['password'];
// @$FOTO = $_POST['http://localhost/riset/proses/file/avatar0.jpg'];


if (isset($_POST['register'])) {

    // $PERSETUJUAN = $_POST['persetujuan'];

    // if ($PERSETUJUAN == 'on') {
    //     $PERSETUJUAN = 1;
    // } else {
    //     $PERSETUJUAN = 0;
    // }

    $PecahStr = explode(" ", $NAMA);
    $inisial = '';
    for ($i = 0; $i < count($PecahStr); $i++) {
        $rest = substr($PecahStr[$i], -30, 1);
        $inisial = $inisial . $rest;
    }

    $date = date('dmY');
    $time = date('His');

    $ID_MAJIKAN = $date . $inisial . $time;

    $SQL = "INSERT INTO `majikan` (`ID_MAJIKAN`, `NAMA_MAJIKAN`, `JKEL_MAJIKAN`, `TL_MAJIKAN`, `KOTA_LAHIR_MAJIKAN`, `ALAMAT_MAJIKAN`, `TELP_MAJIKAN`, `PENDAPATAN_MAJIKAN`, `NO_KK_MAJIKAN`, `NO_KTP_MAJIKAN`, `EMAIL_MAJIKAN`, `USERNAME_MAJIKAN`, `PASSWORD_MAJIKAN`, `FOTO_KTP_MAJIKAN`, `FOTO_KK_MAJIKAN`, `FOTO_SLIP_GAJI`, `STATUS_MAJIKAN`) 
    VALUES ('$ID_MAJIKAN', '$NAMA', '$JKEL', '$TANGGAL_LAHIR', '$TEMPAT_LAHIR', '$ALAMAT', '$NO_HP', '$PENDAPATAN', '$NO_KK', '$NO_KTP', '$EMAIL', '$USERNAME', '$PASSWORD', '0', '0', '0', '0');";
    $result = mysqli_query($conn, $SQL);
    if ($result) {
        header('Location: ../login.php');
    } else {
        echo $SQL;
    }
} else if (isset($_POST['update_profil'])) {

    $linkKTP = "http://localhost/rekomendasi/proses/file/";
    $linkKK = "http://localhost/rekomendasi/proses/file/";
    $linkGAJI = "http://localhost/rekomendasi/proses/file/";
    $ekstensi_diperbolehkan    = array('png', 'jpg', 'pdf', 'jpeg');
    $namaKTP = $_FILES['scanktp']['name'];
    $x = explode('.', $namaKTP);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['scanktp']['size'];
    $file_tmp = $_FILES['scanktp']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            move_uploaded_file($file_tmp, 'file/' . $namaKTP);
            $linkKTP = $linkKTP . $namaKTP;
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }

    $ekstensi_diperbolehkan    = array('png', 'jpg', 'pdf', 'jpeg');
    $namaKK = $_FILES['scankk']['name'];
    $x = explode('.', $namaKK);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['scankk']['size'];
    $file_tmp = $_FILES['scankk']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            move_uploaded_file($file_tmp, 'file/' . $namaKK);
            $linkKK = $linkKK . $namaKK;
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }

    $ekstensi_diperbolehkan    = array('png', 'jpg', 'pdf', 'jpeg');
    $namaGAJI = $_FILES['scanslipgaji']['name'];
    $x = explode('.', $namaGAJI);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['scanslipgaji']['size'];
    $file_tmp = $_FILES['scanslipgaji']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            move_uploaded_file($file_tmp, 'file/' . $namaGAJI);
            $linkGAJI = $linkGAJI . $namaGAJI;
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }

    $ID_MAJIKAN = $_POST['id_majikan'];

    $SQL = "UPDATE `majikan` SET  `NAMA_MAJIKAN` = '$NAMA', `JKEL_MAJIKAN` = '$JKEL',
    `TL_MAJIKAN` = '$TANGGAL_LAHIR', `KOTA_LAHIR_MAJIKAN` = '$TEMPAT_LAHIR',
    `ALAMAT_MAJIKAN` = '$ALAMAT', `TELP_MAJIKAN` = '$NO_HP',
    `PENDAPATAN_MAJIKAN` = '$PENDAPATAN', `NO_KK_MAJIKAN` = '$NO_KK', `NO_KTP_MAJIKAN` = '$NO_KTP', 
    `EMAIL_MAJIKAN` = '$EMAIL', `USERNAME_MAJIKAN` = '$USERNAME',
    `PASSWORD_MAJIKAN` = '$PASSWORD',
    `FOTO_KTP_MAJIKAN` = '$linkKTP', 
    `FOTO_KK_MAJIKAN` = '$linkKK', 
    `FOTO_SLIP_GAJI` = '$linkGAJI', 
    `STATUS_MAJIKAN` = '1' WHERE `majikan`.`ID_MAJIKAN` = '$ID_MAJIKAN';";
    $result = mysqli_query($conn, $SQL);
    if ($result) {

        $sql = "select * from majikan where id_majikan='$ID_MAJIKAN';";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);
        if ($result) {
            if ($count == 1) {
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

                header('Location: ../profil_majikan.php');
            }
        }
    } else {
        echo $SQL;
    }
} else if (isset($_POST['update_profil_foto'])) {
    $linkFoto = "http://localhost/rekomendasi/proses/file/";

    $ekstensi_diperbolehkan    = array('png', 'jpg', 'pdf', 'jpeg');
    $foto = $_FILES['ubahfoto']['name'];
    $x = explode('.', $foto);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['ubahfoto']['size'];
    $file_tmp = $_FILES['ubahfoto']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            move_uploaded_file($file_tmp, 'file/' . $foto);
            $linkFoto = $linkFoto . $foto;

            $ID_MAJIKAN = $_POST['id_majikan'];

            $SQL = "UPDATE majikan SET FOTO_MAJIKAN='$linkFoto' where ID_MAJIKAN='$ID_MAJIKAN'";
            $result = mysqli_query($conn, $SQL);
            if ($result) {

                $sql = "select * from majikan where id_majikan='$ID_MAJIKAN';";
                $result = mysqli_query($conn, $sql);
                $data = mysqli_fetch_array($result);
                $count = mysqli_num_rows($result);
                if ($result) {
                    if ($count == 1) {
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

                        header('Location: ../profil_majikan.php');
                    }
                }
            } else {
                echo $SQL;
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
}
