<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-check</title>
    <link rel="stylesheet" href="php.css">
</head>

<body>
    <?php
    session_start();
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
    if ($userEmail == 'isttoriqulislamkhan@gmail.com' && $userPassword == '123456') {
        header("Location: option-page.php");
        exit();
    } else {
        echo "<h1>Email or passsword is incorrect</h1>";
    }
    $_SESSION["email"]=$userEmail;
    $_SESSION["password"]=$userPassword;
    ?>

</body>

</html>