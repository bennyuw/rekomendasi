<?php
$dataMentah = array();
$dataGAP = array();
$dataHasilPembobotan = array();
$dataAkhir = array();
$dataPermintaan = array();

$dataRandom1 = $_POST['pengalaman'];
$dataRandom2 = $_POST['keterampilan'];
$dataRandom3 = $_POST['sikapkerja'];
$dataRandom4 = $_POST['lamabekerja'];
$dataRandom5 = $_POST['sertifikatpelatihan'];
$dataRandom6 = $_POST['keahlian'];

if ($dataRandom6 == '') {
    $sql = "SELECT prt_baru.ID_PRT, prt_baru.NAMA_PRT, prt_baru.JKEL_PRT, keahlian.NAMA_KEAHLIAN, tes_pengetahuan.NILAI_TOTAL_PENGETAHUAN, tes_keterampilan.NILAI_TOTAL_KETERAMPILAN, tes_sikap.NILAI_TOTAL_SIKAP, (prt_baru.PENGALAMAN_BEKERJA + kontrak.DURASI_KONTRAK) AS 'NILAI_LAMA_BEKERJA', sertifikat_pelatihan.JUMLAH_SERTIFIKAT_PELATIHAN FROM prt_baru 
            JOIN keahlian ON prt_baru.ID_PRT = keahlian.ID_PRT 
            JOIN tes_pengetahuan ON prt_baru.ID_PRT = tes_pengetahuan.ID_PRT 
            JOIN tes_keterampilan ON prt_baru.ID_PRT = tes_keterampilan.ID_PRT 
            JOIN tes_sikap ON prt_baru.ID_PRT = tes_sikap.ID_PRT 
            JOIN kontrak ON prt_baru.ID_PRT = kontrak.ID_PRT 
            JOIN sertifikat_pelatihan ON prt_baru.ID_PRT = sertifikat_pelatihan.ID_PRT";
} else if ($dataRandom6 == 'Memasak') {
    $sql = "SELECT prt_baru.ID_PRT, prt_baru.NAMA_PRT, prt_baru.JKEL_PRT, keahlian.NAMA_KEAHLIAN , tes_pengetahuan.PENGETAHUAN_MEMASAK, tes_keterampilan.KETERAMPILAN_MEMASAK, tes_sikap.SIKAP_MEMASAK, (prt_baru.PENGALAMAN_BEKERJA + kontrak.DURASI_KONTRAK) AS 'NILAI_LAMA_BEKERJA', sertifikat_pelatihan.JUMLAH_SERTIFIKAT_PELATIHAN FROM prt_baru 
            JOIN keahlian ON prt_baru.ID_PRT = keahlian.ID_PRT 
            JOIN tes_pengetahuan ON prt_baru.ID_PRT = tes_pengetahuan.ID_PRT 
            JOIN tes_keterampilan ON prt_baru.ID_PRT = tes_keterampilan.ID_PRT 
            JOIN tes_sikap ON prt_baru.ID_PRT = tes_sikap.ID_PRT 
            JOIN kontrak ON prt_baru.ID_PRT = kontrak.ID_PRT 
            JOIN sertifikat_pelatihan ON prt_baru.ID_PRT = sertifikat_pelatihan.ID_PRT
            WHERE keahlian.NAMA_KEAHLIAN = 'Memasak'";
} else if ($dataRandom6 == 'Tata Graha') {
    $sql = "SELECT prt_baru.ID_PRT, prt_baru.NAMA_PRT, prt_baru.JKEL_PRT, keahlian.NAMA_KEAHLIAN, tes_pengetahuan.PENGETAHUAN_TATA_GRAHA, tes_keterampilan.KETERAMPILAN_TATA_GRAHA, tes_sikap.SIKAP_TATA_GRAHA, (prt_baru.PENGALAMAN_BEKERJA + kontrak.DURASI_KONTRAK) AS 'NILAI_LAMA_BEKERJA', sertifikat_pelatihan.JUMLAH_SERTIFIKAT_PELATIHAN FROM prt_baru 
            JOIN keahlian ON prt_baru.ID_PRT = keahlian.ID_PRT 
            JOIN tes_pengetahuan ON prt_baru.ID_PRT = tes_pengetahuan.ID_PRT 
            JOIN tes_keterampilan ON prt_baru.ID_PRT = tes_keterampilan.ID_PRT 
            JOIN tes_sikap ON prt_baru.ID_PRT = tes_sikap.ID_PRT 
            JOIN kontrak ON prt_baru.ID_PRT = kontrak.ID_PRT 
            JOIN sertifikat_pelatihan ON prt_baru.ID_PRT = sertifikat_pelatihan.ID_PRT
            WHERE keahlian.NAMA_KEAHLIAN = 'Tata Graha'";
} else if ($dataRandom6 == 'Penjagaan Balita') {
    $sql = "SELECT prt_baru.ID_PRT, prt_baru.NAMA_PRT, prt_baru.JKEL_PRT, keahlian.NAMA_KEAHLIAN, tes_pengetahuan.PENGETAHUAN_JAGA_BALITA, tes_keterampilan.KETERAMPILAN_JAGA_BALITA, tes_sikap.SIKAP_JAGA_BALITA, (prt_baru.PENGALAMAN_BEKERJA + kontrak.DURASI_KONTRAK) AS 'NILAI_LAMA_BEKERJA', sertifikat_pelatihan.JUMLAH_SERTIFIKAT_PELATIHAN FROM prt_baru 
            JOIN keahlian ON prt_baru.ID_PRT = keahlian.ID_PRT 
            JOIN tes_pengetahuan ON prt_baru.ID_PRT = tes_pengetahuan.ID_PRT 
            JOIN tes_keterampilan ON prt_baru.ID_PRT = tes_keterampilan.ID_PRT 
            JOIN tes_sikap ON prt_baru.ID_PRT = tes_sikap.ID_PRT 
            JOIN kontrak ON prt_baru.ID_PRT = kontrak.ID_PRT 
            JOIN sertifikat_pelatihan ON prt_baru.ID_PRT = sertifikat_pelatihan.ID_PRT
            WHERE keahlian.NAMA_KEAHLIAN = 'Penjagaan Balita'";
} else if ($dataRandom6 == 'Penjagaan Bayi') {
    $sql = "SELECT prt_baru.ID_PRT, prt_baru.NAMA_PRT, prt_baru.JKEL_PRT, keahlian.NAMA_KEAHLIAN, tes_pengetahuan.PENGETAHUAN_JAGA_BAYI, tes_keterampilan.KETERAMPILAN_JAGA_BAYI, tes_sikap.SIKAP_JAGA_BAYI, (prt_baru.PENGALAMAN_BEKERJA + kontrak.DURASI_KONTRAK) AS 'NILAI_LAMA_BEKERJA', sertifikat_pelatihan.JUMLAH_SERTIFIKAT_PELATIHAN FROM prt_baru 
            JOIN keahlian ON prt_baru.ID_PRT = keahlian.ID_PRT 
            JOIN tes_pengetahuan ON prt_baru.ID_PRT = tes_pengetahuan.ID_PRT 
            JOIN tes_keterampilan ON prt_baru.ID_PRT = tes_keterampilan.ID_PRT 
            JOIN tes_sikap ON prt_baru.ID_PRT = tes_sikap.ID_PRT 
            JOIN kontrak ON prt_baru.ID_PRT = kontrak.ID_PRT 
            JOIN sertifikat_pelatihan ON prt_baru.ID_PRT = sertifikat_pelatihan.ID_PRT
            WHERE keahlian.NAMA_KEAHLIAN = 'Penjagaan Bayi'";
} else if ($dataRandom6 == 'Penjagaan Lansia') {
    $sql = "SELECT prt_baru.ID_PRT, prt_baru.NAMA_PRT, prt_baru.JKEL_PRT, keahlian.NAMA_KEAHLIAN, tes_pengetahuan.PENGETAHUAN_JAGA_LANSIA, tes_keterampilan.KETERAMPILAN_JAGA_LANSIA, tes_sikap.SIKAP_JAGA_LANSIA, (prt_baru.PENGALAMAN_BEKERJA + kontrak.DURASI_KONTRAK) AS 'NILAI_LAMA_BEKERJA', sertifikat_pelatihan.JUMLAH_SERTIFIKAT_PELATIHAN FROM prt_baru 
            JOIN keahlian ON prt_baru.ID_PRT = keahlian.ID_PRT 
            JOIN tes_pengetahuan ON prt_baru.ID_PRT = tes_pengetahuan.ID_PRT 
            JOIN tes_keterampilan ON prt_baru.ID_PRT = tes_keterampilan.ID_PRT 
            JOIN tes_sikap ON prt_baru.ID_PRT = tes_sikap.ID_PRT 
            JOIN kontrak ON prt_baru.ID_PRT = kontrak.ID_PRT 
            JOIN sertifikat_pelatihan ON prt_baru.ID_PRT = sertifikat_pelatihan.ID_PRT
            WHERE keahlian.NAMA_KEAHLIAN = 'Penjagaan Lansia'";
} else if ($dataRandom6 == 'Tata Taman') {
    $sql = "SELECT prt_baru.ID_PRT, prt_baru.NAMA_PRT, prt_baru.JKEL_PRT, keahlian.NAMA_KEAHLIAN, tes_pengetahuan.PENGETAHUAN_TATA_TAMAN, tes_keterampilan.KETERAMPILAN_TATA_TAMAN, tes_sikap.SIKAP_TATA_TAMAN, (prt_baru.PENGALAMAN_BEKERJA + kontrak.DURASI_KONTRAK) AS 'NILAI_LAMA_BEKERJA', sertifikat_pelatihan.JUMLAH_SERTIFIKAT_PELATIHAN FROM prt_baru 
            JOIN keahlian ON prt_baru.ID_PRT = keahlian.ID_PRT 
            JOIN tes_pengetahuan ON prt_baru.ID_PRT = tes_pengetahuan.ID_PRT 
            JOIN tes_keterampilan ON prt_baru.ID_PRT = tes_keterampilan.ID_PRT 
            JOIN tes_sikap ON prt_baru.ID_PRT = tes_sikap.ID_PRT 
            JOIN kontrak ON prt_baru.ID_PRT = kontrak.ID_PRT 
            JOIN sertifikat_pelatihan ON prt_baru.ID_PRT = sertifikat_pelatihan.ID_PRT
            WHERE keahlian.NAMA_KEAHLIAN = 'Tata Taman'";
} else if ($dataRandom6 == 'Mengemudi Kendaraan Keluarga') {
    $sql = "SELECT prt_baru.ID_PRT, prt_baru.NAMA_PRT, prt_baru.JKEL_PRT, keahlian.NAMA_KEAHLIAN, tes_pengetahuan.PENGETAHUAN_MENGEMUDI_KENDARAAN_KELUARGA, tes_keterampilan.KETERAMPILAN_MENGEMUDI_KENDARAAN_KELUARGA, tes_sikap.SIKAP_MENGEMUDI_KENDARAAN_KELUARGA, (prt_baru.PENGALAMAN_BEKERJA + kontrak.DURASI_KONTRAK) AS 'NILAI_LAMA_BEKERJA', sertifikat_pelatihan.JUMLAH_SERTIFIKAT_PELATIHAN FROM prt_baru 
            JOIN keahlian ON prt_baru.ID_PRT = keahlian.ID_PRT 
            JOIN tes_pengetahuan ON prt_baru.ID_PRT = tes_pengetahuan.ID_PRT 
            JOIN tes_keterampilan ON prt_baru.ID_PRT = tes_keterampilan.ID_PRT 
            JOIN tes_sikap ON prt_baru.ID_PRT = tes_sikap.ID_PRT 
            JOIN kontrak ON prt_baru.ID_PRT = kontrak.ID_PRT 
            JOIN sertifikat_pelatihan ON prt_baru.ID_PRT = sertifikat_pelatihan.ID_PRT
            WHERE keahlian.NAMA_KEAHLIAN = 'Mengemudi Kendaraan Keluarga'";
}

$resultSQL = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($resultSQL)) {


    if ($dataRandom6 == '') {
        if ($row['NILAI_TOTAL_PENGETAHUAN'] <= 20) {
            $nilaiP = 1;
        } else if ($row['NILAI_TOTAL_PENGETAHUAN'] <= 40) {
            $nilaiP = 2;
        } else if ($row['NILAI_TOTAL_PENGETAHUAN'] <= 60) {
            $nilaiP = 3;
        } else if ($row['NILAI_TOTAL_PENGETAHUAN'] <= 80) {
            $nilaiP = 4;
        } else if ($row['NILAI_TOTAL_PENGETAHUAN'] <= 100) {
            $nilaiP = 5;
        }

        if ($row['NILAI_TOTAL_KETERAMPILAN'] <= 20) {
            $nilaiK = 1;
        } else if ($row['NILAI_TOTAL_KETERAMPILAN'] <= 40) {
            $nilaiK = 2;
        } else if ($row['NILAI_TOTAL_KETERAMPILAN'] <= 60) {
            $nilaiK = 3;
        } else if ($row['NILAI_TOTAL_KETERAMPILAN'] <= 80) {
            $nilaiK = 4;
        } else if ($row['NILAI_TOTAL_KETERAMPILAN'] <= 100) {
            $nilaiK = 5;
        }

        if ($row['NILAI_TOTAL_SIKAP'] <= 20) {
            $nilaiS = 1;
        } else if ($row['NILAI_TOTAL_SIKAP'] <= 40) {
            $nilaiS = 2;
        } else if ($row['NILAI_TOTAL_SIKAP'] <= 60) {
            $nilaiS = 3;
        } else if ($row['NILAI_TOTAL_SIKAP'] <= 80) {
            $nilaiS = 4;
        } else if ($row['NILAI_TOTAL_SIKAP'] <= 100) {
            $nilaiS = 5;
        }
    } else if ($dataRandom6 == 'Memasak') {
        if ($row['PENGETAHUAN_MEMASAK'] <= 20) {
            $nilaiP = 1;
        } else if ($row['PENGETAHUAN_MEMASAK'] <= 40) {
            $nilaiP = 2;
        } else if ($row['PENGETAHUAN_MEMASAK'] <= 60) {
            $nilaiP = 3;
        } else if ($row['PENGETAHUAN_MEMASAK'] <= 80) {
            $nilaiP = 4;
        } else if ($row['PENGETAHUAN_MEMASAK'] <= 100) {
            $nilaiP = 5;
        }

        if ($row['KETERAMPILAN_MEMASAK'] <= 20) {
            $nilaiK = 1;
        } else if ($row['KETERAMPILAN_MEMASAK'] <= 40) {
            $nilaiK = 2;
        } else if ($row['KETERAMPILAN_MEMASAK'] <= 60) {
            $nilaiK = 3;
        } else if ($row['KETERAMPILAN_MEMASAK'] <= 80) {
            $nilaiK = 4;
        } else if ($row['KETERAMPILAN_MEMASAK'] <= 100) {
            $nilaiK = 5;
        }

        if ($row['SIKAP_MEMASAK'] <= 20) {
            $nilaiS = 1;
        } else if ($row['SIKAP_MEMASAK'] <= 40) {
            $nilaiS = 2;
        } else if ($row['SIKAP_MEMASAK'] <= 60) {
            $nilaiS = 3;
        } else if ($row['SIKAP_MEMASAK'] <= 80) {
            $nilaiS = 4;
        } else if ($row['SIKAP_MEMASAK'] <= 100) {
            $nilaiS = 5;
        }
    } else if ($dataRandom6 == 'Tata Graha') {
        if ($row['PENGETAHUAN_TATA_GRAHA'] <= 20) {
            $nilaiP = 1;
        } else if ($row['PENGETAHUAN_TATA_GRAHA'] <= 40) {
            $nilaiP = 2;
        } else if ($row['PENGETAHUAN_TATA_GRAHA'] <= 60) {
            $nilaiP = 3;
        } else if ($row['PENGETAHUAN_TATA_GRAHA'] <= 80) {
            $nilaiP = 4;
        } else if ($row['PENGETAHUAN_TATA_GRAHA'] <= 100) {
            $nilaiP = 5;
        }

        if ($row['KETERAMPILAN_TATA_GRAHA'] <= 20) {
            $nilaiK = 1;
        } else if ($row['KETERAMPILAN_TATA_GRAHA'] <= 40) {
            $nilaiK = 2;
        } else if ($row['KETERAMPILAN_TATA_GRAHA'] <= 60) {
            $nilaiK = 3;
        } else if ($row['KETERAMPILAN_TATA_GRAHA'] <= 80) {
            $nilaiK = 4;
        } else if ($row['KETERAMPILAN_TATA_GRAHA'] <= 100) {
            $nilaiK = 5;
        }

        if ($row['SIKAP_TATA_GRAHA'] <= 20) {
            $nilaiS = 1;
        } else if ($row['SIKAP_TATA_GRAHA'] <= 40) {
            $nilaiS = 2;
        } else if ($row['SIKAP_TATA_GRAHA'] <= 60) {
            $nilaiS = 3;
        } else if ($row['SIKAP_TATA_GRAHA'] <= 80) {
            $nilaiS = 4;
        } else if ($row['SIKAP_TATA_GRAHA'] <= 100) {
            $nilaiS = 5;
        }
    } else if ($dataRandom6 == 'Penjagaan Balita') {
        if ($row['PENGETAHUAN_JAGA_BALITA'] <= 20) {
            $nilaiP = 1;
        } else if ($row['PENGETAHUAN_JAGA_BALITA'] <= 40) {
            $nilaiP = 2;
        } else if ($row['PENGETAHUAN_JAGA_BALITA'] <= 60) {
            $nilaiP = 3;
        } else if ($row['PENGETAHUAN_JAGA_BALITA'] <= 80) {
            $nilaiP = 4;
        } else if ($row['PENGETAHUAN_JAGA_BALITA'] <= 100) {
            $nilaiP = 5;
        }

        if ($row['KETERAMPILAN_JAGA_BALITA'] <= 20) {
            $nilaiK = 1;
        } else if ($row['KETERAMPILAN_JAGA_BALITA'] <= 40) {
            $nilaiK = 2;
        } else if ($row['KETERAMPILAN_JAGA_BALITA'] <= 60) {
            $nilaiK = 3;
        } else if ($row['KETERAMPILAN_JAGA_BALITA'] <= 80) {
            $nilaiK = 4;
        } else if ($row['KETERAMPILAN_JAGA_BALITA'] <= 100) {
            $nilaiK = 5;
        }

        if ($row['SIKAP_JAGA_BALITA'] <= 20) {
            $nilaiS = 1;
        } else if ($row['SIKAP_JAGA_BALITA'] <= 40) {
            $nilaiS = 2;
        } else if ($row['SIKAP_JAGA_BALITA'] <= 60) {
            $nilaiS = 3;
        } else if ($row['SIKAP_JAGA_BALITA'] <= 80) {
            $nilaiS = 4;
        } else if ($row['SIKAP_JAGA_BALITA'] <= 100) {
            $nilaiS = 5;
        }
    } else if ($dataRandom6 == 'Penjagaan Bayi') {
        if ($row['PENGETAHUAN_JAGA_BAYI'] <= 20) {
            $nilaiP = 1;
        } else if ($row['PENGETAHUAN_JAGA_BAYI'] <= 40) {
            $nilaiP = 2;
        } else if ($row['PENGETAHUAN_JAGA_BAYI'] <= 60) {
            $nilaiP = 3;
        } else if ($row['PENGETAHUAN_JAGA_BAYI'] <= 80) {
            $nilaiP = 4;
        } else if ($row['PENGETAHUAN_JAGA_BAYI'] <= 100) {
            $nilaiP = 5;
        }

        if ($row['KETERAMPILAN_JAGA_BAYI'] <= 20) {
            $nilaiK = 1;
        } else if ($row['KETERAMPILAN_JAGA_BAYI'] <= 40) {
            $nilaiK = 2;
        } else if ($row['KETERAMPILAN_JAGA_BAYI'] <= 60) {
            $nilaiK = 3;
        } else if ($row['KETERAMPILAN_JAGA_BAYI'] <= 80) {
            $nilaiK = 4;
        } else if ($row['KETERAMPILAN_JAGA_BAYI'] <= 100) {
            $nilaiK = 5;
        }

        if ($row['SIKAP_JAGA_BAYI'] <= 20) {
            $nilaiS = 1;
        } else if ($row['SIKAP_JAGA_BAYI'] <= 40) {
            $nilaiS = 2;
        } else if ($row['SIKAP_JAGA_BAYI'] <= 60) {
            $nilaiS = 3;
        } else if ($row['SIKAP_JAGA_BAYI'] <= 80) {
            $nilaiS = 4;
        } else if ($row['SIKAP_JAGA_BAYI'] <= 100) {
            $nilaiS = 5;
        }
    } else if ($dataRandom6 == 'Penjagaan Lansia') {
        if ($row['PENGETAHUAN_JAGA_LANSIA'] <= 20) {
            $nilaiP = 1;
        } else if ($row['PENGETAHUAN_JAGA_LANSIA'] <= 40) {
            $nilaiP = 2;
        } else if ($row['PENGETAHUAN_JAGA_LANSIA'] <= 60) {
            $nilaiP = 3;
        } else if ($row['PENGETAHUAN_JAGA_LANSIA'] <= 80) {
            $nilaiP = 4;
        } else if ($row['PENGETAHUAN_JAGA_LANSIA'] <= 100) {
            $nilaiP = 5;
        }

        if ($row['KETERAMPILAN_JAGA_LANSIA'] <= 20) {
            $nilaiK = 1;
        } else if ($row['KETERAMPILAN_JAGA_LANSIA'] <= 40) {
            $nilaiK = 2;
        } else if ($row['KETERAMPILAN_JAGA_LANSIA'] <= 60) {
            $nilaiK = 3;
        } else if ($row['KETERAMPILAN_JAGA_LANSIA'] <= 80) {
            $nilaiK = 4;
        } else if ($row['KETERAMPILAN_JAGA_LANSIA'] <= 100) {
            $nilaiK = 5;
        }

        if ($row['SIKAP_JAGA_LANSIA'] <= 20) {
            $nilaiS = 1;
        } else if ($row['SIKAP_JAGA_LANSIA'] <= 40) {
            $nilaiS = 2;
        } else if ($row['SIKAP_JAGA_LANSIA'] <= 60) {
            $nilaiS = 3;
        } else if ($row['SIKAP_JAGA_LANSIA'] <= 80) {
            $nilaiS = 4;
        } else if ($row['SIKAP_JAGA_LANSIA'] <= 100) {
            $nilaiS = 5;
        }
    } else if ($dataRandom6 == 'Tata Taman') {
        if ($row['PENGETAHUAN_TATA_TAMAN'] <= 20) {
            $nilaiP = 1;
        } else if ($row['PENGETAHUAN_TATA_TAMAN'] <= 40) {
            $nilaiP = 2;
        } else if ($row['PENGETAHUAN_TATA_TAMAN'] <= 60) {
            $nilaiP = 3;
        } else if ($row['PENGETAHUAN_TATA_TAMAN'] <= 80) {
            $nilaiP = 4;
        } else if ($row['PENGETAHUAN_TATA_TAMAN'] <= 100) {
            $nilaiP = 5;
        }

        if ($row['KETERAMPILAN_TATA_TAMAN'] <= 20) {
            $nilaiK = 1;
        } else if ($row['KETERAMPILAN_TATA_TAMAN'] <= 40) {
            $nilaiK = 2;
        } else if ($row['KETERAMPILAN_TATA_TAMAN'] <= 60) {
            $nilaiK = 3;
        } else if ($row['KETERAMPILAN_TATA_TAMAN'] <= 80) {
            $nilaiK = 4;
        } else if ($row['KETERAMPILAN_TATA_TAMAN'] <= 100) {
            $nilaiK = 5;
        }

        if ($row['SIKAP_TATA_TAMAN'] <= 20) {
            $nilaiS = 1;
        } else if ($row['SIKAP_TATA_TAMAN'] <= 40) {
            $nilaiS = 2;
        } else if ($row['SIKAP_TATA_TAMAN'] <= 60) {
            $nilaiS = 3;
        } else if ($row['SIKAP_TATA_TAMAN'] <= 80) {
            $nilaiS = 4;
        } else if ($row['SIKAP_TATA_TAMAN'] <= 100) {
            $nilaiS = 5;
        }
    } else if ($dataRandom6 == 'Mengemudi Kendaraan Keluarga') {
        if ($row['PENGETAHUAN_MENGEMUDI_KENDARAAN_KELUARGA'] <= 20) {
            $nilaiP = 1;
        } else if ($row['PENGETAHUAN_MENGEMUDI_KENDARAAN_KELUARGA'] <= 40) {
            $nilaiP = 2;
        } else if ($row['PENGETAHUAN_MENGEMUDI_KENDARAAN_KELUARGA'] <= 60) {
            $nilaiP = 3;
        } else if ($row['PENGETAHUAN_MENGEMUDI_KENDARAAN_KELUARGA'] <= 80) {
            $nilaiP = 4;
        } else if ($row['PENGETAHUAN_MENGEMUDI_KENDARAAN_KELUARGA'] <= 100) {
            $nilaiP = 5;
        }

        if ($row['KETERAMPILAN_MENGEMUDI_KENDARAAN_KELUARGA'] <= 20) {
            $nilaiK = 1;
        } else if ($row['KETERAMPILAN_MENGEMUDI_KENDARAAN_KELUARGA'] <= 40) {
            $nilaiK = 2;
        } else if ($row['KETERAMPILAN_MENGEMUDI_KENDARAAN_KELUARGA'] <= 60) {
            $nilaiK = 3;
        } else if ($row['KETERAMPILAN_MENGEMUDI_KENDARAAN_KELUARGA'] <= 80) {
            $nilaiK = 4;
        } else if ($row['KETERAMPILAN_MENGEMUDI_KENDARAAN_KELUARGA'] <= 100) {
            $nilaiK = 5;
        }

        if ($row['SIKAP_MENGEMUDI_KENDARAAN_KELUARGA'] <= 20) {
            $nilaiS = 1;
        } else if ($row['SIKAP_MENGEMUDI_KENDARAAN_KELUARGA'] <= 40) {
            $nilaiS = 2;
        } else if ($row['SIKAP_MENGEMUDI_KENDARAAN_KELUARGA'] <= 60) {
            $nilaiS = 3;
        } else if ($row['SIKAP_MENGEMUDI_KENDARAAN_KELUARGA'] <= 80) {
            $nilaiS = 4;
        } else if ($row['SIKAP_MENGEMUDI_KENDARAAN_KELUARGA'] <= 100) {
            $nilaiS = 5;
        }
    }

    array_push($dataMentah, array('id' => $row['ID_PRT'], 'Nama PRT' => $row['NAMA_PRT'], 'Jkel PRT' => $row['JKEL_PRT'], 'Keahlian PRT' => $row['NAMA_KEAHLIAN'],  'k1' => $nilaiP, 'k2' => $nilaiK, 'k3' => $nilaiS, 'p1' => $row['NILAI_LAMA_BEKERJA'], 'p2' => $row['JUMLAH_SERTIFIKAT_PELATIHAN']));
}

foreach ($dataMentah as $dataMentahss) {
    $k1 = $dataRandom1;
    $k2 = $dataRandom2;
    $k3 = $dataRandom3;
    $p1 = $dataRandom4;
    $p2 = $dataRandom5;

    $Hk1 = $dataMentahss['k1'];
    $Hk2 = $dataMentahss['k2'];
    $Hk3 = $dataMentahss['k3'];
    $Hp1 = $dataMentahss['p1'];
    $Hp2 = $dataMentahss['p2'];

    $Hk1 = $Hk1 - $k1;
    $Hk2 = $Hk2 - $k2;
    $Hk3 = $Hk3 - $k3;
    $Hp1 = $Hp1 - $p1;
    $Hp2 = $Hp2 - $p2;

    array_push($dataGAP, array('id' => $dataMentahss['id'], 'Nama PRT' => $dataMentahss['Nama PRT'], 'Jkel PRT' => $dataMentahss['Jkel PRT'], 'Keahlian PRT' => $dataMentahss['Keahlian PRT'],  'k1' => $Hk1, 'k2' => $Hk2, 'k3' => $Hk3, 'p1' => $Hp1, 'p2' => $Hp2));
}
foreach ($dataGAP as $dataGAPs) {

    $Pk1 = $dataGAPs['k1'];
    $Pk2 = $dataGAPs['k2'];
    $Pk3 = $dataGAPs['k3'];
    $Pp1 = $dataGAPs['p1'];
    $Pp2 = $dataGAPs['p2'];

    switch ($Pk1) {
        case 0:
            $Pk1 = 5;
            break;
        case 1:
            $Pk1 = 4.5;
            break;
        case -1:
            $Pk1 = 4;
            break;
        case 2:
            $Pk1 = 3.5;
            break;
        case -2:
            $Pk1 = 3;
            break;
        case 3:
            $Pk1 = 2.5;
            break;
        case -3:
            $Pk1 = 2;
            break;
        case 4:
            $Pk1 = 1.5;
            break;
        case -4:
            $Pk1 = 1;
            break;
    }
    switch ($Pk2) {
        case 0:
            $Pk2 = 5;
            break;
        case 1:
            $Pk2 = 4.5;
            break;
        case -1:
            $Pk2 = 4;
            break;
        case 2:
            $Pk2 = 3.5;
            break;
        case -2:
            $Pk2 = 3;
            break;
        case 3:
            $Pk2 = 2.5;
            break;
        case -3:
            $Pk2 = 2;
            break;
        case 4:
            $Pk2 = 1.5;
            break;
        case -4:
            $Pk2 = 1;
            break;
    }
    switch ($Pk3) {
        case 0:
            $Pk3 = 5;
            break;
        case 1:
            $Pk3 = 4.5;
            break;
        case -1:
            $Pk3 = 4;
            break;
        case 2:
            $Pk3 = 3.5;
            break;
        case -2:
            $Pk3 = 3;
            break;
        case 3:
            $Pk3 = 2.5;
            break;
        case -3:
            $Pk3 = 2;
            break;
        case 4:
            $Pk3 = 1.5;
            break;
        case -4:
            $Pk3 = 1;
            break;
    }
    switch ($Pp1) {
        case 0:
            $Pp1 = 5;
            break;
        case 1:
            $Pp1 = 4.5;
            break;
        case -1:
            $Pp1 = 4;
            break;
        case 2:
            $Pp1 = 3.5;
            break;
        case -2:
            $Pp1 = 3;
            break;
        case 3:
            $Pp1 = 2.5;
            break;
        case -3:
            $Pp1 = 2;
            break;
        case 4:
            $Pp1 = 1.5;
            break;
        case -4:
            $Pp1 = 1;
            break;
    }
    switch ($Pp2) {
        case 0:
            $Pp2 = 5;
            break;
        case 1:
            $Pp2 = 4.5;
            break;
        case -1:
            $Pp2 = 4;
            break;
        case 2:
            $Pp2 = 3.5;
            break;
        case -2:
            $Pp2 = 3;
            break;
        case 3:
            $Pp2 = 2.5;
            break;
        case -3:
            $Pp2 = 2;
            break;
        case 4:
            $Pp2 = 1.5;
            break;
        case -4:
            $Pp2 = 1;
            break;
    }

    array_push($dataHasilPembobotan, array('id' => $dataGAPs['id'], 'Nama PRT' => $dataGAPs['Nama PRT'], 'Jkel PRT' => $dataGAPs['Jkel PRT'], 'Keahlian PRT' => $dataGAPs['Keahlian PRT'], 'k1' => $Pk1, 'k2' => $Pk2, 'k3' => $Pk3, 'p1' => $Pp1, 'p2' => $Pp2));
}

foreach ($dataHasilPembobotan as $dataHasilPembobotans) {

    $NK = 0;
    $NP = 0;
    $NA = 0;

    $CK1 = ($dataHasilPembobotans['k1'] + $dataHasilPembobotans['k2']) / 2;
    $SK1 = $dataHasilPembobotans['k3'] / 1;

    $CP1 = $dataHasilPembobotans['p1'] / 1;
    $SP1 = $dataHasilPembobotans['p2'] / 1;

    $NK = ($CK1 * 0.6) + ($SK1 * 0.4);
    $NP = ($CP1 * 0.6) + ($SP1 * 0.4);

    $NA = ($NK * 0.65) + ($NP * 0.35);

    array_push($dataAkhir, array('id' => $dataHasilPembobotans['id'], 'Nama PRT' => $dataHasilPembobotans['Nama PRT'], 'Jkel PRT' => $dataHasilPembobotans['Jkel PRT'], 'Keahlian PRT' => $dataHasilPembobotans['Keahlian PRT'], 'NK' => $NK, 'NP' => $NP, 'NA' => $NA));
}



$NA  = array_column($dataAkhir, 'NA');
$NP = array_column($dataAkhir, 'NP');
$NK = array_column($dataAkhir, 'NK');
$nama = array_column($dataAkhir, 'Nama PRT');
$jkel = array_column($dataAkhir, 'Jkel PRT');
$keahlian = array_column($dataAkhir, 'Keahlian PRT');
$id = array_column($dataAkhir, 'id');

// Sort the data with volume descending, edition ascending
// Add $data as the last parameter, to sort by the common key
array_multisort($NA, SORT_DESC, $nama, SORT_ASC, $dataAkhir);
