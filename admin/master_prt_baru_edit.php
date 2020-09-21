    <?php
    session_start();
    include 'proses/koneksi.php';
    if (!$_SESSION['id_user'] == "") {


    ?>

        <!doctype html>
        <!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
        <!--[if gt IE 9]><!-->
        <html lang="en" class="no-focus">
        <!--<![endif]-->

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

            <title>ADMIN - MASTER PRT</title>

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
                                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase">
                                        <?php echo $_SESSION['nama']; ?> </a> <i class="fa fa-angle-down ml-5"></i>
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
                        <a class="btn btn-success" href="master_prt_baru.php">Kembali</a>
                        <br><br>
                        <!-- Dynamic Table Full -->
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Pekerja Rumah Tangga</h3>

                            </div>

                            <div class="form-input p-3">

                                <form action="proses/proses_prt_baru_update.php" method="POST" enctype="multipart/form-data">

                                    <?php
                                    $id_prt = $_GET['id_prt'];
                                    $data = mysqli_query($conn, "SELECT * FROM prt_baru WHERE id_prt=$id_prt");
                                    while ($data_prt = mysqli_fetch_array($data)) { ?>

                                        <div class="form-group">
                                            <label for="nama_prt">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama_prt" name="nama_prt" value="<?php echo $data_prt['NAMA_PRT']; ?>">
                                            <input type="text" hidden name="id_prt" value="<?php echo $data_prt['ID_PRT']; ?>">
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jkel_prt" value="P" <?php if ($data_prt['JKEL_PRT'] == 'P') echo 'checked' ?>>
                                            <label class="form-check-label" for="inlineCheckbox1">Perempuan</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jkel_prt" value="L" <?php if ($data_prt['JKEL_PRT'] == 'L') echo 'checked' ?>>
                                            <label class="form-check-label" for="inlineCheckbox2">Laki - Laki</label>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="tl_prt">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tl_prt" name="tl_prt" value="<?php echo $data_prt['TL_PRT'] ?>">
                                        </div>

                                        <div class="form-group mt-2">
                                            <label for="kota_lahir_prt">Kota Lahir</label>

                                            <select name="kota_lahir_prt" id="kota_lahir_prt" class="form-control">
                                                <option value="<?php $data_prt['KOTA_LAHIR_PRT'] ?>"><?php echo $data_prt['KOTA_LAHIR_PRT'] ?></option>
                                                <option value="Surabaya">Surabaya</option>
                                                <option value="Malang">Malang</option>
                                                <option value="Jakarta">jakarta</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="alamat_prt">Alamat</label>
                                            <textarea class="form-control" id="alamat_prt" name="alamat_prt" rows="3" placeholder="Alamat"> <?php echo $data_prt['ALAMAT_PRT'] ?> </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="telp_prt">Nomor Telp</label>
                                            <input type="number" class="form-control" name="telp_prt" id="telp_prt" placeholder="0812345678910" value="<?php echo $data_prt['TELP_PRT'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_ktp_prt">Nomor Kartu Tanda Penduduk (KTP)</label>
                                            <input type="number" class="form-control" name="no_ktp_prt" id="no_ktp_prt" placeholder="Nomor KTP" value="<?php echo $data_prt['NO_KTP_PRT'] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="no_kk_prt">Nomor Kartu Keluarga (KK)</label>
                                            <input type="number" class="form-control" name="no_kk_prt" id="no_kk_prt" placeholder="Nomor KK" value="<?php echo $data_prt['NO_KK_PRT'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="email_prt">Email</label>
                                            <input type="email" class="form-control" id="email_prt" aria-describedby="emailHelp" placeholder="Email Anda" name="email_prt" value="<?php echo $data_prt['EMAIL_PRT'] ?>">

                                        </div>

                                        <div class="form-group">
                                            <label for="username_prt">Username</label>
                                            <input type="text" class="form-control" id="username_prt" aria-describedby="emailHelp" placeholder="Username" name="username_prt" value="<?php echo $data_prt['USERNAME_PRT'] ?>">

                                        </div>
                                        <div class="form-group">
                                            <label for="password_prt">Password</label>
                                            <input type="password" class="form-control" id="password_prt" placeholder="Password" name="password_prt" value="<?php echo $data_prt['PASSWORD_PRT'] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="foto_ktp_prt">Foto KTP</label>
                                            <input type="file" class="form-control" id="foto_ktp_prt" name="foto_ktp_prt">
                                        </div>

                                        <div class="form-group">
                                            <label for="foto_kk_prt">Foto KK</label>
                                            <input type="file" class="form-control" id="foto_kk_prt" name="foto_kk_prt">
                                        </div>

                                        <div class="form-group mt-2">
                                            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>

                                            <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control">
                                                <option value="<?php echo $data_prt['PENDIDIKAN_TERAKHIR'] ?>"><?php echo $data_prt['PENDIDIKAN_TERAKHIR'] ?></option>
                                                <option value="1">Tidak Sekolah</option>
                                                <option value="2">SD</option>
                                                <option value="3">SMP</option>
                                                <option value="4">SMA/SMK</option>
                                                <option value="5">S1</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="pengalaman_bekerja">Pengalaman Bekerja</label>

                                            <select name="pengalaman_bekerja" id="pengalaman_bekerja" class="form-control">
                                                <option value="<?php echo $data_prt['PENGALAMAN_BEKERJA'] ?>"><?php echo $data_prt['PENGALAMAN_BEKERJA'] ?></option>
                                                <option value="1">1 Tahun</option>
                                                <option value="2">2 Tahun</option>
                                                <option value="3">3 Tahun</option>
                                                <option value="4">4 Tahun</option>
                                                <option value="5">5 Tahun</option>
                                            </select>
                                        </div>

                                        <div class="form-group mt-2">
                                            <label for="status_prt">Status</label>

                                            <select name="status_prt" id="status_prt" class="form-control">
                                                <option value="<?php echo $data_prt['STATUS_PRT'] ?>">
                                                    <?php if ($data_prt['STATUS_PRT'] == 0) { ?>
                                                        Belum Siap Kerja
                                                    <?php } else { ?>
                                                        Siap Kerja
                                                    <?php } ?>
                                                </option>
                                                <option value="0">Belum Siap Kerja</option>
                                                <option value="1">Siap Kerja</option>
                                            </select>
                                        </div>


                                        <br>

                                        <button type="submit" class="btn btn-primary">Submit</button>

                                    <?php
                                    }
                                    ?>
                                </form>
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