<?php 
// koneksi database
include '../../conn.php';

// menangkap data yang di kirim dari form
$id_pinjam = $_POST['id_pinjam'];
$nama_peminjam = $_POST['nama_peminjam'];
$no_hp = $_POST['no_hp'];
$kabel = $_POST['cable'];
$total = $_POST['durasi'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$status = $_POST['status'];

// menginput data ke database
mysqli_query($koneksi,"insert into pinjam values('$id_pinjam', '$nama_peminjam', '$no_hp', '$kabel', '$total', '$tgl_pinjam', '$status')");

// mengalihkan halaman kembali ke index.php
header("location:../pinjam.php");

?>