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
    $query = "SELECT * FROM daftarstakeholder";
    $result = mysqli_query(koneksiDB(), $query);
    return $result;
}

function insertData($data) {
    $query = "INSERT INTO daftarstakeholder VALUES  (
    '".$data['id']. "',
    '".$data['biper']. "',
    '" . $data['namaperusahaan'] . "',
    '" . $data['jenisperusahaan'] . "',
    '" . $data['jenislaba']. "',
    '" . $data['profit'] . "',
    '" . $data['jumkar'] . "',
    '" . $data['tempat'] . "',
    '" . $data['tanggal'] . "',
    '" . $data['peran'] . "',
    '" . $data['notelpon'] . "',
    '" . $data['nofax'] . "',
    '" . $data['alamat'] . "',
    '" . $data['namaemail'] . "',
    '" . $data['endmail'] . "',
    '" . $data['thumb'] . "') ";

    $result = mysqli_query(koneksiDB(), $query);

    if (!$result) {
        return 0;
    } else {
        return 1;
    }
}
function deletestake($id) {
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "tpb";

    $conn = mysqli_connect($host, $username, $password, $db);
    // // ambil id
    $id = $_GET["id"];
    mysqli_query($conn, "DELETE FROM daftarstakeholder WHERE id = $id");
    return mysqli_affected_rows($conn);
}
 ?>