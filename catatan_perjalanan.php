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
                                            <th><font color="whit">No</font></th>
                                            <th><font color="whit">Tanggal</font></th>
                                            <th><font color="whit">Jam</font></th>
                                            <th><font color="whit">lokasi</font></th>
                                            <th><font color="whit">suhu</font></th>
                                            <th><font color="whit">Edit</font></th>
                                            <th><font color="whit">Hapus</font></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                 $no=1;
                                 $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                                 $user = $_SESSION['nik']."|".$_SESSION['nama_lengkap'];
                                 foreach($data as $value){
                                     $pecah = explode("|", $value);
                                     @$key = $pecah['1']."|".$pecah['2'];
                                     if($key==$user){
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $pecah['3']; ?></td>
                                            <td><?= $pecah['4']; ?></td>
                                            <td><?= $pecah['5']; ?></td>
                                            <td><?= $pecah['6']; ?></td>

                                            <td>
                                                <a href="?url=edit_catatan&id_catatan=<?= $pecah['0'] ?>" class="btn btn-warning">
                                                 Edit
                                             </a>
                                         </td>
                                         <td>
                                             <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus..?') "href = "hapus_catatan.php?id_catatan=<?= $pecah['0'] ?>" class= "btn btn-danger">
                                              Hapus
                                         </td>
                                        </tr>
                                    <?php } }  ?>
                                    </tbody>
                               </table>      
     </div>    
    </div>
</div>  
