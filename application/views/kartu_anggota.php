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
    <h3>Laporan Peranggota</h3>

    <table border="1" style="width:100%">
        <thead>
            <tr>
            <th>Bulan</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <tr>
            <td>Januari</td>
            <td><a href="<?php echo site_url('Laporan/cetakAnggota/Januari');?>" class="btn btn-sm btn-primary">Export</a></td>
          </tr>      
          <tr>
            <td>Februari</td>
            <td><a href="<?php echo site_url('Laporan/cetakAnggota/Februari');?>" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
            <td>Maret</td>
            <td><a href="<?php echo site_url('Laporan/cetakAnggota/Maret');?>" class="btn btn-sm btn-primary">Export</a></td>
         </tr>
          <tr>
              <td>April</td>
              <td><a href="<?php echo site_url('Laporan/cetakAnggota/April');?>" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
              <td>Mei</td>
              <td><a href="<?php echo site_url('Laporan/cetakAnggota/Mei');?>" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
              <td>Juni</td>
              <td><a href="<?php echo site_url('Laporan/cetakAnggota/Juni');?>" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
              <td>Juli</td>
              <td><a href="<?php echo site_url('Laporan/cetakAnggota/Juli');?>" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
              <td>Agustus</td>
              <td><a href="<?php echo site_url('Laporan/cetakAnggota/Agustus');?>" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
              <td>September</td>
              <td><a href="<?php echo site_url('Laporan/cetakAnggota/September');?>" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
              <td>Oktober</td>
              <td><a href="<?php echo site_url('Laporan/cetakAnggota/Oktober');?>" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
              <td>November</td>
              <td><a href="<?php echo site_url('Laporan/cetakAnggota/November');?>" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
              <td>Desember</td>
              <td><a href="<?php echo site_url('Laporan/cetakAnggota/Desember');?>" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
        </tbody>
       </table>
</div>
