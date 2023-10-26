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
    $query = "SELECT * FROM testimoni";
    $result = mysqli_query(koneksiDB(), $query);
    return $result;
}

function insertData($data) {
    $query = "INSERT INTO testimoni VALUES (
    '" . $data['id'] . "',
    '" . $data['nama'] . "',
    '" . $data['email'] . "',
    '" . $data['notelp'] . "',
    '" . $data['penilaian'] . "',
    '" . $data['nilai'] . "',
    '" . $data['editor1'] . "') ";

    $result = mysqli_query(koneksiDB(), $query);

    if (!$result) {
        return 0;
    } else {
        return 1;
    }
}
function deletetestimoni($id) {
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "tpb";

    $conn = mysqli_connect($host, $username, $password, $db);
    // // ambil id
    $id = $_GET["id"];
    mysqli_query($conn, "DELETE FROM testimoni WHERE id = $id");
    return mysqli_affected_rows($conn);
}
 ?>