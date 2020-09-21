<?php
session_start();
include 'proses/koneksi.php';
if (!$_SESSION['id_majikan'] == "") { ?>

    <!doctype html>
    <!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
    <!--[if gt IE 9]><!-->
    <html lang="en" class="no-focus">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>MAXIMOM - PROFIL</title>

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/micon-500x500.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/micon-500x500.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/micon-500x500.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
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
        <div id="page-container" class="sidebar-o side-scroll main-content-boxed">
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
                <!-- User Info -->
                <div class="bg-image bg-image-bottom" style="background-image: url('assets/img/photos/photo34@2x.jpg');">
                    <div class="bg-primary-dark-op py-30">
                        <div class="content content-full text-center">
                            <!-- Avatar -->
                            <div class="mb-15">
                                <a class="img-link" href="profil_majikan.php">
                                    <img class="img-avatar img-avatar128 img-avatar-thumb" src="<?php echo $_SESSION['foto']; ?>">
                                </a>
                            </div>
                            <!-- END Avatar -->

                            <!-- Personal -->
                            <h1 class="h3 text-white font-w700 mb-10 text-uppercase"><?php echo $_SESSION['nama']; ?></h1>
                            <h2 class="h5 text-white-op">
                                <?php
                                if ($_SESSION['status'] == 1) {
                                    echo 'Sudah Menjadi Member';
                                } else if ($_SESSION['status'] == 0) {
                                    echo 'Belum Menjadi Member';
                                }
                                ?>
                            </h2>
                            <!-- END Personal -->

                            <!-- Actions -->
                            <!-- <button type="button" class="btn btn-rounded btn-hero btn-sm btn-alt-warning mb-5" data-toggle="modal" data-target="#ubahprofil">
                                <i class="fa fa-plus mr-5"></i> Ubah Profil
                            </button> -->
                            <a class="btn btn-rounded btn-hero btn-sm btn-alt-secondary mb-5 px-20" href="profil_majikan_edit.php">
                                <i class="fa fa-pencil mr-5"></i> Ubah Profil
                            </a>
                            <!-- END Actions -->

                            <!-- Ubah Profil-->
                            <form action="proses/proses_register.php" method="post" enctype="multipart/form-data">
                                <!-- Ubah Profil Modal -->
                                <div class="modal fade" id="ubahprofil" tabindex="-1" role="dialog" aria-labelledby="ubahprofil" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-popin" role="document">
                                        <div class="modal-content">
                                            <div class="block block-themed block-transparent mb-0">
                                                <div class="block-header bg-primary-dark">
                                                    <h3 class="block-title">Ubah Profil</h3>
                                                    <div class="block-options">
                                                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                            <i class="si si-close"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="block-content">
                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="<?php echo $_SESSION['nama']; ?>">
                                                            <label for="val-username2">Nama Lengkap</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="jkel" name="jkel" placeholder="Masukkan Nama Lengkap" value="<?php echo $_SESSION['jkel']; ?>">
                                                            <label for="val-username2">Jenis Kelamin</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan TTL Lengkap" value="<?php echo $_SESSION['tempat_lahir']; ?>">
                                                            <label for="val-username2">Tempat Lahir</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan TTL Lengkap" value="<?php echo $_SESSION['tanggal_lahir']; ?>">
                                                            <label for="val-username2">Tanggal Lahir</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="alamat" name="alamat" rows="1" placeholder="Masukkan Alamat Lengkap"><?php echo $_SESSION['alamat']; ?></textarea>
                                                            <label for="val-suggestions2">Alamat Tinggal</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomer Telpon/Handphone" value="<?php echo $_SESSION['no_hp']; ?>">
                                                            <label for="val-email2">No. Handphone</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="number" class="form-control" id="pendapatan" name="pendapatan" placeholder="Masukkan Pendapatan Anda" value="<?php echo $_SESSION['pendapatan']; ?>">
                                                            <label for="val-email2">Pendapatan Per Bulan</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="number" class="form-control" id="no_kk" name="no_kk" placeholder="Masukkan Nomer Kartu Keluarga" value="<?php echo $_SESSION['no_kk']; ?>">
                                                            <label for="val-email2">No. Kartu Keluarga</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="number" class="form-control" id="no_ktp" name="no_ktp" placeholder="Masukkan Nomer Kartu Keluarga" value="<?php echo $_SESSION['no_ktp']; ?>">
                                                            <label for="val-email2">No. Kartu Tanda Penduduk</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Anda" value="<?php echo $_SESSION['email']; ?>">
                                                            <label for="val-email2">Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="username" class="form-control" id="username" name="username" placeholder="Masukkan Username Anda" value="<?php echo $_SESSION['username']; ?>">
                                                            <label for="username">Username</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password Anda" value="<?php echo $_SESSION['password']; ?>">
                                                            <label for="val-email2">Password</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="file" class="form-control" id="scankk" name="scankk">
                                                            <label for="val-email2">Scan Kartu Keluarga</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="file" class="form-control" id="scanktp" name="scanktp">
                                                            <label for="val-email2">Scan Kartu Tanda Penduduk</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="file" class="form-control" id="scanslipgaji" name="scanslipgaji">
                                                            <label for="val-email2">Scan Slip Gaji</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input hidden type="text" class="form-control" name="id_majikan" value="<?php echo $_SESSION['id_majikan']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" value="Simpan" name="update_profil" class="btn btn-alt-success">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="modal-footer">
                                                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                                                    <i class="fa fa-check"></i> Simpan
                                                </button>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <!-- Ubah Profil Modal -->
                            <form action="proses/proses_register.php" method="post" enctype="multipart/form-data">
                                <!-- Ubah Profil Modal -->
                                <div class="modal fade" id="ubahfoto" tabindex="-1" role="dialog" aria-labelledby="ubahfoto" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-popin" role="document">
                                        <div class="modal-content">
                                            <div class="block block-themed block-transparent mb-0">
                                                <div class="block-header bg-primary-dark">
                                                    <h3 class="block-title">Ubah Foto</h3>
                                                    <div class="block-options">
                                                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                            <i class="si si-close"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="block-content">
                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="file" class="form-control" id="ubahfoto" name="ubahfoto">
                                                            <label for="val-email2">Foto Profil</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="form-material">
                                                            <input hidden type="text" class="form-control" name="id_majikan" value="<?php echo $_SESSION['id_majikan']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" value="Simpan" name="update_profil_foto" class="btn btn-alt-success">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- END User Info -->

                <!-- Main Content -->
                <div class="content">
                    <!-- User Profile -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">
                                <i class="fa fa-user-circle mr-5 text-muted"></i> Data Diri
                            </h3>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <div class="col-lg-3">
                                    <p class="text-muted">
                                        Info Lengkap Data Diri Anda.
                                    </p>
                                </div>
                                <div class="col-lg-7 offset-lg-1">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="profile-settings-username">Nama Lengkap</label>
                                            <div class="form-control-plaintext"><?php echo $_SESSION['nama'] ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="profile-settings-username">Jenis Kelamin</label>
                                            <div class="form-control-plaintext"><?php
                                                                                if ($_SESSION['jkel'] == 'L') {
                                                                                    echo 'Pria';
                                                                                } else if ($_SESSION['jkel'] == 'P') {
                                                                                    echo 'Wanita';
                                                                                }
                                                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="profile-settings-username">Tempat Lahir</label>
                                            <div class="form-control-plaintext"><?php echo $_SESSION['tempat_lahir'] ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="profile-settings-username">Tanggal Lahir</label>
                                            <div class="form-control-plaintext"><?php echo $_SESSION['tanggal_lahir'] ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="profile-settings-username">Alamat Lengkap</label>
                                            <div class="form-control-plaintext"><?php echo $_SESSION['alamat'] ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="profile-settings-username">No. Handphone</label>
                                            <div class="form-control-plaintext"><?php echo $_SESSION['no_hp'] ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="profile-settings-username">Pendapatan Per Bulan</label>
                                            <div class="form-control-plaintext"><?php echo $_SESSION['pendapatan'] ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="profile-settings-username">No. Kartu Keluarga</label>
                                            <div class="form-control-plaintext"><?php echo $_SESSION['no_kk'] ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="profile-settings-username">No. Kartu Tanda Penduduk</label>
                                            <div class="form-control-plaintext"><?php echo $_SESSION['no_ktp'] ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="profile-settings-username">Email</label>
                                            <div class="form-control-plaintext"><?php echo $_SESSION['email'] ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="profile-settings-username">Username</label>
                                            <div class="form-control-plaintext"><?php echo $_SESSION['username'] ?></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="profile-settings-username">Password</label>
                                            <div class="form-control-plaintext"><?php echo $_SESSION['password'] ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- END User Profile -->
                </div>
                <!-- END Main Content -->
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
    </body>

    </html>

<?php
} else {
    header('Location: login.php');
}

?>