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
                <th>Total</th>
         
        </thead>
        <tbody>
        <?php
            foreach($user as $b){
            ?>
             <p>Instansi : <?=$b->nama_sekolah?></p>
        <div class="row">
     
             
    <div class="col-md-2">

    <select class="form-control" name="tgl" onchange="location = this.value;">
   
            <option <?php if ($this->uri->segment(4) == 'Januari') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Januari/'.$this->uri->segment(5));?>">Januari</option>
            <option <?php if ($this->uri->segment(4) == 'Februari') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Februari/'.$this->uri->segment(5));?>">Februari</option>
            <option <?php if ($this->uri->segment(4) == 'Maret') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Maret/'.$this->uri->segment(5));?>">Maret</option>
            <option <?php if ($this->uri->segment(4) == 'April') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/April/'.$this->uri->segment(5));?>">April</option>
            <option <?php if ($this->uri->segment(4) == 'Mei') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Mei/'.$this->uri->segment(5));?>">Mei</option>
            <option <?php if ($this->uri->segment(4) == 'Juni') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Juni/'.$this->uri->segment(5));?>">Juni</option>
            <option <?php if ($this->uri->segment(4) == 'Juli') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Juli/'.$this->uri->segment(5));?>">Juli</option>
            <option <?php if ($this->uri->segment(4) == 'Agustus') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Agustus/'.$this->uri->segment(5));?>">Agustus</option>
            <option <?php if ($this->uri->segment(4) == 'September') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/September/'.$this->uri->segment(5));?>">September</option>
            <option <?php if ($this->uri->segment(4) == 'Oktober') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Oktober/'.$this->uri->segment(5));?>">Oktober</option>
            <option <?php if ($this->uri->segment(4) == 'November') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/November/'.$this->uri->segment(5));?>">November</option>
            <option <?php if ($this->uri->segment(4) == 'Desember') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/Desember/'.$this->uri->segment(5));?>">Desember</option>     
          </select>
          
    </div>
    <?php } ?>

    <div class="col-md-2">
    <?php
            foreach($user as $b){
            ?>
            
    <select class="form-control" name="tgl" onchange="location = this.value;">
    <option value="" selected disabled>-- Pilih Tahun --</option>
            <option <?php if ($this->uri->segment(5) == '2022') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/'.$this->uri->segment(4).'/2022');?>">2022</option>
            <option <?php if ($this->uri->segment(5) == '2023') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/'.$this->uri->segment(4).'/2023');?>">2023</option>
            <option <?php if ($this->uri->segment(5) == '2024') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/'.$this->uri->segment(4).'/2024');?>">2024</option>
            <option <?php if ($this->uri->segment(5) == '2025') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/'.$this->uri->segment(4).'/2025');?>">2025</option>
            <option <?php if ($this->uri->segment(5) == '2026') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/'.$this->uri->segment(4).'/2026');?>">2026</option>
            <option <?php if ($this->uri->segment(5) == '2027') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/'.$this->uri->segment(4).'/2027');?>">2027</option>
            <option <?php if ($this->uri->segment(5) == '2028') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/'.$this->uri->segment(4).'/2028');?>">2028</option>
            <option <?php if ($this->uri->segment(5) == '2029') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/'.$this->uri->segment(4).'/2029');?>">2029</option>
            <option <?php if ($this->uri->segment(5) == '2030') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/'.$this->uri->segment(4).'/2030');?>">2030</option>
            <option <?php if ($this->uri->segment(5) == '2031') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/'.$this->uri->segment(4).'/2031');?>">2031</option>
            <option <?php if ($this->uri->segment(5) == '2032') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/'.$this->uri->segment(4).'/2032');?>">2032</option>
            <option <?php if ($this->uri->segment(5) == '2033') { echo 'selected'; }?> value="<?= site_url('Laporan/lihat_instansi/'.$b->id.'/'.$this->uri->segment(4).'/2033');?>">2033</option>
          </select>
          
    </div>
    <?php } ?>
  
  
    </div>
          

            <?php
            foreach($anggota as $b){
            ?>
          
            <tr>
              
                <td><?= $b->nama_anggota;?>
             </td>
                <td><?php
                        $angka = $b->angsuran ;

                $hasil_rupiah = "Rp " . number_format($b->total_tabungan,0,',','.');
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
