<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilguun</title>
</head>
<body>
<?php
    $link = new mysqli('localhost', 'root', '', 'test');
    if(!$link) {
        die('Холболт амжилтгүй бол: '. $link->error());
    }
    $sql = "SELECT artist_name FROM artists";
    $result = $link->query($sql);

    while($row = $result->fetch_assoc()) {
        printf("Artist: %s<br />", $row['artist_name']);
    }
    $result->close();
    $link->close();
?>
</body>
</html>