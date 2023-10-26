<?php 
require 'koneksiTestimoni.php';

// ambil id
$id = $_GET["id"];

if(deletetestimoni($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiTestimoni.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiTestimoni.php';
      </script>";
}


?>