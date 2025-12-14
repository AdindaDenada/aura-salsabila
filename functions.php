<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "praktek4");

function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($data) {
    global $conn;

    $Nama    = $data["Nama"];
    $Nim     = $data["Nim"];
    $Email   = $data["Email"];
    $Jurusan = $data["Jurusan"];
    $Gambar  = $data["Gambar"];
    
    
    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$Nama', '$Nim', '$Email', '$Jurusan', '$Gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus ($No) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE No = $No");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $No      = $data["No"];
    $Nama    = $data["Nama"];
    $Nim     = $data["Nim"];
    $Email   = $data["Email"];
    $Jurusan = $data["Jurusan"];
    $Gambar  = $data["Gambar"];

    $query = "UPDATE mahasiswa SET
                Nama = '$Nama',
                Nim = '$Nim',
                Email = '$Email',
                Jurusan = '$Jurusan',
                Gambar = '$Gambar'
            WHERE No = $No
            ";

     mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}