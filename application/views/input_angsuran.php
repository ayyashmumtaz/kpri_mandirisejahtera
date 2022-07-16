
               <?php if($this->session->flashdata('order_berhasil')): ?>
             <script type="text/javascript">
               let timerInterval
Swal.fire({
  title: 'Input Berhasil!',
  html: 'Pinjaman telah di input!',
  icon: 'success',
  timer: 1500,
  
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
  },
  willClose: () => {
    clearInterval(timerInterval)
  }

})
            </script>
                    <?= $this->session->flashdata('order_berhasil') ?>
           
        <?php endif ?>
<div class="container">
  <h3>Input Pinjaman</h3>
  <br>
         <form action="<?= site_url('Angsuran/tambah_angsuran');?>" method="post" enctype="multipart/form-data">
   <div class="row">

  


          <input type="hidden" class="form-control" value="<?= uniqid();?>" name="id_angsuran" readonly>
   

      <div class="col-md-4">
        <div class="form-group">
          <label for="last">BULAN INPUT</label>
          <select class="form-control" name="bulan">
          <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
          </select>
        </div>
      </div>
      

      <div class="col-md-5">
        <div class="form-group">
          <label for="last">NAMA ANGGOTA</label>
           <select class="form-control" name="id_anggota">
            <option selected disabled>-- PILIH ANGGOTA --</option>
                  <?php foreach($anggota as $i){ ?>
                  <option value="<?php echo $i['id_anggota']; ?>"><?php echo $i['nama_anggota']; ?></option>
                  <?php } ?></select>
        </div>
      </div>
     




  
     <div class="col-md-5">
        <div class="form-group">
          <label for="last">Jumlah Pinjaman</label>
          <input type="number" name="jumlah_angsuran" class="form-control">
        </div>

        
      
        

      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="last">Jasa</label>
          <input type="number" name="jasa" class="form-control">
        </div>
        </div>

      </div>
  



<button class="btn btn-lg btn-primary">Submit</button>
</div>
</form>



