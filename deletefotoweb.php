<?php 
require 'koneksifotoweb.php';

// ambil id
$id = $_GET["id"];

if(deletefotoweb($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiFotoWeb.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiFotoWeb.php';
      </script>";
}


?>