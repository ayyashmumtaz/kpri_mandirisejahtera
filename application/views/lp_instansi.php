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
    <h3>Tagihan Per Instansi</h3>
  
    <table id="s" class="display nowrap" style="width:100%">
        <thead>
            <tr>

                <th>Nama Sekolah</th>
                <th>Total Tagihan</th>
       
            </tr>
        </thead>
        <tbody>
        <div class="row">
    <div class="col-md-4">

        
    <select class="form-control" name="tgl" onchange="location = this.value;">
            <option <?php if ($this->uri->segment(3) == 'Januari') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Januari');?>">Januari</option>
            <option <?php if ($this->uri->segment(3) == 'Februari') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Februari');?>">Februari</option>
            <option <?php if ($this->uri->segment(3) == 'Maret') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Maret');?>">Maret</option>
            <option <?php if ($this->uri->segment(3) == 'April') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/April');?>">April</option>
            <option <?php if ($this->uri->segment(3) == 'Mei') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Mei');?>">Mei</option>
            <option <?php if ($this->uri->segment(3) == 'Juni') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Juni');?>">Juni</option>
            <option <?php if ($this->uri->segment(3) == 'Juli') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Juli');?>">Juli</option>
            <option <?php if ($this->uri->segment(3) == 'Agustus') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Agustus');?>">Agustus</option>
            <option <?php if ($this->uri->segment(3) == 'September') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/September');?>">September</option>
            <option <?php if ($this->uri->segment(3) == 'Oktober') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Oktober');?>">Oktober</option>
            <option <?php if ($this->uri->segment(3) == 'November') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/November');?>">November</option>
            <option <?php if ($this->uri->segment(3) == 'Desember') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Desember');?>">Desember</option>     
          </select>
          
    </div>
  
    </div>
          
            <?php
            foreach($sekolah as $b){
            ?>
            <tr>
              
       
                <td><?=$b->nama_sekolah?></td>
                <td><?php if ($b->total_wajib == null) {
                    echo "Rp. 0";
                }else{
                    $total_semua = $b->total_pokok+$b->total_wajib+$b->total_thr+$b->total_pendidikan+$b->total_rekreasi+$b->total_angsuran+$b->total_jasa;
                    echo "Rp. ".number_format($total_semua,0,',','.');
                }?></td>
                
       
                       
        <?php }?>
        </tbody>
       </table>
</div>
