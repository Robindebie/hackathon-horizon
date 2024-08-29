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
    
    $dataRows = '';

    $dataRows = "<tr>
        <td>{$_POST['Name']}</td>
        <td>{$_POST['ranks']}</td>
    </tr>";


    $data = [
        'dataRows' => $dataRows
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guests</title>
    <link rel="stylesheet" href="styleH.css">
</head>
<body>
    <div id="test">
        <img src="foto's/BMTH.png" alt="Bring me the horizon band">

        <table class="table guestList">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Ranks</th>
                </tr>
            </thead>
            <tbody>
                <?= $data['dataRows']; ?>
            </tbody>
        </table>
    </div>
</body>
</html>