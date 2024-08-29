<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
</head>
<body>
    <h1>form test</h1>

    <form action="create.php" method="post">
        <input type="text" name="Name" id="Name" placeholder="Fill your name here" required>
        <select name="rank" id="rank">
            <option value="rank1">Rank1</option>
            <option value="rank2">Rank2</option>
            <option value="rank3">Rank3</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</body>
</html>