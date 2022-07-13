
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
<h3>Input Pembayaran</h3>
  <br>
         <form action="<?= site_url('Angsuran/tambah_angsuran');?>" method="post" enctype="multipart/form-data">
   <div class="row">

  


          <input type="hidden" class="form-control" value="<?= uniqid();?>" name="id_angsuran" readonly>
   

      <div class="col-md-4">
        <div class="form-group">
          <label for="last">TANGGAL INPUT</label>
          <input type="date" class="form-control" name="tgl_pinjam">
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
          <label for="last">Jumlah Yang Ingin Dibayar</label>
          <input type="number" name="jumlah_angsuran" class="form-control">
        </div>

        
      
        

      </div>
   

      </div>
  



<button class="btn btn-lg btn-primary">Submit</button>
</div>
</form>



