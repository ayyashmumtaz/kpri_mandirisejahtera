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
    <h3>Pengurus Koperasi</h3>
    <a class="btn btn-sm btn-primary" style="margin-bottom: 2%;" href="<?= site_url('Pengurus/tambah');?>">+ Tambah Anggota</a>

    <table id="s" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($anggota as $b){
            ?>
            <tr>
              
                <td><?= $b->id_pengurus?></td>
                <td><?= $b->nama?></td>
                <td><?= $b->username?></td>
                <td><?=$b->password?></td>
                <td><?php
                $status = $b->role;
                 switch ($status) {
                  case '2':
                    echo '<button class="btn btn-sm btn-danger">Admin</button>';
                    break;
                  case '1':
                    echo '<button class="btn btn-sm btn-primary">Superadmin</button>';
                    break;
                  
                  default:
                    // code...
                    break;
                } ?></td>
                
                  <td>
                  
                  <a class="btn btn-sm btn-primary" style="margin-bottom: 2%;" href="<?= base_url('Anggota/edit/'). $b->id_pengurus;?>">Edit</a>
                      </td>
                       
        <?php }?>
        </tbody>
       </table>
</div>