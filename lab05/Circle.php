<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require "Shape.php";
        class Circle extends Shape {
            public $radius;
            public function getArea() {
                return (pi() * $this->radius * $this->radius);
            }
        }
        ?>
    </body>
</html>
