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
                <td><?= $b->id_sekolah?></td>
                <td><?=$b->nama_anggota?></td>
                <td><?=$b->tgl_daftar?></td>
                <td><?php
                $status = $b->status;
                 switch ($status) {
                  case '0':
                    echo '<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalYakin">TIDAK AKTIF</button>';
                    break;
                  case '1':
                    echo '<button class="btn btn-sm btn-success">AKTIF</button>';
                    break;
                  
                  default:
                    // code...
                    break;
                } ?></td>
                
                  <td>
                  
                  <a class="btn btn-sm btn-primary"  href="<?= base_url('Anggota/edit/'). $b->id_anggota;?>">Edit</a>
                  <a class="btn btn-sm btn-danger" href="<?= base_url('Anggota/hapus/'). $b->id_anggota;?>">Hapus</a>
                      </td>
                       
        <?php }?>
        </tbody>
       </table>
</div>

<div class="modal fade" id="modalYakin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Status Anggota?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Ya" Jika kamu ingin mengubah status anggota.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('Anggota/aktifkan');?>">Ya</a>
                </div>
            </div>
        </div>
    </div>
