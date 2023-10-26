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
    $query = "SELECT * FROM pilartpb";
    $result = mysqli_query(koneksiDB(), $query);
    return $result;
}

function insertData($data) {
    $query = "INSERT INTO pilartpb VALUES ( 
    '" . $data['id'] . "',
    '" . $data['namatpb'] . "',
    '" . $data['link'] . "',
    '" . $data['size'] . "',
    '" . $data['ekstensi'] . "',
    '" . $data['thumbnail'] . "',
    '" . $data['linkbanner'] . "',
    '" . $data['sizebanner'] . "',
    '" . $data['ekstensibanner'] . "',
    '" . $data['banner'] . "',
    '" . $data['editor1'] . "',
    '" . $data['editor2'] . "',
    '" . $data['editor3'] . "') ";

    $result = mysqli_query(koneksiDB(), $query);

    if (!$result) {
        return 0;
    } else {
        return 1;
    }
}
function deletepilartpb($id) {
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "tpb";

    $conn = mysqli_connect($host, $username, $password, $db);
    // // ambil id
    $id = $_GET["id"];
    mysqli_query($conn, "DELETE FROM pilartpb WHERE id = $id");
    return mysqli_affected_rows($conn);
}
 ?>