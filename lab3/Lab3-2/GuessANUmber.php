<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        srand((double) microtime() * 10000000);
        $num = rand(0, 100);
        $guess = $_POST["guess"];
        $count = 0;
        print ("<br>");
        if (is_int($guess)) {
            if ($guess == $num) {
                print ("<font color=\"blue\"> You got it right!</font>");
            } elseif ($guess < $num) {
                $count++;
                print ("<font color=\"red\">Wrong! Please try a higher number.</font>");
                printf("You have guessed %d time(s)", $count);
            } elseif ($flip > $pick) {
                $count++;
                print ("<font color=\"red\">Wrong! Please try a lower number.</font>");
                printf("You have guessed %d time(s)", $count);
            }
        } else {
            print ("You must enter a number!");
        }
        ?>
    </body>
</html>
