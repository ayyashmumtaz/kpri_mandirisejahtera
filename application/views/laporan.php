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
    <h3>Kartu Peranggota</h3>

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
            <td><a href="<?php echo site_url('Laporan/exportAnggota/Januari');?>" target="_blank" class="btn btn-sm btn-primary">Export</a></td>
          </tr>      
          <tr>
            <td>Februari</td>
            <td><a href="<?php echo site_url('Laporan/exportAnggota/Februari');?>" target="_blank" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
            <td>Maret</td>
            <td><a href="<?php echo site_url('Laporan/exportAnggota/Maret');?>" target="_blank" class="btn btn-sm btn-primary">Export</a></td>
         </tr>
          <tr>
              <td>April</td>
              <td><a href="<?php echo site_url('Laporan/exportAnggota/April');?>" target="_blank" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
              <td>Mei</td>
              <td><a href="<?php echo site_url('Laporan/exportAnggota/Mei');?>" target="_blank" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
              <td>Juni</td>
              <td><a href="<?php echo site_url('Laporan/exportAnggota/Juni');?>" target="_blank" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
              <td>Juli</td>
              <td><a href="<?php echo site_url('Laporan/exportAnggota/Juli');?>" target="_blank" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
              <td>Agustus</td>
              <td><a href="<?php echo site_url('Laporan/exportAnggota/Agustus');?>" target="_blank" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
              <td>September</td>
              <td><a href="<?php echo site_url('Laporan/exportAnggota/September');?>" target="_blank" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
              <td>Oktober</td>
              <td><a href="<?php echo site_url('Laporan/exportAnggota/Oktober');?>" target="_blank" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
              <td>November</td>
              <td><a href="<?php echo site_url('Laporan/exportAnggota/November');?>" target="_blank" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
          <tr>
              <td>Desember</td>
              <td><a href="<?php echo site_url('Laporan/exportAnggota/Desember');?>" target="_blank" class="btn btn-sm btn-primary">Export</a></td>
          </tr>
        </tbody>
       </table>
</div>
