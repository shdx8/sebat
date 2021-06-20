<?php 
include '../../conn.php';

$id_pinjam = $_GET['id_pinjam'];
$status = 'selesai';

mysqli_query($koneksi,"update pinjam set status='$status' where id_pinjam='$id_pinjam'");

header("location:../history.php");

?>