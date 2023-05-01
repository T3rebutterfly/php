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
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $link = new mysqli('localhost', 'root', '', 'test');
        if(!$link) {
            die('Connection failed: ' . $mysqli->error());
        }
        $sql = "SELECT album_name FROM albums
                WHERE artist_id=?";
        if($stmt = $link->prepare($sql))
        {
            $stmt->bind_param('i', $_POST['artist']);
            $stmt->execute();
            $stmt->bind_result($album);
            while($stmt->fetch()) {
                printf("Album: %s<br />", $album);
            }
            $stmt->close();
        }
        $link->close();
    }
    else
    {
?>
    <form method="post">
        <label for="artist">Select an Artist:</label>
        <select name="artist">
            <option value="1">Bon Iver</option>
            <option value="2">Feist</option>
        </select>
        <input type="submit" />
    </form>
    <?php } ?>
</body>
</html>