<html>
    <head>
        <title>Degree-Radian Converter</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <table>
                <tr>
                    <td>Enter value:</td>
                    <td><input type="text" name="value" size="10" maxlength="10"></td>
                    <td><input type="radio" name="mode" value="0">Radian</td>
                    <td><input type="radio" name="mode" value="1">Degree</td>
                </tr>
                <tr>
                    <td align="right"><input type="submit" value="Submit"></td>
                    <td align="left"><input type="reset" value="Reset"></td>
                </tr>
            </table>
            <?php
            function convert($value, $mode) {
                if ($mode == 1) {
                    print "<br>$value degrees = ";
                    $value = $value * pi() / 180;
                    print "$value radians";
                } else {
                    print "<br>$value radians = ";
                    $value = $value * 180 / pi();
                    print "$value degrees";
                }
            }
            if (isset($_GET['value'])) {
                $value = $_GET['value'];
                $mode = $_GET['mode'];
                convert($value, $mode);
            }
            ?>
        </form>
    </body>
</html>