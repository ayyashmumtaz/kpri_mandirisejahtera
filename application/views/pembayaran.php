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

               <?php if($this->session->flashdata('hapusBerhasil')): ?>
             <script type="text/javascript">
               let timerInterval
Swal.fire({
  title: 'Berhasil Hapus!',
  html: 'Data Berhasil dihapus!',
  icon: 'success',
  timer: 1500,
  
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
  },
  willClose: () => {
    clearInterval(timerInterval)
  }

})
            </script>
                    <?= $this->session->flashdata('hapusBerhasil') ?>
           
        <?php endif ?>

<div class="container">
    <h3>Data Pinjaman</h3>

    <table id="s" class="display nowrap" style="width:100%">
        <thead>
            <tr>
            <th>NIK</th>
            <th>Bulan Pembayaran</th>
                <th>Nama Anggota</th>
              
                <th>Jumlah Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($anggota as $b){
            ?>
            <tr>
            <td><?= $b->nik?></td>
            <td><?= $b->tgl_simpan?></td>
                <td><?= $b->nama_anggota?></td>
                
                <td><?php
                $angka = $b->jumlah;

                $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                echo $hasil_rupiah;
               ?></td>
               

                
                 
                       
        <?php }?>
        </tbody>
       </table>
</div>





    
    <?php if($this->session->flashdata('order_berhasil')): ?>
             <script type="text/javascript">
               let timerInterval
Swal.fire({
  title: 'Berhasil!',
  html: 'Pembayaran Berhasil!',
  icon: 'success',
  timer: 1500,
  
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
  },
  willClose: () => {
    clearInterval(timerInterval)
  }

})
            </script>
                    <?= $this->session->flashdata('order_berhasil') ?>
           
        <?php endif ?>