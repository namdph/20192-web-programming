<html>
    <head>
        <title>Check User Information</title>
    </head>
    <body>
        <?php
            $email = $_POST['email'];
            $url = $_POST['url'];
            $phone = $_POST['phone'];
            if (preg_match('/^[A-Za-z0-9_]+@[A-Za-z0-9.]+\.[A-Za-z]{2,}$/', $email)){
                print "Valid email address: $email<br>";
            } else{
                print "INVALID email address: $email<br>";
            }
            if (preg_match('/^(http(s)?:\/\/)?[A-Za-z0-9\.]+\.+[A-Za-z]{2,}$/', $url)){
                print "Valid url address: $url<br>";
            } else{
                print "INVALID url address: $url<br>";
            }
            if (preg_match('/^[0|+84]+[0-9]{9}$/', $phone)){
                print "Valid phone number: $phone<br>";
            } else{
                print "INVALID phone number: $phone<br>";
            }
        ?>
    </body>
</html>