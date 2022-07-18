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
    <h3>Data Angsuran</h3>
    <table id="s" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>ID Anggota</th>
                <th>Sekolah</th>
              
                <th>Nama Anggota</th>

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
                <td><?=$b->nama_anggota?></td>
                <td>
                <a class="btn btn-sm btn-primary" style="margin-bottom: 2%;" href="<?= site_url('Angsuran/lihat/'). $b->id_anggota;?>">Lihat Data</a>
                      </td>
                       
        <?php }?>
        </tbody>
       </table>
</div>

