<?php
    $con=mysqli_connect("localhost", "root", "maria") or die("MariaDB 접속 실패");
    phpinfo();
    mysqli_close($con);
?>