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
    <h3>Data Simpanan</h3>
    <table id="s" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Bulan</th>
                <th>Simpanan Pokok</th>
                <th>Simpanan Wajib</th>
                <th>THR</th>
                <th>Pendidikan</th>
                <th>Rekreasi</th>
            </tr>
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
              
                <td><?php
                setlocale(LC_ALL, 'IND');
                $mydate = $b->tgl_simpan;
                echo date('F Y', strtotime($mydate));?></td>
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
