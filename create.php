<?php
    include('conf/conf.php');
    
    $dsn = "mysql:host=$dbHost;
            dbname=$dbName;
            charset=UTF8";

    $pdo = new PDO($dsn, $dbUser, $dbPass);

    $sql = "SELECT *
            FROM guests
            ORDER BY ranks";

    $statement = $pdo->prepare($sql);

    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_OBJ);

    $tableRows = "";

    foreach ($result as $guests) {
        $tableRows .= "<tr>
                            <td>$guests->name</td>
                            <td>$guests->ranks</td>
                        <tr>";
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guests</title>
    <link rel="stylesheet" href="guest.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <aside class="navLinks">
            <img src="foto's/image.png" alt="">

            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Get tickets</a></li>
                <li><a href="#">Guests</a></li>
            </ul>
        </aside>
    </div>

    <div id="banner">
        <img src="foto's/BMTH.png" alt="Bring me the horizon band">

        <div class="container">
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-8 test">
                    <table class="table table-borderless table-striped guestlist">
                        <thead>
                            <th>name</th>
                            <th>rank</th>
                        </thead>
                        <tbody>
                            <?php echo $tableRows; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>
</html>