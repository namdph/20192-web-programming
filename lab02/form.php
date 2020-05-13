<html>
    <head>
        <title>Receiving Input</title>
    </head>
    <body>
        <font size="5">Thank you for your reply</font>
        <?php
        $name = $_POST["name"];
        $class = $_POST["class"];
        $uni = $_POST["uni"];
        $hobby = $_POST["hobby"];
        print ("<br>Hello $name,");
        print ("<br>You are studying at $class, $uni");
        
        print ("<br>Your hobbies are <ul><li> $hobby</li></ul>");
        ?>
    </body>
</html>
