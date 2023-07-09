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
    echo ("<br>" . rand(10, 100));

    #constant

    define("university", "<br>Jahangirnagar university"); //case insensitive true
    echo university;

    define("FriendsName", ["Sakib", "Tomal", "Mamun", "Jisan"]);
    echo ("<br>" . FriendsName[1]);

    #operators
    $x = 3;
    $y = 4;
    echo "<br>" . $x ** $y;
    echo "<br>";

    $x = 5;
    $y = 10;
    echo ($x <=> $y);
    echo "<br>";

    $x = 3;
    $y = 3;
    echo ($x <=> $y);
    echo "<br>";

    $x = 3;
    $y = 2;
    echo ($x <=> $y);
    echo "<br>";

    echo $x++ . "<br>"; //3
    echo ++$x . "<br>"; //5
    echo $x-- . "<br>"; //5
    echo --$x . "<br>"; //3

    $text1 = 'Toriqul';
    $text2 = ' Islam';
    echo $text1 . $text2; //concatenation
    echo "<br>";
    echo $text1 .= $text2; //concatenation+assign
    echo "<br>";
    echo $text1; // Toriqul islam
    echo "<br>";

    #Conditionals
    $a = 10;            //If-else
    $b = 12;
    if ($a > $b) {
        echo "A is greater than B";
    } elseif ($a === $b) {
        echo "A is equal to B";
    } else {
        echo "B is greater than A";
    }
    echo "<br>";

    echo "<br>";
    echo "Choose Food Item From Beriyani,Fuchka,Ice-cream!!!"; // Switch
    echo "<br>";
    $food = "Ice-cream";
    echo "<br>";
    switch ($food) {
        case "Beriyani":
            echo "Your Favorite Food is Beriyani";
            break;
        case "Fuchka":
            echo "Your Favorite Food is Fuchka";
            break;
        case "Ice-cream":
            echo "Your Favorite Food is Ice-cream";
            break;
    }

    /*
    #While loop
    $x = 1;
    while ($x <= 10) {
        echo "<br>" . "$x I Love PHP using while loop" . "<br>";
        $x++;
    }
    #do....while

    $x = 11;
    do {
        echo "<br>" . "$x I Love PHP using Do....While loop" . "<br>";
        $x++;
    } while ($x <= 20);
    #Foor loop
    for ($x = 21; $x <= 30; $x++) {
        echo "<br>" . "$x I Love PHP using For loop" . "<br>";
    }

    */
    #Function
    function familyMember($name, $Age = 50) //Default age
    {
        echo "<br>My name is $name and Age is $Age<br>";
    }
    familyMember("Toriqul", "10");
    familyMember("Islam", 20); //don't need to declare data type
    familyMember("Pranto",);

    function add(float $a, float $b)
    {
        $sum = $a + $b;
        return (int)($sum);
    }
    echo "<br>" . add(5.2, 7.2);
    ?>


    <!-- PHP Code End -->



</body>

</html>