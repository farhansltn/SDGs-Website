<?php 
require 'koneksivideo.php';

// ambil id
$id = $_GET["id"];

if(deletevideo($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiVideo.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiVideo.php';
      </script>";
}


?>