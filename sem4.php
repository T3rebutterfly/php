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
    $dbinfo = 'mysql:dbname=test;host=localhost';$user='root'; $pass = '';
    try {
        $db = new PDO($dbinfo, $user, $pass);
    } catch(PDOException $e){
        echo 'Connection failed: ', $e->getMessage();
    }
    $sql = "SELECT entry FROM entry_pages WHERE page='Blog'";
    $entries = NULL;
    foreach($db->query($sql) as $row) {
        $sql2 = "SELECT text FROM entries WHERE page='$row[entry]'";
        foreach($db->query($sql) as $row2) {
            $entries[] = array($row['page'], $row2['entry']);
        }
    }
    print_r($entries);
    ?>
</body>
</html>