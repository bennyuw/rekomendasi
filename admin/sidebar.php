<aside id="side-overlay">
    <!-- Side Overlay Scroll Container -->
    <div id="side-overlay-scroll">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow">
            <div class="content-header-section align-parent">
                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Side Overlay -->

                <!-- User Info -->
                <div class="content-header-item">
                    <a class="img-link mr-5" href="">
                        <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar0.jpg" alt="">
                    </a>
                    <a class="align-middle link-effect text-primary-dark font-w600" href="">Majikan</a>
                </div>
                <!-- END User Info -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <!-- Search -->
            <div class="block pull-t pull-r-l">
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary px-10">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Search -->
        </div>
        <!-- END Side Content -->
    </div>
    <!-- END Side Overlay Scroll Container -->
</aside>
<!-- END Side Overlay -->

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
<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow px-15">
                <!-- Mini Mode -->
                <div class="content-header-section sidebar-mini-visible-b">
                    <!-- Logo -->
                    <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                        <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                    </span>
                    <!-- END Logo -->
                </div>
                <!-- END Mini Mode -->

                <!-- Normal Mode -->
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="index.php">
                            <span class="font-size-xl text-warning">MAXI</span><span class="font-size-xl text-primary">MOM</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
                <!-- END Normal Mode -->
            </div>
            <!-- END Side Header -->

            <!-- Side User -->
            <div class="content-side content-side-full content-side-user px-10 align-parent">
                <!-- Visible only in mini mode -->
                <div class="sidebar-mini-visible-b align-v animated fadeIn">
                    <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar15.jpg" alt="">
                </div>
                <!-- END Visible only in mini mode -->

                <!-- Visible only in normal mode -->
                <div class="sidebar-mini-hidden-b text-center">
                    <a class="img-link" href="profil_majikan.php">
                        <img class="img-avatar" src="<?php echo $_SESSION['foto']; ?>" alt="">
                    </a>
                    <ul class="list-inline mt-10">
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="profil_majikan.php"><?php echo $_SESSION['nama']; ?></a>
                        </li>
                        <li class="list-inline-item">
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                <i class="si si-drop"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark" href="proses/proses_logout.php">
                                <i class="si si-logout"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <!-- <li>
                        <a href="index.php">
                            <i class="si si-cup"></i>
                            <span class="sidebar-mini-hide">Dashboard</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="master_prt_baru.php">
                            <i class="si si-users"></i>
                            <span class="sidebar-mini-hide">Master PRT</span>
                        </a>
                    </li>
                    <li>
                        <a href="tes_pengetahuan.php">
                            <i class="si si-note"></i>
                            <span class="sidebar-mini-hide">Tes Pengetahuan</span>
                        </a>
                    </li>
                    <li>
                        <a href="tes_keterampilan.php">
                            <i class="si si-note"></i>
                            <span class="sidebar-mini-hide">Tes Keterampilan</span>
                        </a>
                    </li>
                    <li>
                        <a href="tes_sikap.php">
                            <i class="si si-note"></i>
                            <span class="sidebar-mini-hide">Tes Sikap Kerja</span>
                        </a>
                    </li>
                    <li>
                        <a href="sertifikat_pelatihan.php">
                            <i class="si si-note"></i>
                            <span class="sidebar-mini-hide">Sertifikat/Pelatihan</span>
                        </a>
                    </li>
                    <li>
                        <a href="kontrak.php">
                            <i class="si si-note"></i>
                            <span class="sidebar-mini-hide">Kontrak</span>
                        </a>
                    </li>
                    <li>
                        <a href="keahlian.php">
                            <i class="si si-users"></i>
                            <span class="sidebar-mini-hide">Keahlian</span>
                        </a>
                    </li>
                    <li>
                        <a href="profil_aktual.php">
                            <i class="si si-user-follow"></i>
                            <span class="sidebar-mini-hide">Profil Aktual PRT</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="aspek_kompetensi.php">
                            <i class="si si-note"></i>
                            <span class="sidebar-mini-hide">Aspek Kompetensi</span>
                        </a>
                    </li>
                    <li>
                        <a href="aspek_pengalaman.php">
                            <i class="si si-note"></i>
                            <span class="sidebar-mini-hide">Aspek Pengalaman</span>
                        </a>
                    </li> -->
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>