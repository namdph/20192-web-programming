<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class MethodTest {

            public function __call($name, $argument) {
                echo "Calling object method '$name' " . implode(', ', $argument) . "<br>";
            }

            public static function __callStatic($name, $argument) {
                echo "Calling static method '$name' " . implode(", ", $argument) . "<br>";
            }

        }

        $obj = new MethodTest;
        $obj->runTest('in object context');

        MethodTest::runTest('in static context');
        ?>
    </body>
</html>
