 <div class="card">
            <div class="card-header">
 <a href="user.php" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-700"> kembali </span>
                                    </a>
    </div>
    <div class="card-body">
    <form action="simpan_catatan.php" method="post">
        <div class="form-group">
            <font color="primary">
            <label><p class="text-dark"> Pilih Tanggal </p></label>
            <input type="text" required class="form-control" name="tanggal" value="<?php echo date("d-m-Y"); ?>" >
            </font>
        </div>         
        <div class="form-group">
            <font color="primary">
            <label><p class="text-dark"> Pilih Jam</p></label>
            <input type="text" required class="form-control" name="jam" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("h:i:sa"); ?>" >
            </font>
        </div>         
        <div class="form-group">
            <font color="primary">
            <label><p class="text-dark"> Pilih Lokasi</p></label>
            <input name="lokasi"type="text" required class="form-control" placeholder="Masukkan Lokasi">
            </font>
        </div>        
        <div class="form-group">
            <font color="primary">
            <label><p class="text-dark"> Suhu Tubuh</p></label>
            <input name="suhu"type="texy" required class="form-control" placeholder="Masukkan Suhu tubuh">
            </font>
        </div>        
        <div class="form-group">
            <font color="primary">
            <button type="submit" class="btn btn-info"> SIMPAN </button>
            <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
            </font>
        </div>
    </form>