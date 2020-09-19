<div class="sidebar" role="navigation">
    <div class="navbar-collapse">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right dev-page-sidebar mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar"
            id="cbp-spmenu-s1">
            <div class="scrollbar scrollbar1">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo site_url('Dashboard') ?>" class="active"><i
                                class="fa fa-home nav_icon"></i>Dashboard</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-book nav_icon"></i>Buku Tamu</a>
                        <!-- /nav-second-level -->
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kepuasan') ?>"><i class="fa fa-users nav_icon"></i>Survei Kepuasan
                            Pelanggan</span></a>
                        <!-- /nav-second-level -->
                    </li>
                    <li>
                        <a href="https://pekanbaru.pom.go.id/"><i class="fa fa-home nav_icon"></i>Profile BBPOM PKU </a>
                        <!-- //nav-second-level -->
                    </li>
                    <li>
                        <a href="http://cekbpom.pom.go.id/"><i class="fa fa-search nav_icon"></i>Cek BPOM</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-certificate nav_icon"></i>Sertifikasi</a>
                        <!-- //nav-second-level -->
                    </li>
                    <li>
                        <a href="https://e-reg.pom.go.id/"><i class="fa fa-pagelines nav_icon"></i>Registrasi Pangan</a>
                    </li>
                    <li>
                        <a href="https://ulpk.pom.go.id/id/MM/20191029090049/0.html"><i
                                class="fa fa-file-text nav_icon"></i></i>Form Pengaduan</a>
                    </li>
                    <li>
                        <a href="https://asrot.pom.go.id/" class="chart-nav"><i class="fa fa-medkit nav_icon"></i>OT dan
                            SK</a>
                    </li>
                </ul>
            </div>
            <!-- //sidebar-collapse -->
        </nav>
    </div>
</div>
<?php if ($this->session->userdata('status') === 'admin') : ?>

<div class="sidebar" role="navigation">
    <div class="navbar-collapse">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right dev-page-sidebar mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar"
            id="cbp-spmenu-s1">
            <div class="scrollbar scrollbar1">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo site_url('Dashboard_petugas') ?>" class="active"><i
                                class="fa fa-home nav_icon"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Biodata') ?>"><i class="fa fa-users nav_icon"></i>Biodata
                            Pengunjung</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kepuasan/hasil_survei') ?>"><i
                                class="fa fa-book nav_icon"></i>Data Survei Kepuasan</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('petugas') ?>"><i class="fa fa-list-ul nav_icon"></i>Data Petugas
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('user') ?>"><i class="fa fa-user nav_icon"></i>Data User </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Biodata/dataAkhirPengunjung') ?>"><i
                                class="fa fa-user nav_icon"></i>Daftar Buku Tamu </a>
                    </li>
                </ul>
            </div>
            <!-- //sidebar-collapse -->
        </nav>
    </div>
</div>
<?php endif ?>