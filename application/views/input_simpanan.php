
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
        <label for="last">BULAN INPUT</label>
          <select class="form-control" name="tgl_simpan">
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
      
      <div class="col-md-3">
        <div class="form-group">
        <label for="last">Tahun</label>
          <select class="form-control" name="tahun">
            <option value="<?= date('Y');?>"><?= date('Y');?></option>
            <option value="<?= date('Y')+1;?>"><?= date('Y')+1;?></option>
            <option value="<?= date('Y')+2;?>"><?= date('Y')+2;?></option>
            <option value="<?= date('Y')+3;?>"><?= date('Y')+3;?></option>
            <option value="<?= date('Y')+4;?>"><?= date('Y')+4;?></option>
            <option value="<?= date('Y')+5;?>"><?= date('Y')+5;?></option>
            <option value="<?= date('Y')+6;?>"><?= date('Y')+6;?></option>
            <option value="<?= date('Y')+7;?>"><?= date('Y')+7;?></option>
            <option value="<?= date('Y')+8;?>"><?= date('Y')+8;?></option>
            <option value="<?= date('Y')+9;?>"><?= date('Y')+9;?></option>
            <option value="<?= date('Y')+10;?>"><?= date('Y')+10;?></option>
            <option value="<?= date('Y')+11;?>"><?= date('Y')+11;?></option>
            <option value="<?= date('Y')+12;?>"><?= date('Y')+12;?></option>
      
           
          </select>
        </div>
      </div>
      

      <div class="col-md-3">
        <div class="form-group">
          <label for="last">NAMA ANGGOTA</label>
           <select class="form-control" name="id_anggota">
            <option selected disabled>-- PILIH ANGGOTA --</option>
                  <?php foreach($anggota as $i){ ?>
                  <option value="<?php echo $i['id_anggota']; ?>"><?php echo $i['nama_anggota']; ?></option>
                  <?php } ?></select>
        </div>
      </div>
     
<input type="hidden" value="">



  
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
      <div class="col-md-3">
        <div class="form-group">
          <label for="last">Jumlah Pinjaman</label>
          <input type="number" name="jumlah_angsuran" class="form-control">
        </div>

        
      
        

      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label for="last">Jasa</label>
          <input type="number" name="jasa" class="form-control">
        </div>
        </div>
      
  </div>

<button class="btn btn-lg btn-primary">Submit</button>
</div>
</form>



