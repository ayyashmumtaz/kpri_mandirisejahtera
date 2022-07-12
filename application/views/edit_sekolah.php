
<div class="container">
  <h3>TAMBAH SEKOLAH</h3>
  <br>  
  <?php foreach($user as $u){ ?>
         <form action="<?= site_url('Sekolah/update');?>" method="post" enctype="multipart/form-data">
   <div class="row">

  

    <div class="col-md-3">
        <div class="form-group">
          <label for="last">ID</label>
          <input type="text" class="form-control" value="<?= $u->id;?>" name="id" readonly>
        </div>
      </div>      


  
     <div class="col-md-5">
        <div class="form-group">
          <label for="last">NAMA SEKOLAH</label>
          <input type="text" name="nama_sekolah" value="<?= $u->nama_sekolah;?>" class="form-control">
        </div>
      
        

      </div>
 
         <div class="col-md-6">       
        <div class="form-group">
          <label for="last">ALAMAT</label>
          <input class="form-control" type="text" value="<?= $u->alamat;?>" name="alamat">
        </div>
      </div>


      </div>
  

  

<button class="btn btn-lg btn-primary">Submit</button>
</div>
</form>
<?php } ?>

