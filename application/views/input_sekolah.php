
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
  <h3>TAMBAH SEKOLAH</h3>
  <br>  

         <form action="<?= site_url('Sekolah/simpan');?>" method="post" enctype="multipart/form-data">
   <div class="row">

  

    <div class="col-md-3">
        <div class="form-group">
          <label for="last">ID</label>
          <input type="text" class="form-control" value="<?= uniqid();?>" name="id" readonly>
        </div>
      </div>      


  
     <div class="col-md-5">
        <div class="form-group">
          <label for="last">NAMA SEKOLAH</label>
          <input type="text" name="nama_sekolah" class="form-control">
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



