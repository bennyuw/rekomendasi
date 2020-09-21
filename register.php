<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en" class="no-focus">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>MAXIMOM - REGISTRASI</title>

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
    <div id="page-container" class="main-content-boxed">

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="bg-gd-emerald">
                <div class="hero-static content content-full bg-white invisible" data-toggle="appear">

                    <!-- Header -->
                    <div class="py-30 px-5 text-center">
                        <a class="link-effect font-w700" href="register.php">
                            <span class="font-size-xl text-warning">MAXI</span><span class="font-size-xl text-primary">MOM</span>
                        </a>
                        <h1 class="h2 font-w700 mt-50 mb-10">Daftar Akun Baru</h1>
                        <h2 class="h4 font-w400 text-muted mb-0">Harap isi Data Diri Anda</h2>
                    </div>
                    <!-- END Header -->

                    <!-- Progress Wizards -->
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="js-wizard-simple block">
                                <!-- Step Tabs -->
                                <ul class="nav nav-tabs nav-tabs-block nav-fill" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#wizard-progress-step1" data-toggle="tab">Tahap 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#wizard-progress-step2" data-toggle="tab">Tahap 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#wizard-progress-step3" data-toggle="tab">Tahap 3</a>
                                    </li>
                                </ul>
                                <!-- END Step Tabs -->

                                <!-- Form -->
                                <form action="proses/proses_register.php" method="post">
                                    <!-- Wizard Progress Bar -->
                                    <div class="block-content block-content-sm">
                                        <div class="progress" data-wizard="progress" style="height: 8px;">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!-- END Wizard Progress Bar -->

                                    <!-- Steps Content -->
                                    <div class="block-content block-content-full tab-content" style="min-height: 265px;">
                                        <!-- Step 1 -->
                                        <div class="tab-pane active" id="wizard-progress-step1" role="tabpanel">
                                            <div class="form-group">
                                                <label for="nama">Nama Lengkap</label>
                                                <input class="form-control" type="text" id="nama" name="nama">
                                            </div>
                                            <div class="form-group">
                                                <label for="jkel">Jenis Kelamin</label>
                                                <div class="form-group">
                                                    <div class="custom-control custom-radio custom-control-inline mb-5">
                                                        <input class="custom-control-input" type="radio" name="jkel" id="jkel-perempuan" value="P">
                                                        <label class="custom-control-label" for="jkel-perempuan">Wanita</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline mb-5">
                                                        <input class="custom-control-input" type="radio" name="jkel" id="jkel-laki" value="L">
                                                        <label class="custom-control-label" for="jkel-laki">Pria</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="ttl">Tempat Lahir</label>
                                                <input class="form-control" type="text" id="tempat_lahir" name="tempat_lahir">
                                            </div>
                                            <div class="form-group">
                                                <label for="ttl">Tanggal Lahir</label>
                                                <input class="form-control" type="date" id="tanggal_lahir" name="tanggal_lahir">
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat Lengkap</label>
                                                <input class="form-control" type="text" id="alamat" name="alamat">
                                            </div>
                                            <div class="form-group">
                                                <label for="nohp">No. Telepon</label>
                                                <input class="form-control" type="number" id="no_hp" name="no_hp">
                                            </div>
                                        </div>
                                        <!-- END Step 1 -->

                                        <!-- Step 2 -->
                                        <div class="tab-pane" id="wizard-progress-step2" role="tabpanel">
                                            <div class="form-group">
                                                <label for="pendapatan">Pendapatan Tiap Bulan</label>
                                                <input class="form-control" type="number" id="pendapatan" name="pendapatan">
                                            </div>
                                            <div class="form-group">
                                                <label for="nokk">No. Kartu Keluarga</label>
                                                <input class="form-control" type="number" id="no_kk" name="no_kk">
                                            </div>
                                            <div class="form-group">
                                                <label for="noktp">No. Kartu Tanda Penduduk</label>
                                                <input class="form-control" type="number" id="no_ktp" name="no_ktp">
                                            </div>
                                        </div>
                                        <!-- END Step 2 -->

                                        <!-- Step 3 -->
                                        <div class="tab-pane" id="wizard-progress-step3" role="tabpanel">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" type="email" id="email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input class="form-control" type="username" id="username" name="username">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" id="password" name="password">
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="css-control css-control-primary css-switch" for="persetujuan">
                                                    <input type="checkbox" class="css-control-input" id="persetujuan" name="persetujuan">
                                                    
                                                    <span class="css-control-indicator"> </span> Setuju
                                                </label>
                                            </div> -->
                                            <div class="form-group row text-center">
                                                <div class="col-12">
                                                    <label class="css-control css-control-primary css-checkbox" for="persetujuan">
                                                        <input type="checkbox" class="css-control-input" id="persetujuan" name="persetujuan">
                                                        <span class="css-control-indicator"></span>
                                                        Saya Menyetujui Syarat &amp; Ketentuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Step 3 -->
                                    </div>
                                    <!-- END Steps Content -->

                                    <!-- Steps Navigation -->
                                    <div class="block-content block-content-sm block-content-full bg-body-light">
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                                    <i class="fa fa-angle-left mr-5"></i> Sebelumnya
                                                </button>
                                            </div>
                                            <div class="col-6 text-right">
                                                <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                                    Selanjutnya <i class="fa fa-angle-right ml-5"></i>
                                                </button>
                                                <button type="submit" name="register" class="btn btn-alt-success d-none" data-wizard="finish">
                                                    <i class="si si-user-follow ml-5"></i> Daftar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Steps Navigation -->
                                    <br>
                                    <div class="form-group row gutters-tiny">
                                        <div class="col-6">
                                            <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="#" data-toggle="modal" data-target="#modal-terms">
                                                <i class="si si-book-open text-muted mr-10"></i> Baca Syarat &amp; Ketentuan
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="login.php">
                                                <i class="si si-login text-muted mr-10"></i> Masuk
                                            </a>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Form -->
                            </div>
                        </div>
                    </div>
                    <!-- END Progress Wizards -->
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!-- Terms Modal -->
    <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Syarat &amp; Ketentuan</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <p style="text-align: justify;">Mampu menyediakan makanan dan Tempat yang layak untuk Pekerja Rumah Tangga, dan melengkapi data diri (Scan KK, KTP & Slip Gaji).</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                        <i class="fa fa-check"></i> Setuju
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Terms Modal -->

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
    <script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
    <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/js/plugins/jquery-validation/additional-methods.min.js"></script>
    <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/js/plugins/jquery-validation/additional-methods.min.js"></script>
    <script src="assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="assets/js/plugins/select2/select2.full.min.js"></script>
    <script src="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
    <script src="assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js"></script>
    <script src="assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
    <script src="assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="assets/js/plugins/dropzonejs/min/dropzone.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/op_auth_signup.js"></script>
    <script src="assets/js/pages/be_forms_plugins.js"></script>
    <script src="assets/js/pages/be_forms_wizard.js"></script>
</body>

</html>