<form action="" method="post">
    Username : <input type="text" name="username"><br>
    Password : <input type="password" name="password"><br>
    Nama : <input type="text" name="nama"><br>
    Email : <input type="text" name="email"><br>
    <input type="submit" value="Kirim data" name= "Kirim"><br>
</form>

<?php
include 'koneksi.php';
if (isset($_POST['Kirim'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $query = "INSERT INTO user (username,password,nama,email) VALUES ('$username', '$password', '$nama', '$email')";

    if (mysqli_query($koneksi, $query)){
        echo "<script>alert('Data berhasil ditambahkan'); window.location='materi4.php';</script>";
    } else{
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>

<table border="1" cellpading="10" cellspacing="0">
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>


    <?php
    $query = "SELECT * FROM user";
    $result = mysqli_query($koneksi, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td><a href='materi4.php?edit=". $row['id']."'>Edit</a>| <a href='materi4.php?hapus=" . $row['id'] ."'>Hapus</a> </td>";
        echo "</tr>";
    }
    function hapus_data($koneksi, $id) {
        $query = "DELETE FROM user WHERE id = $id";
        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Data berhasil dihapus'); window.location='materi4.php';</script>";
        } else {
            echo "<script>alert('Data gagal dihapus');</script>";
        }
    }

    if (isset($_GET['hapus'])) {
        hapus_data($koneksi, $_GET['hapus']);
    }
    ?>
</table>

<?php

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $query = "SELECT * FROM user WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    $username = $row['username'];
    $password = $row['password'];
    $nama = $row['nama'];
    $email = $row['email'];

    echo "<form action='' method='post'>";
    echo "Username : <input type='text' name='username' value='$username'><br>";
    echo "Password : <input type='password' name='password' value='$password'><br>";
    echo "Nama : <input type='text' name='nama' value='$nama'><br>";
    echo "Email : <input type='text' name='email' value='$email'><br>";
    echo "<input type='submit' value='Update data' name='update'><br>";
    echo "</form>";

    if (isset($_POST['update'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        
        $query = "UPDATE user SET username = '$username', password = '$password', nama = '$nama', email = '$email' WHERE id = $id";

        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Data berhasil diupdate'); window.location='materi4.php';</script>";
        } else {
            echo "<script>alert('Data gagal diupdate');</script>";
        }
    }
}
?>