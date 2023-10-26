<?php 
require '../../includes/dbh.inc.php';

// ambil id
$id = $_GET["id"];

if(deleteuser($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'homepage.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'homepage.php';
      </script>";
}


?>