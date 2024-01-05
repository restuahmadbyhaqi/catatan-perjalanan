<div class="card">
    <div class="card-header">
        <a href="user.php" class="btn btn-info btn-icon-split">
            <span class="icon text-white-700"> kembali </span>
        </a>
    </div>

    <div class="card-body bg-white">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center" style="color:black">No</th>
                        <th class="text-center" style="color:black">NIK</th>
                        <th class="text-center" style="color:black">Nama</th>
                        <th class="text-center" style="color:black">Tanggal</th>
                        <th class="text-center" style="color:black">Jam</th>
                        <th class="text-center" style="color:black">Lokasi</th>
                        <th class="text-center" style="color:black">Suhu</th>
                        <th class="text-center" style="color:black">Aksi</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php
                $no=1;
                $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                foreach($data as $value){
                    $pecah = explode("|", $value);
                    {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $pecah['1']; ?></td>
                        <td><?= $pecah['2']; ?></td>
                        <td><?= $pecah['3']; ?></td>
                        <td><?= $pecah['4']; ?></td>
                        <td><?= $pecah['5']; ?></td>
                        <td><?= $pecah['6']; ?></td>

                        <td class="text-center">
                            <a href="?url=edit_catatan&id_catatan=<?= $pecah['0'] ?>" class="btn btn-warning">
                                Edit
                            </a>
                            <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus..?') "href = "hapus_catatan.php?id_catatan=<?= $pecah['0'] ?>" class= "btn btn-danger">
                                Hapus
                            </a>
                        </td>
                        <!-- <td>
                            <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus..?') "href = "hapus_catatan.php?id_catatan=<?= $pecah['0'] ?>" class= "btn btn-danger">
                            Hapus
                        </td> -->
                    </tr>
                <?php } }  ?>
                </tbody>
            </table>      
        </div>    
    </div>
</div>  
