
<?php
            foreach($anggota as $b){
            ?>
<div class="container" >
   
<table style="font-size: 10px; display:inline-block; margin-right:1%">

        <tbody>
  <tr>
    <td rowspan="4"><img src="<?= base_url('assets/img/logo.png');?>" alt="" height="50"></td>
    <td colspan="3"><strong>Koperasi Pegawai Republik Indonesia</strong></td>
   
  </tr>      
  <tr>
    <td colspan="1"><strong>Mandiri Sejahtera</strong></td>
   
  </tr>   
  <tr>
    <td colspan="3"><small>Kecamatan Klapanunggal Kabupaten Bogor</small></td>
   
  </tr>   
  <tr>
    <td colspan="3"><small>BH. 9512A/PAD/BH/KDK.105/X/2004 Tgl 19/10/2004</small></td>
   
  </tr> 
  <tr>
        <td colspan="3">_____________________________________________________________</td>
    
    <tr>
  <tr>
    <td>NIK</td>
    <td>:</td>
    <td><?=$b->nik?></td>

  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><?=$b->nama_anggota?></td>
 </tr>
  <tr>
      <td>Instansi</td>
      <td>:</td>
      <td><?=$b->nama_sekolah?></td>
  </tr>
  <tr>
      <td>Bulan</td>
      <td>:</td>
      <td><?=$b->tgl_simpan?></td>
  </tr>
  
  <tr>
      <td colspan="2"><strong><u>Keadaan Bulan Lalu</u><strong></td>
  </tr>
  <tr>
      <td>Simpanan Pokok</td>
      <td>:</td>
      <td><?php if ($b->sim_pokok == null) {
                    echo "Rp. 0";
                }else{
                    echo "Rp. ".number_format($b->total_sim_pokok,0,',','.');
                }?></td>
  </tr>
  <tr>
      <td>Simpanan Wajib</td>
      <td>:</td>
        <td><?php if ($b->sim_wajib == null) {
                        echo "Rp. 0";
                    }else{
                        echo "Rp. ".number_format($b->total_sim_wajib,0,',','.');
                    }?></td>
  </tr>
  <tr>
      <td>Tabungan Hari Raya</td>
      <td>:</td>
        <td><?php if ($b->thr == null) {
                        echo "Rp. 0";
                    }else{
                        echo "Rp. ".number_format($b->total_thr,0,',','.');
                    }?></td>
  </tr>
  <tr>
      <td>Tabungan Pendidikan</td>
      <td>:</td>
        <td><?php if ($b->pendidikan == null) {
                        echo "Rp. 0";
                    }else{
                        echo "Rp. ".number_format($b->total_pendidikan,0,',','.');
                    }?></td>
  </tr>
  <tr>
      <td>Tabungan Rekreasi</td>
      <td>:</td>
        <td><?php if ($b->rekreasi == null) {
                        echo "Rp. 0";
                    }else{
                        echo "Rp. ".number_format($b->total_rekreasi,0,',','.');
                    }?></td>
  </tr>
  <tr>
      <td>Pinjaman Bulan Lalu</td>
      <td>:</td>
        <td><?php if ($b->angsuran == null) {
                        echo "Rp. 0";
                    }else{
                        echo "Rp. ".number_format($b->total_angsuran+$b->total_jasa,0,',','.');
                    }?></td>
  </tr>
  <tr>
      <td>Pinjaman Bulan Ini</td>
      <td>:</td>
        <td><?php if ($b->angsuran == null) {
                        echo "Rp. 0";
                    }else{
                        echo "Rp. ".number_format($b->total_angsuran+$b->total_jasa,0,',','.');
                    }?></td>
  </tr>
  <tr>
      <td>Cicil/Tutup Pinjaman</td>
      <td>:</td>
        <td><?php if ($b->angsuran == null) {
                        echo "Rp. 0";
                    }else{
                        echo "Rp. ".number_format($b->total_angsuran+$b->total_jasa,0,',','.');
                    }?></td>
  </tr>
  <tr>
      <td>Total Pinjaman</td>
      <td>:</td>
        <td><?php if ($b->angsuran == null) {
                        echo "Rp. 0";
                    }else{
                        echo "Rp. ".number_format($b->total_angsuran+$b->total_jasa,0,',','.');
                    }?></td>
  </tr>
  <tr>
      <td colspan="2"><strong><u>Tagihan Bulan Ini</u><strong></td>
  </tr>
    <tr>
    <tr>
      <td>Simpanan Pokok</td>
      <td>:</td>
      <td>Rp. 0</td>
  </tr>
  <tr>
      <td>Simpanan Wajib</td>
      <td>:</td>
        <td><?php if ($b->sim_wajib == null) {
                        echo "Rp. 0";
                    }else{
                        echo "Rp. ".number_format($b->sim_wajib,0,',','.');
                    }?></td>
  </tr>
  <tr>
      <td>Tabungan Hari Raya</td>
      <td>:</td>
        <td><?php if ($b->thr == null) {
                        echo "Rp. 0";
                    }else{
                        echo "Rp. ".number_format($b->thr,0,',','.');
                    }?></td>
  </tr>
  <tr>
      <td>Tabungan Pendidikan</td>
      <td>:</td>
        <td><?php if ($b->pendidikan == null) {
                        echo "Rp. 0";
                    }else{
                        echo "Rp. ".number_format($b->pendidikan,0,',','.');
                    }?></td>
  </tr>
  <tr>
      <td>Tabungan Rekreasi</td>
      <td>:</td>
        <td><?php if ($b->rekreasi == null) {
                        echo "Rp. 0";
                    }else{
                        echo "Rp. ".number_format($b->rekreasi,0,',','.');
                    }?></td>
  </tr>

    <tr>
        <td>Jasa</td>
        <td>:</td>
            <td><?php if ($b->jasa == null) {
                            echo "Rp. 0";
                        }else{
                            echo "Rp. ".number_format($b->jasa,0,',','.');
                        }?></td>
    </tr>
    <tr>
        <td colspan="3">_____________________________________________________________</td>
    
    <tr>
        <td>Jumlah</td>
        <td>:</td>
            <td><?php if ($b->angsuran == null) {
                            echo "Rp. 0";
                        }else{
                            echo "Rp. ".number_format($b->sim_wajib+$b->sim_pokok+$b->thr+$b->pendidikan+$b->rekreasi+$b->angsuran+$b->jasa,0,',','.');
                        }?></td>
    </tr>

        <td>
            
        </td>
        <td></td>
        <td>Klapanunggal, <?= date('d-m-Y')?></td>
    </tr>

    <tr>
        <td>
            Ketua KPRI
        </td>
        <td></td>
        <td>Bendahara</td>

    </tr>
    <tr>
        <td><br>
    
    <br>
<br></td>
    </tr>
    <tr>
        <td>H. Dadang Kusnadi, S. Pd</td>
<td></td>
<td>Karsih, S.Pd</td>
    </tr>
    <tr>
        <td>NIK. 059</td>
        <td></td>
        <td>NIK. 084</td>
    </tr>
</tbody>
<?php }?>
       </table>
</div>
