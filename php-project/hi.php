<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="php.css">
</head>

<body>
    <?php
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
    ?>
    <h1>Hi !! Welcome to my page.</h1>
    <h2>Your Email is : <?= $userEmail ?></h2>
    <h2>Your Password is : <?= $userPassword ?></h2>
    <div class="working-page">
        <h3>My Working Page:</h3>
        <ul>
            <li><a href="Calculator.php" target="_blank">PHP Calculator</a></li>
            <li><a href="form.php" target="_blank">PHP Form</a></li>
            <li><a href="loop.php" target="_blank">PHP Loop</a></li>
            <li><a href="array.php" target="_blank">PHP array</a></li>
        </ul>
    </div>

</body>

</html>