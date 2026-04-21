<?php
echo "<b>day 1: materi variebel dan tipe data</b><br>";
echo "<br>";

echo "Hello!";
$nama = "Fathan";
$umur = 20;
$tinggi = 169;
$hobi = ["investieren"];

//output
echo "mein name ist $nama, ich bin $umur jahre alt, ich bin $tinggi cm gross, mein hobby ist $hobi[0]";
echo  "<br>";

echo "<br><b>day 2: operator dan kondisi if else</b><br>";
echo "<br>";

echo "<b>penjumlahan</b><br>";
$nilai1 = 80;
$nilai2 = 70;
$nilai3 = 60;
$nilai4 = 50;
$hasil = $nilai1 + $nilai2 + $nilai3 + $nilai4;

//output
echo "hasil dari $nilai1 + $nilai2 + $nilai3 + $nilai4 = $hasil";
echo "<br>";

echo "<b>pengurangan</b><br>";
$nilai1 = 80;
$nilai2 = 70;
$nilai3 = 60;
$nilai4 = 50;
$hasil = $nilai1 - $nilai2 - $nilai3 - $nilai4;

//output
echo "hasil dari $nilai1 - $nilai2 - $nilai3 - $nilai4 = $hasil";
echo "<br>";

echo "<b>perkalian</b><br>";
$nilai1 = 80;
$nilai2 = 70;
$nilai3 = 60;
$nilai4 = 50;
$hasil = $nilai1 * $nilai2 * $nilai3 * $nilai4;

//output
echo "hasil dari $nilai1 * $nilai2 * $nilai3 * $nilai4 = $hasil";
echo "<br>";

echo "<b>pembagian</b>";
$nilai1 = 80;
$nilai2 = 70;
$nilai3 = 60;
$nilai4 = 50;
$hasil = $nilai1 / $nilai2 / $nilai3 / $nilai4;

//output
echo "<br>hasil dari $nilai1 / $nilai2 / $nilai3 / $nilai4 = $hasil<br>";
echo "<br>";

echo "<b>pengkondisian</b><br>";
$nilai = 90;

if ($nilai >= 90) {
    echo "nilai anda A";
} else if ($nilai >= 80) {
    echo "nilai anda B";
} else if ($nilai >= 70) {
    echo "nilai anda C";
} else if ($nilai >= 60) {
    echo "nilai anda D";
} else {
    echo "nilai anda E";
}

echo "<br>";
$nilai = 85;

if ($nilai >= 90) {
    echo "nilai anda A";
} else if ($nilai >= 80) {
    echo "nilai anda B";
} else if ($nilai >= 70) {
    echo "nilai anda C";
} else if ($nilai >= 60) {
    echo "nilai anda D";
} else {
    echo "nilai anda E";
}

echo "<br>";
$nilai = 75;

if ($nilai >= 90) {
    echo "nilai anda A";
} else if ($nilai >= 80) {
    echo "nilai anda B";
} else if ($nilai >= 70) {
    echo "nilai anda C";
} else if ($nilai >= 60) {
    echo "nilai anda D";
} else {
    echo "nilai anda E";
}

echo "<br>";
$nilai = 65;

if ($nilai >= 90) {
    echo "nilai anda A";
} else if ($nilai >= 80) {
    echo "nilai anda B";
} else if ($nilai >= 70) {
    echo "nilai anda C";
} else if ($nilai >= 60) {
    echo "nilai anda D";
} else {
    echo "nilai anda E";
}

echo "<br>";
$nilai = 55;

if ($nilai >= 90) {
    echo "nilai anda A";
} else if ($nilai >= 80) {
    echo "nilai anda B";
} else if ($nilai >= 70) {
    echo "nilai anda C";
} else if ($nilai >= 60) {
    echo "nilai anda D";
} else {
    echo "nilai anda E";
}
echo"<br>";

echo "<br>";
echo "<b>ganjil genap</b><br>";
$nilai = 10;

if ($nilai % 2 == 0) {
    echo "nilai $nilai adalah genap";
} else {
    echo "nilai $nilai adalah ganjil";
}

$nilai = 11;

if ($nilai % 2 == 0) {
    echo "nilai $nilai adalah genap";
} else {
    echo "nilai $nilai adalah ganjil";
}

echo "<br><br><button><a href ='index.php'>Kembali Ke Menu Utama</a></button>";
echo "<br><button><a href ='materi2.php'>ke materi selanjutnya</a></button>";
?>