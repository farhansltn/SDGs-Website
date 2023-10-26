<?php 
require 'koneksiprofil.php';

// ambil id
$id = $_GET["id"];

if(deleteprofil($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiProfil.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiProfil.php';
      </script>";
}


?>