<?php 
require 'koneksislider.php';

// ambil id
$id = $_GET["id"];

if(deleteslider($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiDaftarSlider.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiDaftarSlider.php';
      </script>";
}


?>