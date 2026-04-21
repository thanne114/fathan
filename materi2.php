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

echo "<br><br><button><a href ='index.php'>Kembali Ke Menu Utama</a></button>";
?>