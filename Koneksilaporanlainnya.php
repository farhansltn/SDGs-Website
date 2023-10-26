<?php 

function koneksiDB() {
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "laporanta";

    $conn = mysqli_connect($host, $username, $password, $db);
    
    if(!$conn) {
        die("Koneksi Database Gagal : " .mysqli_connect_error());
    } else {
        return $conn;
    }
}

function selectAllData() {
    $query = "SELECT * FROM laporanutama";
    $result = mysqli_query(koneksiDB(), $query);
    return $result;
}

function insertData($data) {
    $query = "INSERT INTO laporanutama VALUES (
    '".$data['id']. "',    
    '".$data['nama']. "',
    '" . $data['email'] . "',
    '" . $data['tahun'] . "',
    '" . $data['namabuku'] . "',
    '" . $data['title'] . "','" . $data['size'] . "',
    '" . $data['ekstensi'] . "',
    '" . $data['berkas'] . "',
    '" . $data['penjelasan'] . "',
    '" . $data['thumb'] . "') ";

    $result = mysqli_query(koneksiDB(), $query);

    if (!$result) {
        return 0;
    } else {
        return 1;
    }
}
function delete5($id) {
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "laporanta";

    $conn = mysqli_connect($host, $username, $password, $db);
    // // ambil id
    $id = $_GET["id"];
    mysqli_query($conn, "DELETE FROM laporanutama WHERE id = $id");
    return mysqli_affected_rows($conn);
}
 ?>