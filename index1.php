<!DOCTYPE html>
<html>
<head>
<title>1</title>
<meta charset="utf-8" />
</head>
<body>
    <?php
    $mysql = new mysqli("localhost","mysql","mysql","123");
    $mysql->query("SET NAMES'utf8'");
    if($mysql->connect_error){
        echo 'Error Number: '.$mysql->connect_errno.'<br>';
        echo 'Error:'.$mysql->connect_error;
    } else {
        echo 'Host info:'.$mysql->host_info;
        $mysql->query("CREATE TABLE `users1` (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
            name VARCHAR(50) NOT NULL,
            bio TEXT NOT NULL
        )");
    }
    $mysql->close();
    ?>
</body>
</html>