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
    $query = "SELECT * FROM artikel";
    $result = mysqli_query(koneksiDB(), $query);
    return $result;
}

function insertData($data) {
    $query = "INSERT INTO artikel VALUES (
     '".$data['id']. "',
    '" . $data['email']. "',
    '" . $data['nama'] . "',
    '" . $data['judulartikel'] . "',
    '" . $data['subjudul']. "',
    '" . $data['kategoriartikel'] . "',
    '" . $data['thumb'] . "',
    '" . $data['ekstensithumb'] . "',
    '" . $data['sizethumb'] . "',
    '" . $data['titlethumb'] . "',
    '" . $data['banner'] . "',
    '" . $data['ekstensibanner'] . "',
    '" . $data['sizebanner'] . "',
    '" . $data['titlebanner'] . "',
    '" . $data['link'] . "') ";

    $result = mysqli_query(koneksiDB(), $query);

    if (!$result) {
        return 0;
    } else {
        return 1;
    }
}function deleteartikel($id) {
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "tpb";

    $conn = mysqli_connect($host, $username, $password, $db);
    // // ambil id
    $id = $_GET["id"];
    mysqli_query($conn, "DELETE FROM artikel WHERE id = $id");
    return mysqli_affected_rows($conn);
}
 ?>