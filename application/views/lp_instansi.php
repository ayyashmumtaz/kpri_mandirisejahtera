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
    <h3>Rekap Tagihan Per Instansi</h3>
  
    <table id="s" class="display nowrap" style="width:100%">
        <thead>
            <tr>

                <th>Nama Sekolah</th>
                <th>Total Tagihan</th>
       
            </tr>
        </thead>
        <tbody>
        <div class="row">
    <div class="col-md-2">

        
    <select class="form-control" name="tgl" onchange="location = this.value;">

            <option <?php if ($this->uri->segment(3) == 'Januari') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Januari/'.$this->uri->segment(4));?>">Januari</option>
            <option <?php if ($this->uri->segment(3) == 'Februari') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Februari/'.$this->uri->segment(4));?>">Februari</option>
            <option <?php if ($this->uri->segment(3) == 'Maret') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Maret/'.$this->uri->segment(4));?>">Maret</option>
            <option <?php if ($this->uri->segment(3) == 'April') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/April/'.$this->uri->segment(4));?>">April</option>
            <option <?php if ($this->uri->segment(3) == 'Mei') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Mei/'.$this->uri->segment(4));?>">Mei</option>
            <option <?php if ($this->uri->segment(3) == 'Juni') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Juni/'.$this->uri->segment(4));?>">Juni</option>
            <option <?php if ($this->uri->segment(3) == 'Juli') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Juli/'.$this->uri->segment(4));?>">Juli</option>
            <option <?php if ($this->uri->segment(3) == 'Agustus') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Agustus/'.$this->uri->segment(4));?>">Agustus</option>
            <option <?php if ($this->uri->segment(3) == 'September') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/September/'.$this->uri->segment(4));?>">September</option>
            <option <?php if ($this->uri->segment(3) == 'Oktober') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Oktober/'.$this->uri->segment(4));?>">Oktober</option>
            <option <?php if ($this->uri->segment(3) == 'November') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/November/'.$this->uri->segment(4));?>">November</option>
            <option <?php if ($this->uri->segment(3) == 'Desember') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/Desember/'.$this->uri->segment(4));?>">Desember</option>     
          </select>
          
    </div>

    
    <div class="col-md-2">
    <select class="form-control" name="tgl" onchange="location = this.value;">
            <option <?php if ($this->uri->segment(4) == '2022') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/'.$this->uri->segment(3).'/2022');?>">2022</option>
            <option <?php if ($this->uri->segment(4) == '2023') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/'.$this->uri->segment(3).'/2023');?>">2023</option>
            <option <?php if ($this->uri->segment(4) == '2024') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/'.$this->uri->segment(3).'/2024');?>">2024</option>
            <option <?php if ($this->uri->segment(4) == '2025') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/'.$this->uri->segment(3).'/2025');?>">2025</option>
            <option <?php if ($this->uri->segment(4) == '2026') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/'.$this->uri->segment(3).'/2026');?>">2026</option>
            <option <?php if ($this->uri->segment(4) == '2027') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/'.$this->uri->segment(3).'/2027');?>">2027</option>
            <option <?php if ($this->uri->segment(4) == '2028') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/'.$this->uri->segment(3).'/2028');?>">2028</option>
            <option <?php if ($this->uri->segment(4) == '2029') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/'.$this->uri->segment(3).'/2029');?>">2029</option>
            <option <?php if ($this->uri->segment(4) == '2030') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/'.$this->uri->segment(3).'/2030');?>">2030</option>
            <option <?php if ($this->uri->segment(4) == '2031') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/'.$this->uri->segment(3).'/2031');?>">2031</option>
            <option <?php if ($this->uri->segment(4) == '2032') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/'.$this->uri->segment(3).'/2032');?>">2032</option>
            <option <?php if ($this->uri->segment(4) == '2033') { echo 'selected'; }?> value="<?= site_url('Laporan/rekap_instansi/'.$this->uri->segment(3).'/2033');?>">2033</option>
          </select>
          
    </div>

  
  
  
    </div>
          
            <?php
            foreach($sekolah as $b){
            ?>
            <tr>
              
       
                <td><?=$b->nama_sekolah?></td>
                <td><?php if ($b->total_tabungan == null) {
                    echo "Rp. 0";
                }else{
                    echo "Rp. ".number_format($b->total_tabungan,0,',','.');
                }?></td>
                
       
                       
        <?php }?>
        </tbody>
       </table>
</div>
