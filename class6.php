<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./class6.php" method="POST">
        <h1>Color using switch statement</h1>
        Color:<input type="text" name="color" placeholder="Enter Your Favorite Color" value="<?php echo $_POST['color'] ?? null ?>">
        <button type="submit">Submit</button>
    </form><br><br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $color = $_POST['color'];
        echo "YOUR FAVORITE COLOR IS " . strtoupper($color) . '<br><br>';
        switch ($color) {
            case "red":
                echo strtoupper("You Entered $color");
                break;
            case "pink":
                echo strtoupper("You Entered $color");
                break;
            case "green":
                echo strtoupper("You Entered $color");
                break;
            case "blue":
                echo strtoupper("You Entered $color");
                break;
        }
    }

    ?>
    <h2>PHP while loop</h2>
    <?php
    $x = 1;
    while ($x <= 20) {
        if ($x % 2 == 0) {
            echo ' ' . $x;
        }
        $x++;
    }
    ?>

    <h2>PHP do while loop</h2>
    <?php

    $x = 1;
    do {
        if ($x % 2 == 1) {
            echo ' ' . $x;
        }
        $x++;
    } while ($x <= 20)

    ?>
    <p>while এর ক্ষেত্রে শর্ত মানলেই ঢুকবে,আর do-while এর ক্ষেত্রে প্রথম বার শর্ত না দেখেই ঢুকবে এইটাই পার্থক্য ।</p>

    <?php
    /* php date and time function */

    echo "Today is " . date("d-m-y") . date("H:i:sa") . "  american timr<br>";


    $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
    echo $dt->format('F j, Y, g:i:sa') . " Bangladeshi time";
    ?>

    <!--class practice -->
    <?php
    session_start();

    $products = $_SESSION['pro'];
    // echo "<pre>";
    // echo print_r($products);
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>SL#</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $pro) {
            ?>
                <tr>
                    <td><?php echo $pro['Id'] ?></td>
                    <td><?php echo $pro['Title'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="create.php" target="_blank" style="text-decoration: none;font-size:xx-large;color:black;">Add New</a>
</body>

</html>