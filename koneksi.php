<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_pw";

$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$koneksi) {
    die("koneksi gagal: " . mysqli_connect_error());
} else {
    echo "koneksi berhasil";
}

?>
