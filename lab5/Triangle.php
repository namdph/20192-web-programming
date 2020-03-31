<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require "Polygon.php";

        class Triangle extends Polygon {

            public $base;
            public $height;

            public function getArea() {
                return (($this->base * $this->height) / 2);
            }

            public function getNumberOfSides() {
                return (3);
            }

        }
        ?>
    </body>
</html>
