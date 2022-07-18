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
            <?php
            foreach($sekolah as $b){
            ?>
            <tr>
              
       
                <td><?=$b->nama_sekolah?></td>
                <td><?php if ($b->angsuran == null) {
                    echo "Rp. 0";
                }else{
                    $total_semua = $b->total_pokok+$b->total_wajib+$b->total_thr+$b->total_pendidikan+$b->total_rekreasi+$b->total_angsuran+$b->total_jasa;
                    echo "Rp. ".number_format($total_semua,0,',','.');
                }?></td>
                
       
                       
        <?php }?>
        </tbody>
       </table>
</div>
