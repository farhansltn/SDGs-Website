<?php 
require 'koneksi4.php';

// ambil id
$id = $_GET["id"];

if(deletestake($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiDaftarStakeholders.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiDaftarStakeholders.php';
      </script>";
}


?>