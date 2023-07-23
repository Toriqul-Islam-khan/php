<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-calculator</title>
    <link rel="stylesheet" href="php.css">
</head>

<body>
    <!-- LogOut Section -->
    <div style="display: flex; justify-content:space-between;margin:20px;">
        <h1>PHP Calculator</h1>
        <button onclick="document.location='logout.php'" style="height: 30px;">LogOut</button>
    </div>
    <div style="width: 50%;height:50%;background-color:coral;margin:auto;padding-bottom: 80px;">
        <form action="Calculator.php" method="POST">
            Number1 : <input type="text" name="number1" placeholder="Enter First Number" value="<?php echo $_POST['number1'] ?? null ?>">
            Number2 : <input type="text" name="number2" placeholder="Enter First Number" value="<?php echo $_POST['number2'] ?? null ?>">

            <div style="margin-top:10px">
                <button type="submit" name="result" value="+" title="Addition">+</button>
                <button type="submit" name="result" value="-" title="Subtraction">-</button>
                <button type="submit" name="result" value="*" title="Multiplication">*</button>
                <button type="submit" name="result" value="/" title="Division">/</button>
            </div>
            <h2 style="text-align:center"><?php
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
            </h2>
        </form>
    </div>



</body>

</html>