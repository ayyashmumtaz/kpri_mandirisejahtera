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
                     <span>Potongan Bulan Lalu</span></a>
                    <Small>Rp. <?= $a['sim_wajib'] ;?></Small></div>
                </div>
              </div>
              <!-- Single Catagory Card -->
              <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body"><a href="catagory.html">
                      <span>Tabungan Pokok</span></a>
                      <Small>Rp. 1,000,000</Small></div>
                </div>
              </div>
              <!-- Single Catagory Card -->
         
              <!-- Single Catagory Card -->
         
              <!-- Single Catagory Card -->
              <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body"><a class="text-danger" href="catagory.html">
                    <span>Total Gaji Bersih</span></a>
                    <Small>Rp. 1,000,000</Small></div>
                </div>
              </div>
              <!-- Single Catagory Card -->
              <div class="col-6">
                <div class="card catagory-card">
                  <div class="card-body"><a class="text-info" href="catagory.html">
                    <span>Travel</span></a>
                    <Small>Rp. 1,000,000</Small></div>
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