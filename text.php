<!DOCTYPE html>
<html>

<body>

    <h1>My first PHP page For practice</h1>

    <!-- PHP Code Start -->
    <?php
    echo "Hello World!";                                            //My first comment
    echo "<h1>First Heading!!!</h1>";
    $color = "red";       #My first comment + Variable
    echo "Today Is " . $color . " Day"; /*My first comment multiple line with concatenation*/
    $x = 5;
    echo "<br> x =" . $x;
    function test()   //Function
    {
        global $x;
        echo "<br>Global Variable Is = " . $x; // global variable x=5

        $x = 15;
        echo "<br>Local Variable Is = " . $x; // Local Variable x=15

        static $x = 10;
        echo "<br>Static Variavle =" . $x;  // static x=10;
        $x++;                               // x=11
        echo "<br>Static ++ =" . $x;                     // x=11
    }

    test();

    #Echo/Print
    echo "<br>I Love Coding";
    echo "<br><h1>I Love Coding</h1>";
    echo ("<br>I Love Coding");
    echo "<br>", "I ", " Love", " Coding";

    print "<br>I Love Coding";
    print "<br><h1>I Love Coding</h1>";
    print("<br>I Love Coding");
    // print "<br>", "I ", " Love", " Coding";  //ERROR


    #== vs ===
    $x = '1';
    $y = 1;
    if ($x === $y) {            //=== check value + data type where, == check value
        echo "<br>True";
    } else {
        echo "<br>Flase<br>";
    }

    # data type check [Var_dump()]

    //$z = 'Toriqil';
    //$z = true;
    $z = [2, 3, 4, 5, 6];
    var_dump($z);
    $x = null;
    var_dump($x);

    #Single quatation vs double quatation
    $y = 5;
    echo "<br>Example is $y";
    echo '<br>Example is $Z';

    #string operation

    $a = "Toriqul Loves PHP";
    echo strlen($a);
    echo str_word_count($a);
    echo strrev($a);
    echo strpos('Toriqul Loves PHP', 'PHP');
    echo str_replace('PHP', 'Laravel', 'Toriqul Loves PHP');
    echo ("<br>".rand(10, 100));

    ?>

    <!-- PHP Code End -->



</body>

</html>