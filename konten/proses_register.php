<?php
// Perintah untuk naik satu folder (keluar dari konten) lalu masuk ke folder koneksi
include "../koneksi/koneksi.php";

$mysql = "INSERT INTO register 
(namadep, namabel, username, password, usia, jk, ttl, email, notel) VALUES 
('$_POST[namadep]', '$_POST[namabel]', '$_POST[username]', '$_POST[password]', '$_POST[usia]', '$_POST[jk]', '$_POST[ttl]', '$_POST[email]', '$_POST[notel]')";

if(!mysqli_query($koneksi, $mysql)) {
    die (mysqli_error($koneksi));
}

// Perintah untuk kembali ke index.php yang ada di luar folder konten
echo "<script>alert('Selamat, anda telah terdaftar'); window.location.href='../index.php';</script>";

mysqli_close($koneksi);
?>