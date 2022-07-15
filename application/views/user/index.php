<body>

    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper-->
        <div class="logo-wrapper">E - Koperasi | KPRI Mandiri Sejahtera</div>
        <!-- Search Form-->
   
        <!-- Navbar Toggler-->
      </div>
    </div>
   
      <!-- Close button-->
      <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <!-- Offcanvas body-->
    
    </div>
    <!-- PWA Install Alert -->
<br>
<br>
      <!-- Product Catagories -->
      <div class="product-catagories-wrapper py-3">
        <div class="container">
          <div class="section-heading">
           <center><h6>KOPERASI PEGAWAI REPUBLIK INDONESIA</h6>
           <br>
          <p>
MANDIRI SEJAHTERA</p>
<br>

<?php foreach ($anggota as $anggota) : ?>
<p>NIK : <?= $anggota['nik']; ?></p>
<p>Nama : <?= $this->session->userdata('nama_anggota') ?></p>
<p>Status : <?php $status = $anggota['status'];
                 switch ($status) {
                  case '0':
                    echo '<button class="btn btn-sm btn-danger">TIDAK AKTIF</button>';
                    break;
                  case '1':
                    echo '<button class="btn btn-sm btn-success">AKTIF</button>';
                    break;
                  
                  default:
                    // code...
                    break;
                } ?></p>

<?php endforeach; ?>

          </center> 

         
          </div>
          <?php foreach ($simpanan as $a) : ?>
          <div class="product-catagory-wrap">
            <div class="row g-3">
              <!-- Single Catagory Card -->
              <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body"><a class="text-danger" href="catagory.html">
                     <span>Simpanan Wajib</span></a>
                    <Small><?php
                        $angka = $a['sim_wajib'] ;

                $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                echo $hasil_rupiah;
               ?></Small></div>
                </div>
              </div>
              <!-- Single Catagory Card -->
              <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body"><a href="catagory.html">
                      <span>Simpanan Pokok</span></a>
                      <Small><?php
                        $angka = $a['sim_pokok'] ;

                $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                echo $hasil_rupiah;
               ?></Small></div>
                </div>
              </div>
              <!-- Single Catagory Card -->
         
              <!-- Single Catagory Card -->
         
              <!-- Single Catagory Card -->
              <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body"><a class="text-danger" href="catagory.html">
                    <span>THR</span></a>
                    <Small><?php
                        $angka = $a['thr'] ;

                $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                echo $hasil_rupiah;
               ?></Small></div>
                </div>
              </div>
              <!-- Single Catagory Card -->
              <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body"><a class="text-info" href="catagory.html">
                    <span>Pendidikan</span></a>
                    <Small><?php
                        $angka = $a['pendidikan'] ;

                $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                echo $hasil_rupiah;
               ?></Small></div>
                </div>
              </div>
              <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body"><a class="text-danger" href="catagory.html">
                    <span>Rekreasi</span></a>
                    <Small><?php
                        $angka = $a['rekreasi'] ;

                $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                echo $hasil_rupiah;
               ?></Small></div>
                </div>
              </div>
              <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body"><a class="text-danger" href="catagory.html">
                    <span>Sisa Angsuran</span></a>
                    <Small>
                    <?php foreach ($angsuran as $a) : ?>
                      <?php
                        $angka = $a['jumlah_angsuran'] ;

                $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                echo $hasil_rupiah;
               ?><?php endforeach; ?></Small></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      <!-- Flash Sale Slide -->
     
      <!-- Top Products -->
   
      <!-- Cool Facts Area-->
      <div class="cta-area">
        <div class="container">
          <div class="cta-text p-4 p-lg-5" style="background-image: url(img/bg-img/24.jpg)">
            <h4 class="text-white">On Sale 50% Off!</h4>
            <p class="text-white">Suha is a multipurpose, creative &amp; <br>modern mobile template.</p><a class="btn btn-warning" href="#">Shop Today</a>
          </div>
        </div>
      </div>


    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>