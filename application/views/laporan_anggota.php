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
                <th>NIK</th>
                <th>Nama Anggota</th>
                <th>Instansi</th>
                <th>Simpanan Pokok</th>
                <th>Simpanan Wajib</th>
                <th>THR</th>
                <th>Pendidikan</th>
                <th>Rekreasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($semua as $b){
            ?>
            <tr>
              
                
                <td><?= $b->nik?></td>
                <td><?=$b->nama_anggota?></td>
                <td><?= $b->nama_sekolah?></td>
                <td><?php
                        $angka = $b->sim_pokok ;

                $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                echo $hasil_rupiah;?></td>
                <td><?php
                        $angka = $b->sim_wajib ;

                $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                echo $hasil_rupiah;?></td>
                <td>
                <?php
                        $angka = $b->thr ;

                $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                echo $hasil_rupiah;?>
                      </td>
                <td>
                <?php
                        $angka = $b->pendidikan ;

                $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                echo $hasil_rupiah;?>
                </td>
                <td>
                <?php
                        $angka = $b->rekreasi ;

                $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                echo $hasil_rupiah;?>
                </td>
                <td></td>
                
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