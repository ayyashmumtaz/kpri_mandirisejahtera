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
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Angsuran</th>
                <th>Jasa</th>
        </thead>
        <tbody>
        <?php
            foreach($user as $b){
            ?>
            Nama : <?=$b->nama_anggota?>
            <p>Instansi : <?=$b->nama_sekolah?></p>
            <?php } ?>

            <?php
            foreach($anggota as $b){
            ?>
          
            <tr>
              
                <td><?= $b->tgl_simpan;?>
             </td>
                <td><?= $b->tahun;?>
                <td><?php
                        $angka = $b->angsuran ;

                $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                echo $hasil_rupiah;?></td>
                <td><?php
                        $angka = $b->jasa ;

                $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                echo $hasil_rupiah;?></td>

                       
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
