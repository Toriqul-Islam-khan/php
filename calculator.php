<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="calculator.php" method="POST">
        <h1 style="text-align:center;">To calculate two number Enter Number1 & Number2:</h1>

        Number1: <input name="number1" placeholder="Enter Number 1" value="<?php echo $_POST['number1'] ?? null ?>" required />
        Number2: <input name="number2" placeholder="Enter Number 2" value="<?php echo $_POST['number2'] ?? null ?>" required /><br><br>
        
        <button name="result" type="submit" value="+">+</button>
        <button name="result" type="submit" value="-">-</button>
        <button name="result" type="submit" value="*">*</button>
        <button name="result" type="submit" value="/">/</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // echo "<pre>";
        // print_r($_POST);
        $num1 = $_POST['number1'];
        $num2 = $_POST['number2'];
        if ($_POST['result'] == '+') {
            echo "<br>Result = " . $num1 + $num2;
        } elseif ($_POST['result'] == '-') {
            if ($num1 < $num2) {
                echo "<br>Result = " . $num2 - $num1;
            } else {
                echo "<br>Result = " . $num1 - $num2;
            };
        } elseif ($_POST['result'] == '*') {
            echo "<br>Result = " . $num1 * $num2;
        } elseif ($_POST['result'] == '/') {
            echo "<br>Result = " . $num1 / $num2;
        }
    }

    ?>
</body>

</html>