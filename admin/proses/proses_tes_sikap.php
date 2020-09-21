<?php
include "Koneksi.php";

if (isset($_POST['insert'])) {
    $id_tes_sikap = $_POST['ID_TES_SIKAP'];
    $id_prt = $_POST['ID_PRT'];
    $prt = $_POST['NAMA_PRT'];
    $tu = $_POST['SIKAP_TATA_GRAHA'];
    $mm = $_POST['SIKAP_MEMASAK'];
    $jbl = $_POST['SIKAP_JAGA_BALITA'];
    $jby = $_POST['SIKAP_JAGA_BAYI'];
    $jla = $_POST['SIKAP_JAGA_LANSIA'];
    $tt = $_POST['SIKAP_TATA_TAMAN'];
    $mkk = $_POST['SIKAP_MENGEMUDI_KENDARAAN_KELUARGA'];

    $cekAVG = $tu + $mm + $jbl + $jby + $jla + $tt + $mkk;
    $hasil = $cekAVG / 7;

    $sql = "INSERT INTO `TES_SIKAP`(`ID_TES_SIKAP`,`ID_PRT`, `NAMA_PRT`, `SIKAP_TATA_GRAHA`, `SIKAP_MEMASAK`, `SIKAP_JAGA_BALITA`, `SIKAP_JAGA_BAYI`, `SIKAP_JAGA_LANSIA`, `SIKAP_TATA_TAMAN`, `SIKAP_MENGEMUDI_KENDARAAN_KELUARGA`, `NILAI_TOTAL_SIKAP`) 
            VALUES ('','$id_prt','$prt','$tu','$mm','$jbl','$jby','$jla','$tt','$mkk','$hasil')";

    $ass = mysqli_query($conn, $sql);
    if ($ass) {
        echo ("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=../tes_sikap.php\">");
    }
}
if (isset($_POST['Update'])) {
    $id_tes_sikap = $_POST['ID_TES_SIKAP'];
    $id_prt = $_POST['ID_PRT'];
    $prt = $_POST['NAMA_PRT'];
    $tu = $_POST['SIKAP_TATA_GRAHA'];
    $mm = $_POST['SIKAP_MEMASAK'];
    $jbl = $_POST['SIKAP_JAGA_BALITA'];
    $jby = $_POST['SIKAP_JAGA_BAYI'];
    $jla = $_POST['SIKAP_JAGA_LANSIA'];
    $tt = $_POST['SIKAP_TATA_TAMAN'];
    $mkk = $_POST['SIKAP_MENGEMUDI_KENDARAAN_KELUARGA'];

    $cekAVG = $tu + $mm + $jbl + $jby + $jla + $tt + $mkk;
    $hasil = $cekAVG / 7;

    $sql = "UPDATE `TES_SIKAP` SET `ID_PRT`='$id_prt', `NAMA_PRT`='$prt', `SIKAP_TATA_GRAHA`='$tu', `SIKAP_MEMASAK`='$mm', `SIKAP_JAGA_BALITA`='$jbl', `SIKAP_JAGA_BAYI`='$jby', `SIKAP_JAGA_LANSIA`='$jla', `SIKAP_TATA_TAMAN`='$tt', `SIKAP_MENGEMUDI_KENDARAAN_KELUARGA`='$mkk', `NILAI_TOTAL_SIKAP`='$hasil' WHERE `ID_TES_SIKAP`='$id_tes_sikap'";
    $qwr = mysqli_query($conn, $sql);
    if ($qwr) {
        echo ("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=../tes_sikap.php\">");
    }
} else if (isset($_GET['ID_TES_SIKAP'])) {
    $id_tes_sikap = $_GET['ID_TES_SIKAP'];
    $sql = "DELETE FROM TES_SIKAP WHERE ID_TES_SIKAP='$id_tes_sikap'";
    $qwr = mysqli_query($conn, $sql);
    if ($qwr) {
        echo ("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=../tes_sikap.php\">");
    }
}
