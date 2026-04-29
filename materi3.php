<?php

function sapa($nama) {
    echo "Halo, $nama!<br>";
}

sapa("Budi");
sapa("Citra");
sapa("Doni");


echo "<br><br><b>Kalkulator Menggunakan Function</b><br>";
function kalkulator($a, $b,$op){
    if($op == "+") {
        return $a + $b;
    }
    else if($op == "-") {
        return $a - $b;
    }
    else if($op == "*") {
        return $a * $b;
    }
    else if($op == "/") {
        return $a / $b;
    }
}

?>

<form action="" method="post">
    <input type="text" name="angka1">
    <input type="text" name="op">
    <input type="text" name="angka2">
    <input type="submit" value="Hitung">
</form>

<?php
if (isset($_POST['angka1']) && isset($_POST['angka2']) && isset($_POST['op'])) {
    $angka1 = $_POST['angka1'];
    $op = $_POST['op'];
    $angka2 = $_POST['angka2'];
    $hasil = kalkulator($angka1, $angka2, $op);
    echo "Hasil: $hasil<br>";
}  

echo "<br><br><b>Login Menggunakan Function</b><br>";
function login($username, $password){
    
    if($username == "admin" && $password == "admin") {
        return "Login berhasil";
    } else {
        return "Login gagal";
    }
}
?>

<form action="" method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit" value="Login">
</form>

<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hasil = login($username, $password);
    echo "$hasil";
}

echo "<br><br><button><a href ='index.php'>Kembali Ke Menu Utama</a></button>";
echo "<br><button><a href ='materi4.php'>ke materi selanjutnya</a></button>";
?>