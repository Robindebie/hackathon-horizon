<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
</head>
<body>
    <form action="ticket.php" method="post">
        <label for="name">Fill your name in:</label>
        <input type="text" name="name" id="name">

        <label for="ranks">rank 1</label>
        <input type="radio" name="ranks" id="ranks" value="rank1">

        <label for="ranks">rank 2</label>
        <input type="radio" name="ranks" id="ranks" value="rank2">

        <label for="ranks">rank 3</label>
        <input type="radio" name="ranks" id="ranks" value="rank3">

        <button type="submit">submit</button>
    </form>

    <a href="create.php">test</a>
</body>
</html>

<?php
    include('conf/conf.php');

    $dsn = "mysql:host=$dbHost;
                dbname=$dbName;
                charset=UTF8";

    $pdo = new PDO($dsn, $dbUser, $dbPass);

    $sql = "INSERT INTO guests  (name,
                                ranks)
                        VALUES  (:name
                                ,:ranks)";
    
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
    $statement->bindValue(':ranks', $_POST['ranks'], PDO::PARAM_STR);

    $statement->execute();
?>