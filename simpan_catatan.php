<?php
session_start();
if($_POST['suhu'] >37)
{
    echo"<script>alert('suhu anda terlalu tinggi, anda tidak dapat melakukan Perjalanan'); window.location.assign('simpan_catatan.php'); </script>";
}
else

$nik        = $_SESSION['nik'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$tanggal = $_POST['tanggal'];
$jam     = $_POST['jam'];
$lokasi  = $_POST['lokasi'];
$suhu    = $_POST['suhu'];
$id_catatan = rand(0, 100000);

$format = "\n$id_catatan|$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu";

//kita buka file config.txt
$file = fopen('catatan.txt','a');
fwrite($file, $format);

//tutup file config
fclose($file);

?>
<script type="text/javascript">
    alert('Catatan Perjalanan Telah Disimpan.');
    window.location.assign('user.php');
</script>