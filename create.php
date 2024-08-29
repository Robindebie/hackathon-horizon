<?php

    include('conf/conf.php');

    $dsn = "mysql:host=$dbHost;
        dbname=$dbName;
        charset=UTF8";

    $pdo = new PDO($dsn, $dbUser, $dbPass);

    $sql = "INSERT INTO guests (Name,
                                ranks)
                        VALUES  (:Name
                                ,:ranks)";
    
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':Name', $_POST['Name'], PDO::PARAM_STR);
    $statement->bindValue(':ranks', $_POST['ranks'], PDO::PARAM_STR);

    $statement->execute();

    echo implode(" ", $_POST);
?>