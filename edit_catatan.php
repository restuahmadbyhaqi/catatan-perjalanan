<div class="card">
    <div class="card-header">
    <a href="user.php" class="btn btn-btn-icon-split">
                                        <span class="icon text-white-700"> kembali </span>
                                    </a>
    </div>
    <div class="card-body">
    <?php
    $data = file('catatan.txt' , FILE_IGNORE_NEW_LINES);
    $id_catatan = $_GET['id_catatan'];
    foreach($data as $value){
    $pecah = explode('|',$value);
    if($pecah['0']==$id_catatan){
    ?>

    <form action="simpan_edit_catatan.php" method="post">
        <input type="hidden" name ="id_catatan" value="<?= $pecah['0']; ?>">
        <div class="form-group">
            <label><p class="text-dark">Pilih Tanggal</p></label>
            <input value="<?= $pecah['3']; ?>" name="tanggal" type="date" required class="form-control" placeholder="Masukkan Jam">
        </div> 
        <div class="form-group">
            <label><p class="text-dark">Pilih Jam</p></label>
            <input value="<?= $pecah['4']; ?>" name="jam"type="time" required class="form-control" placeholder="Masukkan Jam">
        </div>
        <div class="form-group">
            <label><p class="text-dark">Pilih Lokasi</p></label>
            <input value="<?= $pecah['5']; ?>" name="lokasi"type="text" required class="form-control" placeholder="Masukkan Lokasi">
        </div>
        <div class="form-group">
            <label><p class="text-dark">Suhu Tubuh</p></label>
            <input value="<?= $pecah['6']; ?>" name="suhu"type="texy" required class="form-control" placeholder="Masukkan Suhu tubuh">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary"> SIMPAN </button>
            <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
        </div>
    </form>
<?php } } ?>
    </div>
</div>  
