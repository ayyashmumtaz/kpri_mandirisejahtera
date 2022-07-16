<div class="container">
<h3>Export Persekolah</h3>
  <br>
         <form action="<?= site_url('Laporan/exportSekolah');?>" method="post" enctype="multipart/form-data">
   <div class="row">

  



      <div class="col-md-4">
        <div class="form-group">
          <label for="last">BULAN INPUT</label>
          <select class="form-control" name="tgl">
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
          <label for="last">NAMA SEKOLAH</label>
           <select class="form-control" name="sekolah">
            <option selected disabled>-- PILIH SEKOLAH --</option>
            <?php foreach($sekolah as $i){ ?>
                  <option value="<?php echo $i['id']; ?>"><?php echo $i['nama_sekolah']; ?></option>
                  <?php } ?></select>
        </div>
      </div>
     


   

      </div>
  



<button class="btn btn-lg btn-primary">Submit</button>
</div>
</form>