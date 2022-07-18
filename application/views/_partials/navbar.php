
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
              
                <div class="sidebar-brand-text mx-3">KPRI Sejahtera Mandiri</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>
               

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                DATA
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Master Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= site_url('Anggota');?>">Anggota</a>
                        <a class="collapse-item" href="<?= site_url('Sekolah');?>">Sekolah</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>Simpanan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= site_url('Simpanan/input');?>">Input Data Simpanan</a>
                        <a class="collapse-item" href="<?= site_url('Simpanan/data');?>">Data Simpanan</a>
                        <a class="collapse-item" href="<?= site_url('Angsuran/data');?>">Data Angsuran</a>
                    </div>
                </div>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#angsuran"
                    aria-expanded="true" aria-controls="angsuran">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>Angsuran</span>
                </a>
                <div id="angsuran" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= site_url('Angsuran/input');?>">Input Angsuran</a>
                        <a class="collapse-item" href="<?= site_url('Angsuran');?>">Data Angsuran</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pembayaran"
                    aria-expanded="true" aria-controls="pembayaran">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>Pembayaran</span>
                </a>
                <div id="pembayaran" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= site_url('Pembayaran/input');?>">Input Pembayaran</a>
                        <a class="collapse-item" href="<?= site_url('Pembayaran');?>">Data Pembayaran</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
   <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#download"
                    aria-expanded="true" aria-controls="download">
                    <i class="fas fa-fw fa-download"></i>
                    <span>Export</span>
                </a>
                <div id="download" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= site_url('Laporan/anggota');?>">Laporan Peranggota</a>
                        <a class="collapse-item" href="<?= site_url('Laporan/instansi');?>">Laporan Persekolah</a>
                        <a class="collapse-item" href="<?= site_url('Laporan/rekap_instansi');?>">Rekap Tagihan Instansi</a>


                    </div>
                </div>
            </li>
           
            <!-- Sidebar Message -->
           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                       
                        <!-- Nav Item - Alerts -->
                      

                        <!-- Nav Item - Messages -->
                     

                  

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <button class="btn btn-sm btn-primary">
                                  <?= $this->session->userdata('nama_anggota');?>
                              </button> 
                                
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                            
                    
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
