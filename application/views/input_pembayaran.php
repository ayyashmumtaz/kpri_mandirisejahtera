
               <?php if($this->session->flashdata('order_berhasil')): ?>
             <script type="text/javascript">
               let timerInterval
Swal.fire({
  title: 'Input Berhasil!',
  html: 'Tagihan telah di input!',
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
<h3>Input Tagihan Sekolah</h3>
  <br>
         <form action="<?= site_url('Pembayaran/proses_input_sekolah');?>" method="post" enctype="multipart/form-data">
   <div class="row">

  


          <input type="hidden" class="form-control" value="<?= uniqid();?>" name="id_iuran" readonly>
   

      <div class="col-md-4">
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
      

      <div class="col-md-5">
        <div class="form-group">
          <label for="last">NAMA SEKOLAH</label>
           <select class="form-control" name="id_sekolah" id="id_sekolah" onchange="return autofill();">
            <option selected disabled>-- PILIH SEKOLAH --</option>
                  <?php foreach($anggota as $i){ ?>
                  <option value="<?php echo $i['id']; ?>"><?php echo $i['nama_sekolah']; ?></option>
                  <?php } ?></select>
        </div>
      </div>
     




  
     <div class="col-md-3">
        <div class="form-group">
          <label for="last">Iuran K3S dan Majalah</label>
          <input type="number" name="iurank3s" id="" class="form-control">
                  </div>
      </div>
   
      <div class="col-md-3">
        <div class="form-group">
          <label for="last">OS2N</label>
          <input type="number" name="o2sn" class="form-control">
                  </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="last">Pramuka</label>
          <input type="number" name="pramuka" class="form-control">
                  </div>
      </div>
   
      <div class="col-md-3">
        <div class="form-group">
          <label for="last">Operasional K3S</label>
          <input type="number" name="operasik3s" class="form-control">
                  </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="last">Elok</label>
          <input type="number" name="elok" class="form-control">
                  </div>
      </div>
   
   
   

      </div>
  



<button class="btn btn-lg btn-primary">Submit</button>
</div>
</form>

<script>
  function autofill(){
        var id = document.getElementById('id_sekolah').value;
        $.ajax({
          
                       url:"<?php echo site_url();?>/Pembayaran/jsonGetSekolah",
                       data:'&id_sekolah='+id,
                       success:function(data){
                           var hasil = JSON.parse(data);  
                     
                     
            $.each(hasil, function(key,val){ 
              console.log(hasil);

         
                document.getElementById('iurank3s').value=hasil[0].iurank3s;

       

                if(document.getElementById('jenis_angsuran').value == "2") 
        {
          document.getElementById('jumlah_angsuran').value=hasil[0].total_angsuran;
        }

                                
                     
                });
            }
                   });
                 
    }
    
</script>



