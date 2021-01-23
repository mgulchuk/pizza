<?php

    // Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    function hello($name=""){
        $msg = "<p>Hello";
        if($name != "")
            $msg .= ", $name";
        $msg .= "!</p>";
        echo $msg;
    }

    hello("Joe");
    hello();

    function crazy($num){
        if($num < 0)
            return false;
        else if($num < 10)
            return $num;
        else
            return "Crazy";
    }

    $val1 = crazy(-5);
    $val2 = crazy(8);
    $val3 = crazy(100);
    echo "$val1, $val2, $val3";

    //Define a constant
    define("TAX_RATE", 0.10);
    $total = 57.50 * TAX_RATE;

    $day = 5;
    switch($day){
        case 1:
            print "Mon";
            break;
        case 2:
            print "Tue";
            break;
        default:
            print "Invalid";

    }


    for($i=0; $i<5; $i++){
        echo "$i<br>";
    }

    $x = 0;
    while($x <= 5){
        echo "$x<br>";
        $x++;
    }

    echo ($x == 5) ? "tacos" : "pizza";

    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";

    function average($num1, $num2){
        $total = ($num1 + $num2) / 2;
        echo "<p>The total is $total</p>";
    }

    average(45, 90);

    function grade($percent){
        if($percent >= 90)
            return "<p>A</p>";
        else if($percent >= 80)
            return "<p>B</p>";
        else if($percent >= 70)
            return "<p>C</p>";
        else if($percent >= 60)
            return "<p>D</p>";
        else
            return "<p>F</p>";

    }

        grade(97);
    ?>