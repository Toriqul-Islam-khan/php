<!DOCTYPE html>
<html>

<body>

    <h1>My first PHP page For practice</h1>

    <!-- PHP Code Start -->
    <?php
    echo "Hello World!";                                            //My first comment
    echo "<h1>Today naba is so far from me,I Love Her most!!!</h1>";
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

    //Echo/Print
    echo "<br>I Love Coding";
    echo "<br><h1>I Love Coding</h1>";
    echo ("<br>I Love Coding");
    echo "<br>", "I ", " Love", " Coding";

    print "<br>I Love Coding";
    print "<br><h1>I Love Coding</h1>";
    print("<br>I Love Coding");
    // print "<br>", "I ", " Love", " Coding";  //ERROR

    ?>
    <!-- PHP Code End -->



</body>

</html>