<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>PHP Calculator</h1>
    <div class="">
        <form action="Calculator.php" method="POST">
            Number1 : <input type="text" name="number1" placeholder="Enter First Number" value="<?php echo $_POST['number1'] ?? null ?>">
            Number2 : <input type="text" name="number2" placeholder="Enter First Number" value="<?php echo $_POST['number2'] ?? null ?>">
            <div class="">

                <button type="submit" name="result" value="+">+</button>
                <button type="submit" name="result" value="-">-</button>
                <button type="submit" name="result" value="*">*</button>
                <button type="submit" name="result" value="/">/</button>
            </div>

        </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Number1 = $_POST['number1'];
        $Number2 = $_POST['number2'];
        $sign = $_POST['result'];
        if ($sign == '+') {
            echo "Result = " . $Number1 + $Number2;
        } else if ($sign == '-') {
            if ($Number1 < $Number2) {
                echo "Result = " . $Number2 - $Number1;
            } else {
                echo "Result = " . $Number1 - $Number2;
            }
        } else if ($sign == '*') {
            echo "Result = " . $Number1 * $Number2;
        } else if ($sign == '/') {
            echo "Result = " . $Number1 / $Number2;
        }
    }
    ?>
</body>

</html>