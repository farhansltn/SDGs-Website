<?php 
require 'koneksiartikel.php';

// ambil id
$id = $_GET["id"];

if(deleteartikel($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiArtikel.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiArtikel.php';
      </script>";
}


?>