
<?php 
require 'koneksi2.php';

// ambil id
$id = $_GET["id"];

if(delete3($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiLaporanTA2.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiLaporanTA2.php';
      </script>";
}


?>