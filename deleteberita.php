<?php 
require 'koneksiberita.php';

// ambil id
$id = $_GET["id"];

if(deleteberita($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiBerita.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiBerita.php';
      </script>";
}


?>