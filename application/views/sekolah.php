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
    <h3>List Sekolah</h3>
    <a class="btn btn-sm btn-primary" style="margin-bottom: 2%;" href="<?= site_url('Sekolah/tambah');?>">+ Tambah Sekolah</a>

    <table id="s" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>ID Sekolah</th>
                <th>Nama Sekolah</th>
                <th>Alamat</th>
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
                  <a class="btn btn-sm btn-primary" style="margin-bottom: 2%;" href="<?= site_url('Sekolah/edit/'). $b->id;?>">Edit</a>
                                    <a class="btn btn-sm btn-danger" style="margin-bottom: 2%;" href="<?= site_url('Sekolah/hapus/'). $b->id;?>">Hapus</a>

                      </td>
                       
        <?php }?>
        </tbody>
       </table>
</div>