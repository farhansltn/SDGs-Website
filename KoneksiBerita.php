<?php 

function koneksiDB() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "tpb";

    $conn = mysqli_connect($host, $username, $password, $db);
    
    if(!$conn) {
        die("Koneksi Database Gagal : " .mysqli_connect_error());
    } else {
        return $conn;
    }
}

function selectAllData() {
    $query = "SELECT * FROM berita";
    $result = mysqli_query(koneksiDB(), $query);
    return $result;
}

function insertData($data) {
    $query = "INSERT INTO berita VALUES (
    '".$data['id']. "',
    '" . $data['email']. "',
    '" . $data['nama'] . "',
    '" . $data['judulberita'] . "',
    '" . $data['pilar']. "',
    '" . $data['tanggal']. "',
    '" . $data['kategoriberita'] . "',
    '" . $data['thumb'] . "',
    '" . $data['ekstensithumb'] . "',
    '" . $data['sizethumb'] . "',
    '" . $data['titlethumb'] . "',
    '" . $data['banner'] . "',
    '" . $data['ekstensibanner'] . "',
    '" . $data['sizebanner'] . "',
    '" . $data['titlebanner'] . "',
    '" . $data['editor1'] . "') ";

    $result = mysqli_query(koneksiDB(), $query);

    if (!$result) {
        return 0;
    } else {
        return 1;
    }
}function deleteberita($id) {
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "tpb";

    $conn = mysqli_connect($host, $username, $password, $db);
    // // ambil id
    $id = $_GET["id"];
    mysqli_query($conn, "DELETE FROM berita WHERE id = $id");
    return mysqli_affected_rows($conn);
}
 ?>