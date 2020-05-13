<html>
    <head>
        <meta charset="UTF-8">
        <title>Page</title>
    </head>
    <body>
        <?php
        include "Page.php";
        $testPage = new Page('AKB48 Group', date('2020'), 'AKB48');
        $testPage->addContent("<p align=\"center\">Japan's most sophisticated show</p>");
        echo $testPage->get();
        ?>
    </body>
</html>
