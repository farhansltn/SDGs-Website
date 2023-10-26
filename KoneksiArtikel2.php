<?php 

function koneksiDB() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "tpb";

    $conn = new mysqli($host, $username, $password, $db);
}
 ?>