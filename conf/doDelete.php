<?php
// koneksi database
include 'connection.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];
$nama = $_GET['name'];

mysqli_query($conn, "insert into history(data,date) values('Data Hapus nama = $nama, id = $id', curdate() )");

// menghapus data dari database
mysqli_query($conn, "delete from inventory where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:../pages/stocks.php");
