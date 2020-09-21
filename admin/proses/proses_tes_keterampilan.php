<?php
include "Koneksi.php";

if (isset($_POST['insert'])) {
    $id_tes_keterampilan = $_POST['ID_TES_KETERAMPILAN'];
    $id_prt = $_POST['ID_PRT'];
    $prt = $_POST['NAMA_PRT'];
    $tu = $_POST['KETERAMPILAN_TATA_GRAHA'];
    $mm = $_POST['KETERAMPILAN_MEMASAK'];
    $jbl = $_POST['KETERAMPILAN_JAGA_BALITA'];
    $jby = $_POST['KETERAMPILAN_JAGA_BAYI'];
    $jla = $_POST['KETERAMPILAN_JAGA_LANSIA'];
    $tt = $_POST['KETERAMPILAN_TATA_TAMAN'];
    $mkk = $_POST['KETERAMPILAN_MENGEMUDI_KENDARAAN_KELUARGA'];

    $cekAVG = $tu + $mm + $jbl + $jby + $jla + $tt + $mkk;
    $hasil = $cekAVG / 7;

    $sql = "INSERT INTO `TES_KETERAMPILAN`(`ID_TES_KETERAMPILAN`,`ID_PRT`, `NAMA_PRT`, `KETERAMPILAN_TATA_GRAHA`, `KETERAMPILAN_MEMASAK`, `KETERAMPILAN_JAGA_BALITA`, `KETERAMPILAN_JAGA_BAYI`, `KETERAMPILAN_JAGA_LANSIA`, `KETERAMPILAN_TATA_TAMAN`, `KETERAMPILAN_MENGEMUDI_KENDARAAN_KELUARGA`, `NILAI_TOTAL_KETERAMPILAN`) 
            VALUES ('','$id_prt','$prt','$tu','$mm','$jbl','$jby','$jla','$tt','$mkk','$hasil')";

    $ass = mysqli_query($conn, $sql);
    if ($ass) {
        echo ("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=../tes_keterampilan.php\">");
    }
}
if (isset($_POST['Update'])) {
    $id_tes_keterampilan = $_POST['ID_TES_KETERAMPILAN'];
    $id_prt = $_POST['ID_PRT'];
    $prt = $_POST['NAMA_PRT'];
    $tu = $_POST['KETERAMPILAN_TATA_GRAHA'];
    $mm = $_POST['KETERAMPILAN_MEMASAK'];
    $jbl = $_POST['KETERAMPILAN_JAGA_BALITA'];
    $jby = $_POST['KETERAMPILAN_JAGA_BAYI'];
    $jla = $_POST['KETERAMPILAN_JAGA_LANSIA'];
    $tt = $_POST['KETERAMPILAN_TATA_TAMAN'];
    $mkk = $_POST['KETERAMPILAN_MENGEMUDI_KENDARAAN_KELUARGA'];

    $cekAVG = $tu + $mm + $jbl + $jby + $jla + $tt + $mkk;
    $hasil = $cekAVG / 7;

    $sql = "UPDATE `TES_KETERAMPILAN` SET `ID_PRT`='$id_prt', `NAMA_PRT`='$prt', `KETERAMPILAN_TATA_GRAHA`='$tu', `KETERAMPILAN_MEMASAK`='$mm', `KETERAMPILAN_JAGA_BALITA`='$jbl', `KETERAMPILAN_JAGA_BAYI`='$jby', `KETERAMPILAN_JAGA_LANSIA`='$jla', `KETERAMPILAN_TATA_TAMAN`='$tt', `KETERAMPILAN_MENGEMUDI_KENDARAAN_KELUARGA`='$mkk', `NILAI_TOTAL_KETERAMPILAN`='$hasil' WHERE `ID_TES_KETERAMPILAN`='$id_tes_keterampilan'";
    $qwr = mysqli_query($conn, $sql);
    if ($qwr) {
        echo ("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=../tes_keterampilan.php\">");
    }
} else if (isset($_GET['ID_TES_KETERAMPILAN'])) {
    $id_tes_keterampilan = $_GET['ID_TES_KETERAMPILAN'];
    $sql = "DELETE FROM TES_KETERAMPILAN WHERE ID_TES_KETERAMPILAN='$id_tes_keterampilan'";
    $qwr = mysqli_query($conn, $sql);
    if ($qwr) {
        echo ("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=../tes_keterampilan.php\">");
    }
}
