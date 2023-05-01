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
        $dbinfo = 'mysql:host=localhost;dbname=test';
        $user = 'root';
        $pass = '';
        $link = new PDO($dbinfo, $user, $pass);

        $sql = "SELECT album_name FROM albums WHERE artist_id=?";
        $stmt = $link->prepare($sql);
        if($stmt->execute(array($_POST['artist'])))
        {
            while($row = $stmt->fetch()) {
                printf("Album: %s<br />", $row['album_name']);
            }
            $stmt->closeCursor();
        }
    }
    else {
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