<?php 
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
?>

<html>
<head>
    <title>MENGAKSES DATA SESSION</title>
</head>
<body>
    <?php
        $_SESSION['counter']++;
        $_SESSION['nama_pengunjung'] = 'Abdul';
        echo 'selamat datang '.$_SESSION['nama_pengunjung']. '<br>';
        echo 'anda telah mengunjungi halaman ini sebanyak '.$_SESSION['counter'].' kali.'; 
    ?>
</body>
</html>