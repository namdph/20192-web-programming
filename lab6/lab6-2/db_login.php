<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
# parameters for connecting to the "business_service"
        $username = "root";
        $password = "12345";

        $hostspec = "localhost";
        $database = "business_service";

        $dbtype = 'mysqli';

# DSN constructed from parameters

        $dsn = "$dbtype://$username:$password@$hostspec/$database";

# Establish the connection

        $db = DB::connect($dsn);

        if (DB::isError($db)) {

            die($db->getMessage());
        }
        ?>
    </body>
</html>
