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
    <h3>Export Data Per Instansi</h3>
    <table id="s" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Nama Instansi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($anggota as $b){
            ?>
            <tr>
              
                <td><?= $b->nama_sekolah?></td>

                <td>
                <a class="btn btn-sm btn-primary" style="margin-bottom: 2%;" href="<?= site_url('Laporan/lihat_instansi/'). $b->id;?>">Lihat Data</a>
                      </td>
                       
        <?php }?>
        </tbody>
       </table>
</div>

