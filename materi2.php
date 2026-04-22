<form method="post">
    Masukkan Angka : <input type="number" name="angka"><br>
    <input type="submit" value="Kirim">
</form>

<?php
if (isset($_POST['angka'])) {
    $data = $_POST['angka'];
    for($i = 1; $i<=$data; $i++){
        if ($i % 2 == 0) {
        echo "Angka $i adalah genap<br>";
    } else {
        echo "Angka $i adalah ganjil<br>";
    }
    }   
}
?>

<?php   
//Looping while dan do while

echo "<br><b>while loop</b><br>";

if (isset($_POST["angka"])) {
    $data = $_POST["angka"];
    $i = 1; 
    while ($i <= $data) {
        echo "nilai a adalah $i<br>";
        $i++;
    }
}

echo "<br><br><b>do while loop</b><br>";    
$a = 10;
do{
echo "nilai a adalah $a<br>";
$a--;
}while($a >= 5);

echo "<br><br><button><a href ='index.php'>Kembali Ke Menu Utama</a></button>";
?>
