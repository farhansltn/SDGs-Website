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
    $query = "SELECT * FROM tpb";
    $result = mysqli_query(koneksiDB(), $query);
    return $result;
}

function insertData($data) {
    $query = "INSERT INTO tpb VALUES ( 
    '" . $data['id'] . "', 
    '" . $data['namatpb'] . "',
    '" . $data['namapilar'] . "',
    '" . $data['thumbnail'] . "',
    '" . $data['link'] . "',
    '" . $data['size'] . "',
    '" . $data['ekstensi'] . "',
    '" . $data['linkbanner'] . "',
    '" . $data['ekstensibanner'] . "',
    '" . $data['ekstensibanneratas'] . "',
    '" . $data['banner'] . "',
    '" . $data['banneratas'] . "',
    '" . $data['linkbanneratas'] . "', 
    '" . $data['editor1'] . "',
    '" . $data['editor2'] . "',
    '" . $data['editor3'] . "') ";

    $result = mysqli_query(koneksiDB(), $query);

    if (!$result) {
        return 0;
    } else {
        return 1;
    }
}function deletetpb($id) {
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "laporanta";

    $conn = mysqli_connect($host, $username, $password, $db);
    // // ambil id
    $id = $_GET["id"];
    mysqli_query($conn, "DELETE FROM tpb WHERE id = $id");
    return mysqli_affected_rows($conn);
}
 ?>