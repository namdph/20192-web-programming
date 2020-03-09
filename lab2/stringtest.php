<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //variables 
        $nameq = "Christopher";
        $preference = "Milk Shake";
        //mix types
        $sum = "banana";
        //$sum = 1 + $x;
        print ("y=$sum");
        //concatenate
        $firstname = "John";
        $lastname = "Smith";
        $fullname = $firstname . $lastname;
        print ("Fullname=$fullname");
        $Fullname2 = "$FirstName $LastName";
        //string length
        $comments = "Good Job";
        $len = strlen($comments);
        print ("Length=$len");
        //trim
        $in_name = " Joe Jackson ";
        $name = trim($in_name);
        print ("name=$name$name");
        //lower upper
        $inquote = "Now Is The Time";
        $lower = strtolower($inquote);
        $upper = strtoupper($inquote);
        print ("upper=$upper lower=$lower");
        //substring
        $date = "12/25/2002";
        $month = substr($date, 0, 2);
        $day = substr($date, 3, 2);
        print ("Month=$month Day=$day");
        $year = substr($date, 6);
        print ("Year=$year");
        //done
        ?>
    </body>
</html>
