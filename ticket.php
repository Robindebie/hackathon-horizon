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

        <div class="ranks">

            <label for="ranks">rank1</label>
            <input type="radio" name="ranks" id="ranks" value="rank1" >
            <label for="ranks">rank2</label>
            <input type="radio" name="ranks" id="ranks" value="rank2" >
            <label for="ranks">rank3</label>
            <input type="radio" name="ranks" id="ranks" value="rank3" >

        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>