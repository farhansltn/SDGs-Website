<?php 
require 'koneksisubs.php';

// ambil id
$id = $_GET["id"];

if(deletesubs($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiSubs.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiSubs.php';
      </script>";
}


?>