
<div class="container">
  <h3>TAMBAH ANGGOTA</h3>
  <br>  

         <form action="<?= site_url('Anggota/update');?>" method="post" enctype="multipart/form-data">
   <div class="row">

  
   <?php foreach($user as $u){ ?>
    <div class="col-md-3">
        <div class="form-group">
          <label for="last">ID ANGGOTA</label>
          <input type="text" class="form-control" value="<?= $u->id_anggota;?>" name="id_anggota" readonly>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="last">TANGGAL DAFTAR</label>
          <input type="date" class="form-control" value="<?= $u->tgl_daftar;?>" name="tgl_daftar">
        </div>
      </div>
      

      <div class="col-md-5">
        <div class="form-group">
          <label for="last">SEKOLAH</label>
           <select class="form-control" name="id_sekolah" required>
           <option selected value="<?= $u->id_sekolah;?>" ></option>
                  <?php foreach($sekolah as $i){ ?>
                  <option value="<?php echo $i['id']; ?>"><?php echo $i['nama_sekolah']; ?></option>
                  <?php } ?></select>
        </div>
      </div>
     




  
     <div class="col-md-5">
        <div class="form-group">
          <label for="last">NAMA ANGGOTA</label>
          <input type="text" name="nama_anggota" value="<?= $u->nama_anggota;?>" class="form-control" required>
        </div>


        

      </div>


 
      <div class="col-md-4">
        <div class="form-group">
          <label for="last">NIK</label>
          <input type="text" name="nik" class="form-control" value="<?= $u->nik;?>" required>
      </div>
 </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="last">PASSWORD</label>
          <input type="text" name="password" class="form-control" value="<?= $u->password;?>" required>
        </div>
        </div>
        <div class="col-md-3">
        <div class="form-group">
          <label for="last">Jabatan</label>
         <select name="role" required>
                  <option selected value="user" selected>Anggota</option>
                </select>
         </select>
        </div>
        </div>


      </div>
  

  

<button class="btn btn-lg btn-primary">Submit</button>
</div>
</form>

<?php } ?>

