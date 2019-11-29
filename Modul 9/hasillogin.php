<?php
session_start();
echo "anda berhasil login sebagai ".$_SESSION['username']. "dan anda terdaftar sebagai ".$_SESSION['status'];
?>
<br>
silahkan logout dengan klik link <a href='logout.php'> disini </a>