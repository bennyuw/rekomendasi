<?php
session_start();
include 'proses/koneksi.php';
if (!$_SESSION['id_majikan'] == "") {
?>
    <!doctype html>
    <!--[if lte IE 9]>         <html lang="en" class="lt-ie10 lt-ie10-msg no-focus"> <![endif]-->
    <!--[if gt IE 9]><!-->
    <html lang="en" class="no-focus">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>MAXIMOM - PILIH PRT</title>

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/micon-500x500.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/micon-500x500.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/micon-500x500.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css">
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
                    <a class="btn btn-alt-primary" href="lihat_prt.php">Kembali</a><br><br>
                    <div class="row item-push">
                        <div class="col-md-8">
                            <!-- Slider with Avatars -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Info Kriteria</h3>
                                </div>
                                <div class="block-content">
                                    <p style="text-align: justify;">Kriteria pemilihan terdiri dari Pengetahuan, Keterampilan, Sikap Kerja, Lama Bekerja dan Sertifikat/Pelatihan dan setiap kriteria diisi dengan nilai antara 1 sampai 5.</p>
                                    <div class="js-slider text-center" data-dots="true" data-arrows="true">
                                        <div class="py-20">
                                            <!-- <img class="img-avatar" src="assets/img/avatars/avatar14.jpg" alt=""> -->
                                            <div class="mt-10 font-w600">Nilai Kriteria Pengetahuan</div>
                                            <div class="font-size-sm text-muted">1 = Nilai persentase < 20% dari total fungsi dasar</div> <div class="font-size-sm text-muted">2 = Nilai persentase < 40% dari total fungsi dasar</div> <div class="font-size-sm text-muted">3 = Nilai persentase < 60% dari total fungsi dasar</div> <div class="font-size-sm text-muted">4 = Nilai persentase < 80% dari total fungsi dasar</div> <div class="font-size-sm text-muted">5 = Nilai persentase 100% dari total fungsi dasar</div>
                                        </div>
                                        <div class="py-20">
                                            <!-- <img class="img-avatar" src="assets/img/avatars/avatar12.jpg" alt=""> -->
                                            <div class="mt-10 font-w600">Nilai Kriteria Keterampilan</div>
                                            <div class="font-size-sm text-muted">1 = Nilai persentase < 20% dari total fungsi dasar</div> <div class="font-size-sm text-muted">2 = Nilai persentase < 40% dari total fungsi dasar</div> <div class="font-size-sm text-muted">3 = Nilai persentase < 60% dari total fungsi dasar</div> <div class="font-size-sm text-muted">4 = Nilai persentase < 80% dari total fungsi dasar</div> <div class="font-size-sm text-muted">5 = Nilai persentase 100% dari total fungsi dasar</div>
                                        </div>
                                        <div class="py-20">
                                            <!-- <img class="img-avatar" src="assets/img/avatars/avatar13.jpg" alt=""> -->
                                            <div class="mt-10 font-w600">Nilai Kriteria Sikap Kerja</div>
                                            <div class="font-size-sm text-muted">1 = Nilai persentase < 20% dari total fungsi dasar</div> <div class="font-size-sm text-muted">2 = Nilai persentase < 40% dari total fungsi dasar</div> <div class="font-size-sm text-muted">3 = Nilai persentase < 60% dari total fungsi dasar</div> <div class="font-size-sm text-muted">4 = Nilai persentase < 80% dari total fungsi dasar</div> <div class="font-size-sm text-muted">5 = Nilai persentase 100% dari total fungsi dasar</div>
                                        </div>
                                        <div class="py-20">
                                            <!-- <img class="img-avatar" src="assets/img/avatars/avatar9.jpg" alt=""> -->
                                            <div class="mt-10 font-w600">Nilai Kriteria Lama Bekerja</div>
                                            <div class="font-size-sm text-muted">1 = Bekerja 1 tahun tidak punya seritifikat dan tidak ikut pelatihan</div>
                                            <div class="font-size-sm text-muted">2 = Bekerja 2-3 tahun tidak punya seritifikat dan tidak ikut pelatihan</div>
                                            <div class="font-size-sm text-muted">3 = Bekerja 3-4 tahun tidak punya seritifikat dan tidak ikut pelatihan</div>
                                            <div class="font-size-sm text-muted">4 = Bekerja 4-5 tahun tidak punya seritifikat dan tidak ikut pelatihan</div>
                                            <div class="font-size-sm text-muted">5 = Bekerja 5 tahun tidak punya seritifikat dan tidak ikut pelatihan</div>
                                        </div>
                                        <div class="py-20">
                                            <!-- <img class="img-avatar" src="assets/img/avatars/avatar10.jpg" alt=""> -->
                                            <div class="mt-10 font-w600">Nilai Kriteria Sertifikat/Pelatihan</div>
                                            <div class="font-size-sm text-muted">1 = Punya 1 sertifikat atau ikut 1 pelatihan dan bekerja 1 tahun</div>
                                            <div class="font-size-sm text-muted">2 = Punya 2 sertifikat atau ikut 2 pelatihan dan bekerja 2-3 tahun</div>
                                            <div class="font-size-sm text-muted">3 = Punya 3 sertifikat atau ikut 3 pelatihan dan bekerja 3-4 tahun</div>
                                            <div class="font-size-sm text-muted">4 = Punya 4 sertifikat atau ikut 4 pelatihan dan bekerja 4-5 tahun</div>
                                            <div class="font-size-sm text-muted">5 = Punya > 5 sertifikat atau ikut > 5 pelatihan dan bekerja > 5 tahun</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Slider with Avatars -->
                        </div>

                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Pemilihan Kriteria</h3>
                                </div>
                                <div class="block-content">
                                    <form action="hasil_rekomendasi.php" method="post" enctype="multipart/form-data" onsubmit="return true;">
                                        <div class="form-group row">
                                            <label class="col-12" for="keahlian">Keahlian</label>
                                            <div class="col-md-12">
                                                <select class="form-control" id="keahlian" name="keahlian" required>
                                                    <option>Silahkan Pilih Keahlian</option>
                                                    <option value="">Umum</option>
                                                    <option value="Tata Graha">Tata Graha</option>
                                                    <option value="Memasak">Memasak</option>
                                                    <option value="Penjagaan Balita">Penjagaan Balita</option>
                                                    <option value="Penjagaan Bayi">Penjagaan Bayi</option>
                                                    <option value="Penjagaan Lansia">Penjagaan Lansia</option>
                                                    <option value="Tata Taman">Tata Taman</option>
                                                    <option value="Mengemudi Kendaraan Keluarga">Mengemudi Kendaraan Keluarga</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="pengalaman">Pengetahuan</label>
                                            <div class="col-md-12">
                                                <select class="form-control" id="pengalaman" name="pengalaman" required>
                                                    <option value="">Silahkan Pilih Nilai</option>
                                                    <option value="1">1 (Sangat Kurang Baik)</option>
                                                    <option value="2">2 (Kurang Baik)</option>
                                                    <option value="3">3 (Baik)</option>
                                                    <option value="4">4 (Sangat Baik)</option>
                                                    <option value="5">5 (Istimewa)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="keterampilan">Keterampilan</label>
                                            <div class="col-md-12">
                                                <select class="form-control" id="keterampilan" name="keterampilan" required>
                                                    <option value="">Silahkan Pilih Nilai</option>
                                                    <option value="1">1 (Sangat Kurang Baik)</option>
                                                    <option value="2">2 (Kurang Baik)</option>
                                                    <option value="3">3 (Baik)</option>
                                                    <option value="4">4 (Sangat Baik)</option>
                                                    <option value="5">5 (Istimewa)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="sikapkerja">Sikap Kerja</label>
                                            <div class="col-md-12">
                                                <select class="form-control" id="sikapkerja" name="sikapkerja" required>
                                                    <option value="">Silahkan Pilih Nilai</option>
                                                    <option value="1">1 (Sangat Kurang Baik)</option>
                                                    <option value="2">2 (Kurang Baik)</option>
                                                    <option value="3">3 (Baik)</option>
                                                    <option value="4">4 (Sangat Baik)</option>
                                                    <option value="5">5 (Istimewa)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="lamabekerja">Lama Bekerja</label>
                                            <div class="col-md-12">
                                                <select class="form-control" id="lamabekerja" name="lamabekerja" required>
                                                    <option value="">Silahkan Pilih Nilai</option>
                                                    <option value="1">1 (Sangat Kurang Baik)</option>
                                                    <option value="2">2 (Kurang Baik)</option>
                                                    <option value="3">3 (Baik)</option>
                                                    <option value="4">4 (Sangat Baik)</option>
                                                    <option value="5">5 (Istimewa)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="sertifikatpelatihan">Sertifikat / Pelatihan</label>
                                            <div class="col-md-12">
                                                <select class="form-control" id="sertifikatpelatihan" name="sertifikatpelatihan" required>
                                                    <option value="">Silahkan Pilih Nilai</option>
                                                    <option value="1">1 (Sangat Kurang Baik)</option>
                                                    <option value="2">2 (Kurang Baik)</option>
                                                    <option value="3">3 (Baik)</option>
                                                    <option value="4">4 (Sangat Baik)</option>
                                                    <option value="5">5 (Istimewa)</option>>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-primary">Lihat Rekomendasi</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END konten -->
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
                    <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Maximom 1.0</a> &copy; <span class="js-year-copy"></span>
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

        <!-- Page Plugins -->
        <script src="assets/js/plugins/slick/slick.min.js"></script>

        <!-- Page Plugins -->
        <script src="assets/js/plugins/slick/slick.min.js"></script>

        <!-- Page JS Code -->
        <script>
            jQuery(function() {
                Codebase.helpers('slick');
            });
        </script>

    </body>

    </html>



<?php
} else {
    header('Location: login.php');
}

?>