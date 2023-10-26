<?php 
require 'koneksidokumen.php';

// ambil id
$id = $_GET["id"];

if(deletedokumen($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiDokumen.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiDokumen.php';
      </script>";
}


?>