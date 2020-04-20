<html>
    <head>
        <?php
        $username = "username";
        $password = "password";
        $hostspec = "localhost";
        $database = "business_service";
        $dbtype = 'mysqli';
        ?> 
        <title>
            <?php
            $doc_title = 'Category Administration';
            echo "$doc_title\n";
            ?>
        </title>
    </head>
    <body>
        <h1>
            <?php
            echo "$doc_title\n";
            ?>
        </h1>
        <?php
        if (isset($_GET['Cat_ID'])) {
            $Cat_ID = $_GET['Cat_ID'];
            $Cat_Title = $_GET['Cat_Title'];
            $Cat_Desc = $_REQUEST['Cat_Desc'];
            $add_record = $_REQUEST['add_record'];
            $len_cat_id = strlen($_REQUEST['Cat_ID']);
            $len_cat_tl = strlen($_REQUEST['Cat_Title']);
            $len_cat_de = strlen($_REQUEST['Cat_Desc']);
            if ($add_record == 1) {
                if (($len_cat_id > 0) and ($len_cat_tl > 0) and ($len_cat_de > 0)) {
                    $sql = "insert into categories";
                    $sql .= " values ('$Cat_ID', '$Cat_Title', '$Cat_Desc')";
                    $connect = mysqli_connect($hostspec, $username, $password);

                    if (!$connect) {
                        die($connect->getMessage());
                    }
                    mysqli_select_db($connect, $database);
                    $result = mysqli_query($connect, $sql);
                    if ($result) {
                        print 'Inserted successfully';
                    } else {
                        print "Fail to insert";
                    }
                    $connect->close();
                } else {
                    echo "<p>Please make sure all fields are filled in ";
                    echo "and try again.</p>\n";
                }
            }
        }
        $connect = mysqli_connect($hostspec, $username, $password);
        if (!$connect) {
            die($connect->getMessage());
        }
        mysqli_select_db($connect, $database);
        $sql = "select * from categories";
        //$result = $db->query($sql);
        $result = mysqli_query($connect, $sql);
        if ($result) {
            
        } else {
            print 'Fail to select';
        }
        ?>
        <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <table>
                <tr><th bgcolor="#eeeeee">Cat ID</th>
                    <th bgcolor="#eeeeee">Title</th>
                    <th bgcolor="#eeeeee">Description</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_row($result)) {
                    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>\n";
                }
                $connect->close();
                ?>
                <tr><td><input type="text" name="Cat_ID"    size="15" maxlength="10" /></td>
                    <td><input type="text" name="Cat_Title" size="40" maxlength="128" /></td>
                    <td><input type="text" name="Cat_Desc"  size="45" maxlength="255" /></td>
                </tr>
            </table>
            <input type="hidden" name="add_record" value="1" />
            <input type="submit" name="submit" value="Add Category" />
        </form>
    </body>
</html>