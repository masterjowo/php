<?php
include '../koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM daftar_project WHERE id='$id'";
$sql = mysqli_query($koneksi,$query) or die ('gagal hapus'.$query);
header("location:Project Monitoring.php");
?>