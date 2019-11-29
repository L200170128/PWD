<html>
    <head>
    <?php
        session_start();
        $tujuan=$_SESSION['status']
    ?>
    <script>
        document.location='<?php echo $tujuan ?>.php'
    </script>
    </head>
</html>