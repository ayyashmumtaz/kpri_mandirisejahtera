
               <?php if($this->session->flashdata('order_berhasil')): ?>
             <script type="text/javascript">
               let timerInterval
Swal.fire({
  title: 'Berhasil!',
  html: 'Data berhasil di Input!',
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
  <h3>TAMBAH ANGGOTA</h3>
  <br>  

         <form action="<?= site_url('Anggota/simpan');?>" method="post" enctype="multipart/form-data">
   <div class="row">

  

    <div class="col-md-3">
        <div class="form-group">
          <label for="last">ID ANGGOTA</label>
          <input type="text" class="form-control" value="<?= uniqid();?>" name="id_anggota" readonly>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="last">TANGGAL DAFTAR</label>
          <input type="date" class="form-control" name="tgl_daftar">
        </div>
      </div>
      

      <div class="col-md-5">
        <div class="form-group">
          <label for="last">SEKOLAH</label>
           <select class="form-control" name="id_sekolah">
            <option selected disabled>-- PILIH SEKOLAH --</option>
                  <?php foreach($sekolah as $i){ ?>
                  <option value="<?php echo $i['id']; ?>"><?php echo $i['nama_sekolah']; ?></option>
                  <?php } ?></select>
        </div>
      </div>
     




  
     <div class="col-md-5">
        <div class="form-group">
          <label for="last">NAMA ANGGOTA</label>
          <input type="text" name="nama_anggota" class="form-control">
        </div>
      
        

      </div>
 
         <div class="col-md-6">       
        <div class="form-group">
          <label for="last">ALAMAT</label>
          <input class="form-control" type="text" name="alamat">
        </div>
      </div>


      </div>
  

  

<button class="btn btn-lg btn-primary">Submit</button>
</div>
</form>



