<script type="text/javascript">
    $(document).ready(function () {
    $('#s').DataTable({
      dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    });
});
</script>


<div class="container">
    <h3>List Sekolah</h3>
    <a class="btn btn-sm btn-primary" style="margin-bottom: 2%;" href="<?= site_url('Sekolah/tambah');?>">+ Tambah Sekolah</a>

    <table id="s" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>ID Sekolah</th>
                <th>Nama Sekolah</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($anggota as $b){
            ?>
            <tr>
              
                <td><?= $b->id?></td>
                <td><?=$b->nama_sekolah?></td>
                <td><?=$b->alamat?></td>
                <td>
                  <?php switch ($b->status) {
                    case '1':
                      echo "Aktif";
                      break;
                    case '0':
                      echo "Nonaktif";
                      break;
                    
                    default:
                      echo "Tidak ada status";
                      break;
                  } ?>
                </td>
                <td>
                <?php switch ($b->status) {
                    case '1':
                      echo "<a class='btn btn-sm btn-danger' style='margin-bottom: 2%;' href='".site_url('Sekolah/nonaktif/').$b->id."'>Nonaktifkan</a>";
                      break;
                    case '0':
                      echo "<a class='btn btn-sm btn-success' style='margin-bottom: 2%;' href='".site_url('Sekolah/aktifkan/').$b->id."'>Aktifkan</a>";
                      break;
                    
                    default:
                      echo "Tidak ada status";
                      break;
                  } ?>


                   
                
                  <a class="btn btn-sm btn-primary" style="margin-bottom: 2%;" href="<?= site_url('Sekolah/edit/'). $b->id;?>">Edit</a>


                      </td>
                       
        <?php }?>
        </tbody>
       </table>
</div>


<?php if($this->session->flashdata('order_berhasil')): ?>
             <script type="text/javascript">
               let timerInterval
Swal.fire({
  title: 'Berhasil!',
  html: 'Data berhasil di Update!',
  icon: 'success'
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