<?php
session_start();
include 'proses/koneksi.php';
if (!$_SESSION['id_user'] == "") {  ?>

    <!doctype html>
    <!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
    <!--[if gt IE 9]><!-->
    <html lang="en" class="no-focus">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>ADMIN - PROFIL AKTUAL</title>

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/micon-500x500.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/micon-500x500.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/micon-500x500.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.min.css">

        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>

    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Codebase() -> uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
            <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
            <?php include 'sidebar.php' ?>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase"> <?php echo $_SESSION['nama']; ?> </a> <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item" href="profil_majikan.php">
                                    <i class="si si-user mr-5"></i> Profil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="proses/proses_logout.php">
                                    <i class="si si-logout mr-5"></i> Keluar
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">

                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Profil Aktual PRT Umum</h3>
                        </div>
                        <div class="table-responsive">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Nama</th>
                                        <th class="d-none d-sm-table-cell">Nilai Pengetahuan</th>
                                        <th class="d-none d-sm-table-cell">Nilai Keterampilan</th>
                                        <th class="d-none d-sm-table-cell">Nilai Sikap Kerja</th>
                                        <th class="d-none d-sm-table-cell">Nilai Lama Bekerja</th>
                                        <th class="d-none d-sm-table-cell">Nilai Sertifikat/Pelatihan</th>
                                        <!-- <th class="text-center">AKSI</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $data = mysqli_query($conn, "SELECT prt_baru.ID_PRT, prt_baru.NAMA_PRT, prt_baru.JKEL_PRT, keahlian.NAMA_KEAHLIAN, tes_pengetahuan.NILAI_TOTAL_PENGETAHUAN, tes_keterampilan.NILAI_TOTAL_KETERAMPILAN, tes_sikap.NILAI_TOTAL_SIKAP, (prt_baru.PENGALAMAN_BEKERJA + kontrak.DURASI_KONTRAK) AS 'NILAI_LAMA_BEKERJA', sertifikat_pelatihan.JUMLAH_SERTIFIKAT_PELATIHAN FROM prt_baru 
                                    JOIN keahlian ON prt_baru.ID_PRT = keahlian.ID_PRT 
                                    JOIN tes_pengetahuan ON prt_baru.ID_PRT = tes_pengetahuan.ID_PRT 
                                    JOIN tes_keterampilan ON prt_baru.ID_PRT = tes_keterampilan.ID_PRT 
                                    JOIN tes_sikap ON prt_baru.ID_PRT = tes_sikap.ID_PRT 
                                    JOIN kontrak ON prt_baru.ID_PRT = kontrak.ID_PRT 
                                    JOIN sertifikat_pelatihan ON prt_baru.ID_PRT = sertifikat_pelatihan.ID_PRT");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>

                                        <!-- <form action="proses/proses_profil.php" method="POST"> -->
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?></td>
                                            <td><?php echo $d['NAMA_PRT']; ?></td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['NILAI_TOTAL_PENGETAHUAN'] <= 20) {
                                                    echo 1; ?>
                                                    <input name="nilai_k1" hidden value="1">
                                                <?php
                                                } else if ($d['NILAI_TOTAL_PENGETAHUAN'] <= 40) {
                                                    echo 2; ?>
                                                    <input name="nilai_k1" hidden value="2">
                                                <?php
                                                } else if ($d['NILAI_TOTAL_PENGETAHUAN'] <= 60) {
                                                    echo 3; ?>
                                                    <input name="nilai_k1" hidden value="3">
                                                <?php
                                                } else if ($d['NILAI_TOTAL_PENGETAHUAN'] <= 80) {
                                                    echo 4; ?>
                                                    <input name="nilai_k1" hidden value="4">
                                                <?php
                                                } else if ($d['NILAI_TOTAL_PENGETAHUAN'] <= 100) {
                                                    echo 5; ?>
                                                    <input name="nilai_k1" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['NILAI_TOTAL_KETERAMPILAN'] <= 20) {
                                                    echo 1; ?>
                                                    <input name="nilai_k2" hidden value="1">
                                                <?php
                                                } else if ($d['NILAI_TOTAL_KETERAMPILAN'] <= 40) {
                                                    echo 2; ?>
                                                    <input name="nilai_k2" hidden value="2">
                                                <?php
                                                } else if ($d['NILAI_TOTAL_KETERAMPILAN'] <= 60) {
                                                    echo 3; ?>
                                                    <input name="nilai_k2" hidden value="3">
                                                <?php
                                                } else if ($d['NILAI_TOTAL_KETERAMPILAN'] <= 80) {
                                                    echo 4; ?>
                                                    <input name="nilai_k2" hidden value="4">
                                                <?php
                                                } else if ($d['NILAI_TOTAL_KETERAMPILAN'] <= 100) {
                                                    echo 5; ?>
                                                    <input name="nilai_k2" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['NILAI_TOTAL_SIKAP'] <= 20) {
                                                    echo 1; ?>
                                                    <input name="nilai_k3" hidden value="1">
                                                <?php
                                                } else if ($d['NILAI_TOTAL_SIKAP'] <= 40) {
                                                    echo 2; ?>
                                                    <input name="nilai_k3" hidden value="2">
                                                <?php
                                                } else if ($d['NILAI_TOTAL_SIKAP'] <= 60) {
                                                    echo 3; ?>
                                                    <input name="nilai_k3" hidden value="3">
                                                <?php
                                                } else if ($d['NILAI_TOTAL_SIKAP'] <= 80) {
                                                    echo 4; ?>
                                                    <input name="nilai_k3" hidden value="4">
                                                <?php
                                                } else if ($d['NILAI_TOTAL_SIKAP'] <= 100) {
                                                    echo 5; ?>
                                                    <input name="nilai_k3" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['NILAI_LAMA_BEKERJA'] == 1) {
                                                    echo 1; ?>
                                                    <input name="nilai_p1" hidden value="1">
                                                <?php
                                                } else if ($d['NILAI_LAMA_BEKERJA'] == 2) {
                                                    echo 2; ?>
                                                    <input name="nilai_p1" hidden value="2">
                                                <?php
                                                } else if ($d['NILAI_LAMA_BEKERJA'] == 3) {
                                                    echo 3; ?>
                                                    <input name="nilai_p1" hidden value="3">
                                                <?php
                                                } else if ($d['NILAI_LAMA_BEKERJA'] == 4) {
                                                    echo 4; ?>
                                                    <input name="nilai_p1" hidden value="4">
                                                <?php
                                                } else if ($d['NILAI_LAMA_BEKERJA'] == 5) {
                                                    echo 5; ?>
                                                    <input name="nilai_p1" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] == 1) {
                                                    echo 1; ?>
                                                    <input name="nilai_p2" hidden value="1">
                                                <?php
                                                } else if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] == 2) {
                                                    echo 2; ?>
                                                    <input name="nilai_p2" hidden value="2">
                                                <?php
                                                } else if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] == 3) {
                                                    echo 3; ?>
                                                    <input name="nilai_p2" hidden value="3">
                                                <?php
                                                } else if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] == 4) {
                                                    echo 4; ?>
                                                    <input name="nilai_p2" hidden value="4">
                                                <?php
                                                } else if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] >= 5) {
                                                    echo 5; ?>
                                                    <input name="nilai_p2" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <!-- <td class="text-center"><button type="submit" class="btn btn-success">Simpan</button></td> -->
                                        </tr>
                                        <!-- </form> -->
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->

                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Profil Aktual PRT Tata Graha</h3>
                        </div>
                        <div class="table-responsive">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Nama</th>
                                        <th class="d-none d-sm-table-cell">Nilai Pengetahuan</th>
                                        <th class="d-none d-sm-table-cell">Nilai Keterampilan</th>
                                        <th class="d-none d-sm-table-cell">Nilai Sikap Kerja</th>
                                        <th class="d-none d-sm-table-cell">Nilai Lama Bekerja</th>
                                        <th class="d-none d-sm-table-cell">Nilai Sertifikat/Pelatihan</th>
                                        <!-- <th class="text-center">AKSI</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $data = mysqli_query($conn, "SELECT prt_baru.ID_PRT, prt_baru.NAMA_PRT, prt_baru.JKEL_PRT, keahlian.NAMA_KEAHLIAN , tes_pengetahuan.PENGETAHUAN_TATA_GRAHA, tes_keterampilan.KETERAMPILAN_TATA_GRAHA, tes_sikap.SIKAP_TATA_GRAHA, (prt_baru.PENGALAMAN_BEKERJA + kontrak.DURASI_KONTRAK) AS 'NILAI_LAMA_BEKERJA', sertifikat_pelatihan.JUMLAH_SERTIFIKAT_PELATIHAN FROM prt_baru 
                                    JOIN keahlian ON prt_baru.ID_PRT = keahlian.ID_PRT 
                                    JOIN tes_pengetahuan ON prt_baru.ID_PRT = tes_pengetahuan.ID_PRT 
                                    JOIN tes_keterampilan ON prt_baru.ID_PRT = tes_keterampilan.ID_PRT 
                                    JOIN tes_sikap ON prt_baru.ID_PRT = tes_sikap.ID_PRT 
                                    JOIN kontrak ON prt_baru.ID_PRT = kontrak.ID_PRT 
                                    JOIN sertifikat_pelatihan ON prt_baru.ID_PRT = sertifikat_pelatihan.ID_PRT
                                    WHERE keahlian.NAMA_KEAHLIAN = 'Tata Graha'");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>

                                        <!-- <form action="proses/proses_profil.php" method="POST"> -->
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?></td>
                                            <td><?php echo $d['NAMA_PRT']; ?></td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['PENGETAHUAN_TATA_GRAHA'] <= 20) {
                                                    echo 1; ?>
                                                    <input name="nilai_k1" hidden value="1">
                                                <?php
                                                } else if ($d['PENGETAHUAN_TATA_GRAHA'] <= 40) {
                                                    echo 2; ?>
                                                    <input name="nilai_k1" hidden value="2">
                                                <?php
                                                } else if ($d['PENGETAHUAN_TATA_GRAHA'] <= 60) {
                                                    echo 3; ?>
                                                    <input name="nilai_k1" hidden value="3">
                                                <?php
                                                } else if ($d['PENGETAHUAN_TATA_GRAHA'] <= 80) {
                                                    echo 4; ?>
                                                    <input name="nilai_k1" hidden value="4">
                                                <?php
                                                } else if ($d['PENGETAHUAN_TATA_GRAHA'] <= 100) {
                                                    echo 5; ?>
                                                    <input name="nilai_k1" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['KETERAMPILAN_TATA_GRAHA'] <= 20) {
                                                    echo 1; ?>
                                                    <input name="nilai_k2" hidden value="1">
                                                <?php
                                                } else if ($d['KETERAMPILAN_TATA_GRAHA'] <= 40) {
                                                    echo 2; ?>
                                                    <input name="nilai_k2" hidden value="2">
                                                <?php
                                                } else if ($d['KETERAMPILAN_TATA_GRAHA'] <= 60) {
                                                    echo 3; ?>
                                                    <input name="nilai_k2" hidden value="3">
                                                <?php
                                                } else if ($d['KETERAMPILAN_TATA_GRAHA'] <= 80) {
                                                    echo 4; ?>
                                                    <input name="nilai_k2" hidden value="4">
                                                <?php
                                                } else if ($d['KETERAMPILAN_TATA_GRAHA'] <= 100) {
                                                    echo 5; ?>
                                                    <input name="nilai_k2" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['SIKAP_TATA_GRAHA'] <= 20) {
                                                    echo 1; ?>
                                                    <input name="nilai_k3" hidden value="1">
                                                <?php
                                                } else if ($d['SIKAP_TATA_GRAHA'] <= 40) {
                                                    echo 2; ?>
                                                    <input name="nilai_k3" hidden value="2">
                                                <?php
                                                } else if ($d['SIKAP_TATA_GRAHA'] <= 60) {
                                                    echo 3; ?>
                                                    <input name="nilai_k3" hidden value="3">
                                                <?php
                                                } else if ($d['SIKAP_TATA_GRAHA'] <= 80) {
                                                    echo 4; ?>
                                                    <input name="nilai_k3" hidden value="4">
                                                <?php
                                                } else if ($d['SIKAP_TATA_GRAHA'] <= 100) {
                                                    echo 5; ?>
                                                    <input name="nilai_k3" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['NILAI_LAMA_BEKERJA'] == 1) {
                                                    echo 1; ?>
                                                    <input name="nilai_p1" hidden value="1">
                                                <?php
                                                } else if ($d['NILAI_LAMA_BEKERJA'] == 2) {
                                                    echo 2; ?>
                                                    <input name="nilai_p1" hidden value="2">
                                                <?php
                                                } else if ($d['NILAI_LAMA_BEKERJA'] == 3) {
                                                    echo 3; ?>
                                                    <input name="nilai_p1" hidden value="3">
                                                <?php
                                                } else if ($d['NILAI_LAMA_BEKERJA'] == 4) {
                                                    echo 4; ?>
                                                    <input name="nilai_p1" hidden value="4">
                                                <?php
                                                } else if ($d['NILAI_LAMA_BEKERJA'] == 5) {
                                                    echo 5; ?>
                                                    <input name="nilai_p1" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] == 1) {
                                                    echo 1; ?>
                                                    <input name="nilai_p2" hidden value="1">
                                                <?php
                                                } else if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] == 2) {
                                                    echo 2; ?>
                                                    <input name="nilai_p2" hidden value="2">
                                                <?php
                                                } else if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] == 3) {
                                                    echo 3; ?>
                                                    <input name="nilai_p2" hidden value="3">
                                                <?php
                                                } else if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] == 4) {
                                                    echo 4; ?>
                                                    <input name="nilai_p2" hidden value="4">
                                                <?php
                                                } else if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] >= 5) {
                                                    echo 5; ?>
                                                    <input name="nilai_p2" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <!-- <td class="text-center"><button type="submit" class="btn btn-success">Simpan</button></td> -->
                                        </tr>
                                        <!-- </form> -->
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->

                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Profil Aktual PRT Memasak</h3>
                        </div>
                        <div class="table-responsive">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Nama</th>
                                        <th class="d-none d-sm-table-cell">Nilai Pengetahuan</th>
                                        <th class="d-none d-sm-table-cell">Nilai Keterampilan</th>
                                        <th class="d-none d-sm-table-cell">Nilai Sikap Kerja</th>
                                        <th class="d-none d-sm-table-cell">Nilai Lama Bekerja</th>
                                        <th class="d-none d-sm-table-cell">Nilai Sertifikat/Pelatihan</th>
                                        <!-- <th class="text-center">AKSI</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $data = mysqli_query($conn, "SELECT prt_baru.ID_PRT, prt_baru.NAMA_PRT, prt_baru.JKEL_PRT, keahlian.NAMA_KEAHLIAN , tes_pengetahuan.PENGETAHUAN_MEMASAK, tes_keterampilan.KETERAMPILAN_MEMASAK, tes_sikap.SIKAP_MEMASAK, (prt_baru.PENGALAMAN_BEKERJA + kontrak.DURASI_KONTRAK) AS 'NILAI_LAMA_BEKERJA', sertifikat_pelatihan.JUMLAH_SERTIFIKAT_PELATIHAN FROM prt_baru 
                                    JOIN keahlian ON prt_baru.ID_PRT = keahlian.ID_PRT 
                                    JOIN tes_pengetahuan ON prt_baru.ID_PRT = tes_pengetahuan.ID_PRT 
                                    JOIN tes_keterampilan ON prt_baru.ID_PRT = tes_keterampilan.ID_PRT 
                                    JOIN tes_sikap ON prt_baru.ID_PRT = tes_sikap.ID_PRT 
                                    JOIN kontrak ON prt_baru.ID_PRT = kontrak.ID_PRT 
                                    JOIN sertifikat_pelatihan ON prt_baru.ID_PRT = sertifikat_pelatihan.ID_PRT
                                    WHERE keahlian.NAMA_KEAHLIAN = 'Memasak'");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>

                                        <!-- <form action="proses/proses_profil.php" method="POST"> -->
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?></td>
                                            <td><?php echo $d['NAMA_PRT']; ?></td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['PENGETAHUAN_MEMASAK'] <= 20) {
                                                    echo 1; ?>
                                                    <input name="nilai_k1" hidden value="1">
                                                <?php
                                                } else if ($d['PENGETAHUAN_MEMASAK'] <= 40) {
                                                    echo 2; ?>
                                                    <input name="nilai_k1" hidden value="2">
                                                <?php
                                                } else if ($d['PENGETAHUAN_MEMASAK'] <= 60) {
                                                    echo 3; ?>
                                                    <input name="nilai_k1" hidden value="3">
                                                <?php
                                                } else if ($d['PENGETAHUAN_MEMASAK'] <= 80) {
                                                    echo 4; ?>
                                                    <input name="nilai_k1" hidden value="4">
                                                <?php
                                                } else if ($d['PENGETAHUAN_MEMASAK'] <= 100) {
                                                    echo 5; ?>
                                                    <input name="nilai_k1" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['KETERAMPILAN_MEMASAK'] <= 20) {
                                                    echo 1; ?>
                                                    <input name="nilai_k2" hidden value="1">
                                                <?php
                                                } else if ($d['KETERAMPILAN_MEMASAK'] <= 40) {
                                                    echo 2; ?>
                                                    <input name="nilai_k2" hidden value="2">
                                                <?php
                                                } else if ($d['KETERAMPILAN_MEMASAK'] <= 60) {
                                                    echo 3; ?>
                                                    <input name="nilai_k2" hidden value="3">
                                                <?php
                                                } else if ($d['KETERAMPILAN_MEMASAK'] <= 80) {
                                                    echo 4; ?>
                                                    <input name="nilai_k2" hidden value="4">
                                                <?php
                                                } else if ($d['KETERAMPILAN_MEMASAK'] <= 100) {
                                                    echo 5; ?>
                                                    <input name="nilai_k2" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['SIKAP_MEMASAK'] <= 20) {
                                                    echo 1; ?>
                                                    <input name="nilai_k3" hidden value="1">
                                                <?php
                                                } else if ($d['SIKAP_MEMASAK'] <= 40) {
                                                    echo 2; ?>
                                                    <input name="nilai_k3" hidden value="2">
                                                <?php
                                                } else if ($d['SIKAP_MEMASAK'] <= 60) {
                                                    echo 3; ?>
                                                    <input name="nilai_k3" hidden value="3">
                                                <?php
                                                } else if ($d['SIKAP_MEMASAK'] <= 80) {
                                                    echo 4; ?>
                                                    <input name="nilai_k3" hidden value="4">
                                                <?php
                                                } else if ($d['SIKAP_MEMASAK'] <= 100) {
                                                    echo 5; ?>
                                                    <input name="nilai_k3" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['NILAI_LAMA_BEKERJA'] == 1) {
                                                    echo 1; ?>
                                                    <input name="nilai_p1" hidden value="1">
                                                <?php
                                                } else if ($d['NILAI_LAMA_BEKERJA'] == 2) {
                                                    echo 2; ?>
                                                    <input name="nilai_p1" hidden value="2">
                                                <?php
                                                } else if ($d['NILAI_LAMA_BEKERJA'] == 3) {
                                                    echo 3; ?>
                                                    <input name="nilai_p1" hidden value="3">
                                                <?php
                                                } else if ($d['NILAI_LAMA_BEKERJA'] == 4) {
                                                    echo 4; ?>
                                                    <input name="nilai_p1" hidden value="4">
                                                <?php
                                                } else if ($d['NILAI_LAMA_BEKERJA'] == 5) {
                                                    echo 5; ?>
                                                    <input name="nilai_p1" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] == 1) {
                                                    echo 1; ?>
                                                    <input name="nilai_p2" hidden value="1">
                                                <?php
                                                } else if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] == 2) {
                                                    echo 2; ?>
                                                    <input name="nilai_p2" hidden value="2">
                                                <?php
                                                } else if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] == 3) {
                                                    echo 3; ?>
                                                    <input name="nilai_p2" hidden value="3">
                                                <?php
                                                } else if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] == 4) {
                                                    echo 4; ?>
                                                    <input name="nilai_p2" hidden value="4">
                                                <?php
                                                } else if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] >= 5) {
                                                    echo 5; ?>
                                                    <input name="nilai_p2" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <!-- <td class="text-center"><button type="submit" class="btn btn-success">Simpan</button></td> -->
                                        </tr>
                                        <!-- </form> -->
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->

                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Profil Aktual PRT Penjagaan Balita</h3>
                        </div>
                        <div class="table-responsive">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Nama</th>
                                        <th class="d-none d-sm-table-cell">Nilai Pengetahuan</th>
                                        <th class="d-none d-sm-table-cell">Nilai Keterampilan</th>
                                        <th class="d-none d-sm-table-cell">Nilai Sikap Kerja</th>
                                        <th class="d-none d-sm-table-cell">Nilai Lama Bekerja</th>
                                        <th class="d-none d-sm-table-cell">Nilai Sertifikat/Pelatihan</th>
                                        <!-- <th class="text-center">AKSI</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $data = mysqli_query($conn, "SELECT prt_baru.ID_PRT, prt_baru.NAMA_PRT, prt_baru.JKEL_PRT, keahlian.NAMA_KEAHLIAN , tes_pengetahuan.PENGETAHUAN_JAGA_BALITA, tes_keterampilan.KETERAMPILAN_JAGA_BALITA, tes_sikap.SIKAP_JAGA_BALITA, (prt_baru.PENGALAMAN_BEKERJA + kontrak.DURASI_KONTRAK) AS 'NILAI_LAMA_BEKERJA', sertifikat_pelatihan.JUMLAH_SERTIFIKAT_PELATIHAN FROM prt_baru 
                                    JOIN keahlian ON prt_baru.ID_PRT = keahlian.ID_PRT 
                                    JOIN tes_pengetahuan ON prt_baru.ID_PRT = tes_pengetahuan.ID_PRT 
                                    JOIN tes_keterampilan ON prt_baru.ID_PRT = tes_keterampilan.ID_PRT 
                                    JOIN tes_sikap ON prt_baru.ID_PRT = tes_sikap.ID_PRT 
                                    JOIN kontrak ON prt_baru.ID_PRT = kontrak.ID_PRT 
                                    JOIN sertifikat_pelatihan ON prt_baru.ID_PRT = sertifikat_pelatihan.ID_PRT
                                    WHERE keahlian.NAMA_KEAHLIAN = 'Penjagaan Balita'");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>

                                        <!-- <form action="proses/proses_profil.php" method="POST"> -->
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?></td>
                                            <td><?php echo $d['NAMA_PRT']; ?></td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['PENGETAHUAN_JAGA_BALITA'] <= 20) {
                                                    echo 1; ?>
                                                    <input name="nilai_k1" hidden value="1">
                                                <?php
                                                } else if ($d['PENGETAHUAN_JAGA_BALITA'] <= 40) {
                                                    echo 2; ?>
                                                    <input name="nilai_k1" hidden value="2">
                                                <?php
                                                } else if ($d['PENGETAHUAN_JAGA_BALITA'] <= 60) {
                                                    echo 3; ?>
                                                    <input name="nilai_k1" hidden value="3">
                                                <?php
                                                } else if ($d['PENGETAHUAN_JAGA_BALITA'] <= 80) {
                                                    echo 4; ?>
                                                    <input name="nilai_k1" hidden value="4">
                                                <?php
                                                } else if ($d['PENGETAHUAN_JAGA_BALITA'] <= 100) {
                                                    echo 5; ?>
                                                    <input name="nilai_k1" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['KETERAMPILAN_JAGA_BALITA'] <= 20) {
                                                    echo 1; ?>
                                                    <input name="nilai_k2" hidden value="1">
                                                <?php
                                                } else if ($d['KETERAMPILAN_JAGA_BALITA'] <= 40) {
                                                    echo 2; ?>
                                                    <input name="nilai_k2" hidden value="2">
                                                <?php
                                                } else if ($d['KETERAMPILAN_JAGA_BALITA'] <= 60) {
                                                    echo 3; ?>
                                                    <input name="nilai_k2" hidden value="3">
                                                <?php
                                                } else if ($d['KETERAMPILAN_JAGA_BALITA'] <= 80) {
                                                    echo 4; ?>
                                                    <input name="nilai_k2" hidden value="4">
                                                <?php
                                                } else if ($d['KETERAMPILAN_JAGA_BALITA'] <= 100) {
                                                    echo 5; ?>
                                                    <input name="nilai_k2" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['SIKAP_JAGA_BALITA'] <= 20) {
                                                    echo 1; ?>
                                                    <input name="nilai_k3" hidden value="1">
                                                <?php
                                                } else if ($d['SIKAP_JAGA_BALITA'] <= 40) {
                                                    echo 2; ?>
                                                    <input name="nilai_k3" hidden value="2">
                                                <?php
                                                } else if ($d['SIKAP_JAGA_BALITA'] <= 60) {
                                                    echo 3; ?>
                                                    <input name="nilai_k3" hidden value="3">
                                                <?php
                                                } else if ($d['SIKAP_JAGA_BALITA'] <= 80) {
                                                    echo 4; ?>
                                                    <input name="nilai_k3" hidden value="4">
                                                <?php
                                                } else if ($d['SIKAP_JAGA_BALITA'] <= 100) {
                                                    echo 5; ?>
                                                    <input name="nilai_k3" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['NILAI_LAMA_BEKERJA'] == 1) {
                                                    echo 1; ?>
                                                    <input name="nilai_p1" hidden value="1">
                                                <?php
                                                } else if ($d['NILAI_LAMA_BEKERJA'] == 2) {
                                                    echo 2; ?>
                                                    <input name="nilai_p1" hidden value="2">
                                                <?php
                                                } else if ($d['NILAI_LAMA_BEKERJA'] == 3) {
                                                    echo 3; ?>
                                                    <input name="nilai_p1" hidden value="3">
                                                <?php
                                                } else if ($d['NILAI_LAMA_BEKERJA'] == 4) {
                                                    echo 4; ?>
                                                    <input name="nilai_p1" hidden value="4">
                                                <?php
                                                } else if ($d['NILAI_LAMA_BEKERJA'] == 5) {
                                                    echo 5; ?>
                                                    <input name="nilai_p1" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <?php
                                                if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] == 1) {
                                                    echo 1; ?>
                                                    <input name="nilai_p2" hidden value="1">
                                                <?php
                                                } else if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] == 2) {
                                                    echo 2; ?>
                                                    <input name="nilai_p2" hidden value="2">
                                                <?php
                                                } else if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] == 3) {
                                                    echo 3; ?>
                                                    <input name="nilai_p2" hidden value="3">
                                                <?php
                                                } else if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] == 4) {
                                                    echo 4; ?>
                                                    <input name="nilai_p2" hidden value="4">
                                                <?php
                                                } else if ($d['JUMLAH_SERTIFIKAT_PELATIHAN'] >= 5) {
                                                    echo 5; ?>
                                                    <input name="nilai_p2" hidden value="5">
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <!-- <td class="text-center"><button type="submit" class="btn btn-success">Simpan</button></td> -->
                                        </tr>
                                        <!-- </form> -->
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->

                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">Maximom's Team</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Maximom 1.0</a> &copy; <span class="js-year-copy">2019</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.bundle.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_tables_datatables.js"></script>

    </body>

    </html>

<?php
} else {
    header('Location: login.php');
}

?>