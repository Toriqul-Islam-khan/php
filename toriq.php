<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <?php
    echo "Session variables are set.";
    echo "<pre>";
    echo print_r($_SESSION);
    //session_unset();
    //echo print_r($_SESSION);
    //session_destroy();
    //echo print_r($_SESSION);
    ?>

</body>

</html>