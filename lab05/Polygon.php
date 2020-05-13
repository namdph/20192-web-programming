<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include "Shape.php";
        abstract class Polygon extends Shape {
            abstract function getNumberOfSides();
        }
        ?>
    </body>
</html>
