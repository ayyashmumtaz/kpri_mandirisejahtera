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
    <h3>Data Per Instansi</h3>

  
   
    <table id="s" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Nama Anggota</th>
                <th>Tahun</th>
                <th>Angsuran</th>
                <th>Jasa</th>
        </thead>
        <tbody>
        <div class="row">
    <div class="col-md-4">
    <?php
            foreach($user as $b){
            ?>
             <p>Instansi : <?=$b->nama_sekolah?></p>
    <select class="form-control" name="tgl" onchange="location = this.value;">
            <option <?php if ($this->uri->segment(4) == 'Januari') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Januari');?>">Januari</option>
            <option <?php if ($this->uri->segment(4) == 'Februari') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Februari');?>">Februari</option>
            <option <?php if ($this->uri->segment(4) == 'Maret') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Maret');?>">Maret</option>
            <option <?php if ($this->uri->segment(4) == 'April') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/April');?>">April</option>
            <option <?php if ($this->uri->segment(4) == 'Mei') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Mei');?>">Mei</option>
            <option <?php if ($this->uri->segment(4) == 'Juni') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Juni');?>">Juni</option>
            <option <?php if ($this->uri->segment(4) == 'Juli') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Juli');?>">Juli</option>
            <option <?php if ($this->uri->segment(4) == 'Agustus') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Agustus');?>">Agustus</option>
            <option <?php if ($this->uri->segment(4) == 'September') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/September');?>">September</option>
            <option <?php if ($this->uri->segment(4) == 'Oktober') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Oktober');?>">Oktober</option>
            <option <?php if ($this->uri->segment(4) == 'November') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/November');?>">November</option>
            <option <?php if ($this->uri->segment(4) == 'Desember') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Desember');?>">Desember</option>     
          </select>
          
    </div>
  
    </div>
            <?php } ?>

            <?php
            foreach($anggota as $b){
            ?>
          
            <tr>
              
                <td><?= $b->nama_anggota;?>
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
