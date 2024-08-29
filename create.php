<?php

    include('conf/conf.php');

    $dsn = "mysql:host=$dbHost;
        dbname=$dbName;
        charset=UTF8";

    $pdo = new PDO($dsn, $dbUser, $dbPass);

    $sql = "INSERT INTO guests (Name,
                                rank)
                        VALUES  (:Name
                                ,:rank)";
    
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':Name', $_POST['Name'], PDO::PARAM_STR);
    $statement->bindValue(':rank', $_POST['rank'], PDO::PARAM_STR);

    $statement->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $_POST[$sql]; ?>
</body>
</html>