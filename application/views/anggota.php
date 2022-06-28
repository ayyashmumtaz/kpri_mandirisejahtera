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


<div class="container">
    <h3>Anggota Koperasi</h3>
    <a class="btn btn-sm btn-primary" style="margin-bottom: 2%;" href="<?= site_url('Anggota/tambah');?>">+ Tambah Anggota</a>

    <table id="s" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>ID Anggota</th>
                <th>NIK</th>
                <th>Sekolah</th>
              
                <th>Nama Anggota</th>
                <th>Tanggal Daftar</th>
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
                <td><?= $b->nik?></td>
                <td><?= $b->id_sekolah?></td>
                <td><?=$b->nama_anggota?></td>
                <td><?=$b->tgl_daftar?></td>
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
                  
                  <a class="btn btn-sm btn-primary" style="margin-bottom: 2%;" href="<?= base_url('Anggota/edit/'). $b->id_anggota;?>">Edit</a>
                      </td>
                       
        <?php }?>
        </tbody>
       </table>
</div>