<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM artikel WHERE id = $id");
header("Location: artikel_admin.php");
