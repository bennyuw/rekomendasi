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

        <title>ADMIN - TES PENGETAHUAN</title>

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
                    <a class="btn btn-success" href="tes_pengetahuan.php">Kembali</a><br><br>

                    <?php
                    // ngecek apakah memanggil post atau get
                    if (isset($_GET['ID_TES_PENGETAHUAN'])) {
                        $id_tes_pengetahuan = $_GET['ID_TES_PENGETAHUAN'];

                        $sql = "SELECT * FROM TES_PENGETAHUAN WHERE ID_TES_PENGETAHUAN = '$id_tes_pengetahuan'";
                        $qwri = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($qwri);

                        $id_tes_pengetahuan = $row['ID_TES_PENGETAHUAN'];
                        $id_prt = $row['ID_PRT'];
                        $prt = $row['NAMA_PRT'];
                        $tu = $row['PENGETAHUAN_TATA_GRAHA'];
                        $mm = $row['PENGETAHUAN_MEMASAK'];
                        $jbl = $row['PENGETAHUAN_JAGA_BALITA'];
                        $jby = $row['PENGETAHUAN_JAGA_BAYI'];
                        $jla = $row['PENGETAHUAN_JAGA_LANSIA'];
                        $tt = $row['PENGETAHUAN_TATA_TAMAN'];
                        $mkk = $row['PENGETAHUAN_MENGEMUDI_KENDARAAN_KELUARGA'];
                    }
                    ?>

                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Nilai Tes Pengetahuan</h3>
                        </div>

                        <div class="form-input p-3">
                            <form action="proses/proses_tes_pengetahuan.php" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <!-- <label for="id_tes_pengetahuan">ID Tes Pengetahuan</label> -->
                                    <input type="number" class="form-control" name="ID_TES_PENGETAHUAN" id="ID_TES_PENGETAHUAN" placeholder=" " value="<?php echo $id_tes_pengetahuan; ?>" hidden>
                                </div>
                                <div class="form-group">
                                    <label for="ID_PRT">ID PRT</label>
                                    <select name="ID_PRT" onchange="auto_fill()" id="ID_PRT" class="form-control">
                                        <option> Memilih PRT</option>
                                        <?php

                                        $data = mysqli_query($conn, "select * from prt_baru");
                                        while ($data_prt = mysqli_fetch_array($data)) {
                                        ?>
                                            <option value="<?php echo $data_prt['ID_PRT'] ?>">
                                                <?php echo $data_prt['ID_PRT'] ?> <?php echo $data_prt['NAMA_PRT'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="NAMA_PRT">Nama PRT</label>
                                    <input type="text" class="form-control" name="NAMA_PRT" id="NAMA_PRT" placeholder="Nama PRT" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="PENGETAHUAN_TATA_GRAHA">Nilai Pembekalan Tata Graha</label>
                                    <input type="number" class="form-control" name="PENGETAHUAN_TATA_GRAHA" id="PENGETAHUAN_TATA_GRAHA" placeholder=" " value="<?php echo @$tu; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="PENGETAHUAN_MEMASAK">Nilai Pembekalan Memasak</label>
                                    <input type="number" class="form-control" name="PENGETAHUAN_MEMASAK" id="PENGETAHUAN_MEMASAK" placeholder=" " value="<?php echo @$mm; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="PENGETAHUAN_JAGA_BALITA">Nilai Pembekalan Jaga Balita</label>
                                    <input type="number" class="form-control" name="PENGETAHUAN_JAGA_BALITA" id="PENGETAHUAN_JAGA_BALITA" placeholder=" " value="<?php echo @$jbl; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="PENGETAHUAN_JAGA_BAYI">Nilai Pembekalan Jaga Bayi</label>
                                    <input type="number" class="form-control" name="PENGETAHUAN_JAGA_BAYI" id="PENGETAHUAN_JAGA_BAYI" placeholder=" " value="<?php echo @$jby; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="PENGETAHUAN_JAGA_LANSIA">Nilai Pembekalan Jaga Lansia</label>
                                    <input type="number" class="form-control" name="PENGETAHUAN_JAGA_LANSIA" id="PENGETAHUAN_JAGA_LANSIA" placeholder=" " value="<?php echo @$jla; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="PENGETAHUAN_TATA_TAMAN">Nilai Pembekalan Tata Taman</label>
                                    <input type="number" class="form-control" name="PENGETAHUAN_TATA_TAMAN" id="PENGETAHUAN_TATA_TAMAN" placeholder=" " value="<?php echo @$tt; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="PENGETAHUAN_MENGEMUDI_KENDARAAN_KELUARGA">Nilai Pembekalan Mengemudi Kendaraan Keluarga</label>
                                    <input type="number" class="form-control" name="PENGETAHUAN_MENGEMUDI_KENDARAAN_KELUARGA" id="PENGETAHUAN_MENGEMUDI_KENDARAAN_KELUARGA" placeholder=" " value="<?php echo @$mkk; ?>">
                                </div>
                                <br>
                                <?php
                                if (isset($_GET['ID_TES_PENGETAHUAN'])) {
                                ?>
                                    <button type="submit" class="btn btn-warning" name="Update" value="Update">
                                        <i class="fa fa-dot-circle-o"></i> Perbaruhi Data
                                    </button>
                                <?php
                                } else {
                                ?>
                                    <button type="submit" class="btn btn-primary" name="insert" value="insert">
                                        <i class="fa fa-dot-circle-o"></i> Simpan Data
                                    </button>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            function auto_fill() {
                let id_prt = $("#ID_PRT").val();

                $.ajax({
                    method: "GET",
                    url: 'proses/proses_ajax_pengetahuan.php?ID_PRT=' + id_prt,
                    data: "ID_PRT=" + id_prt,

                }).success(function(data) {
                    let json = data,
                        obj = JSON.parse(json);
                    $('#NAMA_PRT').val(obj.nama);

                });
            }
        </script>

    </body>

    </html>

<?php
} else {
    header('Location: login.php');
}

?>