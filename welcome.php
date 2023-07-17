<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a, h2{
            text-align: center;
            text-decoration: none;
            color: green;
            
        }
        a:hover{
            background-color: palevioletred;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstName = $_POST['F-name'];
        $lastName = $_POST['L-name'];
        $email = $_POST['email'];
        //$password=$_POST['password'];
        //echo $firstName.$lastName.$email.$password;
        echo "<h1>Login Successful.........<br></h1>";
        echo "Welcome " . $firstName . ' ' . $lastName . "<br>";
        echo 'Your Email is "' . $email .'"'."<br>";
    }
    ?>
    <h2><a href="calculator.php">PHP CALCULATOR</a></h2>



</body>

</html>