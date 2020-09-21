<?php
include "Koneksi.php";

if (isset($_POST['insert'])) {
    $id_tes_pengetahuan = $_POST['ID_TES_PENGETAHUAN'];
    $id_prt = $_POST['ID_PRT'];
    $prt = $_POST['NAMA_PRT'];
    $tu = $_POST['PENGETAHUAN_TATA_GRAHA'];
    $mm = $_POST['PENGETAHUAN_MEMASAK'];
    $jbl = $_POST['PENGETAHUAN_JAGA_BALITA'];
    $jby = $_POST['PENGETAHUAN_JAGA_BAYI'];
    $jla = $_POST['PENGETAHUAN_JAGA_LANSIA'];
    $tt = $_POST['PENGETAHUAN_TATA_TAMAN'];
    $mkk = $_POST['PENGETAHUAN_MENGEMUDI_KENDARAAN_KELUARGA'];

    $cekAVG = $tu + $mm + $jbl + $jby + $jla + $tt + $mkk;
    $hasil = $cekAVG / 7;

    $sql = "INSERT INTO `TES_PENGETAHUAN`(`ID_TES_PENGETAHUAN`,`ID_PRT`, `NAMA_PRT`, `PENGETAHUAN_TATA_GRAHA`, `PENGETAHUAN_MEMASAK`, `PENGETAHUAN_JAGA_BALITA`, `PENGETAHUAN_JAGA_BAYI`, `PENGETAHUAN_JAGA_LANSIA`, `PENGETAHUAN_TATA_TAMAN`, `PENGETAHUAN_MENGEMUDI_KENDARAAN_KELUARGA`, `NILAI_TOTAL_PENGETAHUAN`) 
            VALUES ('','$id_prt','$prt','$tu','$mm','$jbl','$jby','$jla','$tt','$mkk','$hasil')";

    $ass = mysqli_query($conn, $sql);
    if ($ass) {
        echo ("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=../tes_pengetahuan.php\">");
    }
}
if (isset($_POST['Update'])) {
    $id_tes_pengetahuan = $_POST['ID_TES_PENGETAHUAN'];
    $id_prt = $_POST['ID_PRT'];
    $prt = $_POST['NAMA_PRT'];
    $tu = $_POST['PENGETAHUAN_TATA_GRAHA'];
    $mm = $_POST['PENGETAHUAN_MEMASAK'];
    $jbl = $_POST['PENGETAHUAN_JAGA_BALITA'];
    $jby = $_POST['PENGETAHUAN_JAGA_BAYI'];
    $jla = $_POST['PENGETAHUAN_JAGA_LANSIA'];
    $tt = $_POST['PENGETAHUAN_TATA_TAMAN'];
    $mkk = $_POST['PENGETAHUAN_MENGEMUDI_KENDARAAN_KELUARGA'];

    $cekAVG = $tu + $mm + $jbl + $jby + $jla + $tt + $mkk;
    $hasil = $cekAVG / 7;

    $sql = "UPDATE `TES_PENGETAHUAN` SET `ID_PRT`='$id_prt', `NAMA_PRT`='$prt', `PENGETAHUAN_TATA_GRAHA`='$tu', `PENGETAHUAN_MEMASAK`='$mm', `PENGETAHUAN_JAGA_BALITA`='$jbl', `PENGETAHUAN_JAGA_BAYI`='$jby', `PENGETAHUAN_JAGA_LANSIA`='$jla', `PENGETAHUAN_TATA_TAMAN`='$tt', `PENGETAHUAN_MENGEMUDI_KENDARAAN_KELUARGA`='$mkk', `NILAI_TOTAL_PENGETAHUAN`='$hasil' WHERE `ID_TES_PENGETAHUAN`='$id_tes_pengetahuan'";
    $qwr = mysqli_query($conn, $sql);
    if ($qwr) {
        echo ("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=../tes_pengetahuan.php\">");
    }
} else if (isset($_GET['ID_TES_PENGETAHUAN'])) {
    $id_tes_pengetahuan = $_GET['ID_TES_PENGETAHUAN'];
    $sql = "DELETE FROM TES_PENGETAHUAN WHERE ID_TES_PENGETAHUAN='$id_tes_pengetahuan'";
    $qwr = mysqli_query($conn, $sql);
    if ($qwr) {
        echo ("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=../tes_pengetahuan.php\">");
    }
}
