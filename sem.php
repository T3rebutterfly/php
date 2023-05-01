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
    $link = mysqli_connect('localhost', 'root', '', 'test');
    if(!$link) {
        die('Connection failed: '. mysqli_connect_error());
    }
    $sql = "SELECT artist_name FROM artists";
    $result = mysqli_query($link, $sql);

    while($row = mysqli_fetch_array($result)) {
        printf("Artist: %s<br />", $row['artist_name']);
    }
    mysqli_free_result($result);
    mysqli_close($link);
?>
</body>
</html>