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
    $query = "SELECT * FROM subscriber";
    $result = mysqli_query(koneksiDB(), $query);
    return $result;
}

function insertData($data) {
    $query = "INSERT INTO subscriber VALUES (
    '" .$data['nama']. "',
    '" . $data['email'] . "',
    '" . $data['title'] . "',
    '".$data['bulan']. "') ";

    $result = mysqli_query(koneksiDB(), $query);

    if (!$result) {
        return 0;
    } else {
        return 1;
    }
}
function deletesubs($id) {
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "laporanta";

    $conn = mysqli_connect($host, $username, $password, $db);
    // // ambil id
    $id = $_GET["id"];
    mysqli_query($conn, "DELETE FROM subscriber WHERE id = $id");
    return mysqli_affected_rows($conn);
}
 ?>