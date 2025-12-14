<?php
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    //cek apakah data berhasil ditambahkan atau tidak
    if( tambah ($_POST)>0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
            ";
    }


}
?>
<!DOCTYPE html>
<Html>
<Head>
    <title>Tambah Data Mahasiswa</title>
</Head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    
    <form action="" method="post">
        <ul>
        </li>
        <li>
            <label for="Nama">Nama:</label>
            <input type="text" name="Nama" No="Nama">
        </li>
        <li>
            <label for="Nim">Nim:</label>
            <input type="text" name="Nim" No="Nim">
        </li>
        <li>
            <label for="Email">Email:</label>
            <input type="text" name="Email" No="Email">
        </li>
        <li>
            <label for="Jurusan">Jurusan:</label>
            <input type="text" name="Jurusan" No="Jurusan">
        </li>
        <li>
            <label for="Gambar">Gambar:</label>
            <input type="text" name="Gambar" No="Gambar">
        </li>
            <button type="submit" name="submit">Tambah Data!</button>
        </li>
        </ul>
    ></form>
</body>
</Html>