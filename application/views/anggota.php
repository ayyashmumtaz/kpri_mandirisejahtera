<script type="text/javascript">
    $(document).ready(function () {
    $('#s').DataTable({
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    });
});
</script>

               <?php if($this->session->flashdata('hapusBerhasil')): ?>
             <script type="text/javascript">
               let timerInterval
Swal.fire({
  title: 'Berhasil Hapus!',
  html: 'Data Berhasil dihapus!',
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
                    <?= $this->session->flashdata('hapusBerhasil') ?>
           
        <?php endif ?>

<div class="container">
    <h3>Anggota Koperasi</h3>
    <a class="btn btn-sm btn-primary" style="margin-bottom: 2%;" href="<?= site_url('Anggota/tambah');?>">+ Tambah Anggota</a>

    <table id="s" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>ID Anggota</th>
                <th>Sekolah</th>
                <th>NIK</th>
                <th>Nama Anggota</th>
                <th>Jabatan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($anggota as $b){
            ?>
            <tr>
              
                <td><?= $b->id_anggota?></td>
                <td><?= $b->nama_sekolah?></td>
                <td><?= $b->nik?></td>
                <td><?=$b->nama_anggota?></td>
                <td><?=$b->role?></td>
                <td><?php
                $status = $b->status;
                 switch ($status) {
                  case '0':
                    echo '<button class="btn btn-sm btn-danger">TIDAK AKTIF</button>';
                    break;
                  case '1':
                    echo '<button class="btn btn-sm btn-success">AKTIF</button>';
                    break;
                  
                  default:
                    // code...
                    break;
                } ?></td>
                
                  <td>
                  
                  <a class="btn btn-sm btn-primary"  href="<?= site_url('Anggota/edit/'). $b->id_anggota;?>">Edit</a>
                  <a class="btn btn-sm btn-danger"  href="<?= site_url('Anggota/hapus/'). $b->id_anggota;?>">Hapus</a>
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