
               <?php if($this->session->flashdata('order_berhasil')): ?>
             <script type="text/javascript">
               let timerInterval
Swal.fire({
  title: 'Input Berhasil!',
  html: 'Tabungan telah di input!',
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
  
         <form action="<?= site_url('Simpanan/tambah_tabungan');?>" method="post" enctype="multipart/form-data">
   <div class="row">

  

    <div class="col-md-3">
        <div class="form-group">
          <label for="last">ID SIMPANAN</label>
          <input type="text" class="form-control" value="<?= uniqid();?>" name="id_keuangan" readonly>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="last">TANGGAL INPUT</label>
          <input type="date" class="form-control" name="tgl_simpan">
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
     




  
     <div class="col-md-3">
        <div class="form-group">
          <label for="last">Simpanan Pokok</label>
          <input type="number" name="sim_pokok" class="form-control">
        </div>
      
        

      </div>
 
         <div class="col-md-3">       
        <div class="form-group">
          <label for="last">Simpanan Wajib</label>
          <input class="form-control" type="number" name="sim_wajib">
        </div>
      </div>

 <div class="col-md-3">       
        <div class="form-group">
          <label for="last">THR (Tunjangan Hari Raya)</label>
          <input class="form-control" type="number" name="thr" >
        </div>
      </div>

      </div>
  

  <div class="row">
    
        <div class="col-md-3">       
        <div class="form-group">
          <label for="last">Pendidikan</label>
          <input class="form-control" type="number" name="pendidikan">
        </div>
      </div>

 <div class="col-md-3">       
        <div class="form-group">
          <label for="last">Rekreasi</label>
          <input class="form-control" type="number" name="rekreasi">
        </div>
      </div>

      
  </div>

<button class="btn btn-lg btn-primary">Submit</button>
</div>
</form>



