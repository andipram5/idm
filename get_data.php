<?php
$conn = new mysqli("localhost","root","phha8KKaFMraZOx7X4WYkJRJE6nlIrREM=XeAb9A5JTq","pos");

if($conn->connect_error){
  die("Koneksi gagal");
}

$q = $conn->query("SELECT NOW() AS waktu");
$r = $q->fetch_assoc();


echo "Koneksi sukses : ".$r['waktu'];
