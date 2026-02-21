<?php
$conn = new mysqli("localhost","user_db","password_db","nama_db");

if($conn->connect_error){
  die("Koneksi gagal");
}

$q = $conn->query("SELECT NOW() AS waktu");
$r = $q->fetch_assoc();

echo "Koneksi sukses : ".$r['waktu'];