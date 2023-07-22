<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<pre>";
    echo print_r($_POST);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $color = $_POST['color'];
        echo "YOUR FAVORITE COLOR IS " . $color;
    }


    ?>
</body>

</html>