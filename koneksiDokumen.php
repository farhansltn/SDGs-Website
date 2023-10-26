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
    $query = "SELECT * FROM aturdokumen";
    $result = mysqli_query(koneksiDB(), $query);
    return $result;
}

function insertData($data) {
    $query = "INSERT INTO aturdokumen VALUES (
    '".$data['id']. "',
    '".$data['nama']. "',
    '" . $data['judul'] . "',
    '" . $data['tentang'] . "',
    '" . $data['tahun'] . "',
    '" . $data['title'] . "',
    '" . $data['size'] . "',
    '" . $data['ekstensi'] . "',
    '" . $data['berkas'] . "',
    '" . $data['link2'] . "') ";

    $result = mysqli_query(koneksiDB(), $query);

    if (!$result) {
        return 0;
    } else {
        return 1;
    }
}function deletedokumen($id) {
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "tpb";

    $conn = mysqli_connect($host, $username, $password, $db);
    // // ambil id
    $id = $_GET["id"];
    mysqli_query($conn, "DELETE FROM aturdokumen WHERE id = $id");
    return mysqli_affected_rows($conn);
}
 ?>