<?php require_once 'functions.php';  require_once 'form.php';
echo  InsertToDb();
$animals = pullAllAnimalsFromDb();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Collector App</title>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Endangered Animal List</h1>

    <div class="animal">
        <?php
            echo displayAnimals($animals);
        ?>
    </div>
    <div>
        <form method="post">
            <input type="text" name="species" placeholder="Species" required />
            <input type="text" name="population" placeholder="Individuals remaining" required />
            <input type="text" name="country" placeholder="Country" required />
            <input type="text" name="charity" placeholder="Charity" required />
            <input type="submit" />
        </form>
    </div>
</body>

</html>