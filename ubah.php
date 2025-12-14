<?php
require 'functions.php';

// Ambil No dari URL
$No = $_GET["No"];

// Ambil data mahasiswa berdasarkan No
$mhs = query("SELECT * FROM mahasiswa WHERE No = $No")[0];

if( isset($_POST["Submit"]) ) {

    if(ubah($_POST) > 0){
        echo "
            <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
           <script>
                alert('Data Gagal Diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Mahasiswa</title>
</head>
<body>

<h1>Ubah Data Mahasiswa</h1>

<form action="" method="post">
    <input type="hidden" name="No" value="<?= $mhs['No']; ?>">

    <ul>
        <li>
            <label for="Nama">Nama: </label>
            <input type="text" name="Nama" id="Nama" required value="<?= $mhs["Nama"]; ?>">
        </li>

        <li>
            <label for="Nim">Nim: </label>
            <input type="text" name="Nim" id="Nim" required value="<?= $mhs["Nim"]; ?>">
        </li>

        <li>
            <label for="Email">Email: </label>
            <input type="text" name="Email" id="Email" required value="<?= $mhs["Email"]; ?>">
        </li>

        <li>
            <label for="Jurusan">Jurusan: </label>
            <input type="text" name="Jurusan" id="Jurusan" required value="<?= $mhs["Jurusan"]; ?>">
        </li>

        <li>
            <label for="Gambar">Gambar: </label>
            <input type="text" name="Gambar" id="Gambar" required value="<?= $mhs["Gambar"]; ?>">
        </li>

        <li>
            <button type="submit" name="Submit">Ubah Data!</button>
        </li>
    </ul>

</form>

</body>
</html>