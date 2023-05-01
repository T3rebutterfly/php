<!DOCTYPE html>
<html>
<head>
<title>1</title>
<meta charset="utf-8" />
</head>
<body>
    <h1>MYSQL</h1>
    <?php
    $mysql = new mysqli("localhost","mysql","mysql","123");
    $mysql->query("SET NAMES'utf8'");

    $mysql->query("INSERT INTO `users1` (`name`,`bio`) VALUES ('John','he is 20')"); 
    $mysql->query("INSERT INTO `users1` (`name`,`bio`) VALUES ('Jack','he is 21')");
    for($i=1; $i<=5; $i++) {
        $name = "Bob #".$i;
        $Age= "He is 2".$i;
        $mysql->query("INSERT INTO `users1`(`name`,`bio`) VALUES ('$name','$Age')");
    }
    $mysql->close();
    ?>
</body>
</html>