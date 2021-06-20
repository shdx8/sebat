<?php 
include '../../conn.php';

// menangkap data id yang di kirim dari url
$id_pinjam = $_GET['id_pinjam'];


// menghapus data dari database
mysqli_query($koneksi,"delete from pinjam where id_pinjam='$id_pinjam'");

header("location:../history.php");

?>