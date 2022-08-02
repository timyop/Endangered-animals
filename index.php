<?php

$connectionString = 'mysql:host=db; dbname=endangeredlist';
$dbUsername = 'root';
$dbPassword = 'password';
$db = new PDO($connectionString, $dbUsername, $dbPassword);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$queryString = 'SELECT * FROM `animals`;';
$query = $db->prepare($queryString);
$query->execute();
$allResults = $query->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css' href="normalize.css">
    <link rel="stylesheet" type="text/css' href="style.css">
</head>
<body>
    <h1>ENDANGERED ANIMAL LIST</h1>
    <div>
    <ul>
        <?php $animals = $allResults;
        foreach($animals as $animal) { ?>
            <li><?php echo $animal['species']; ?></li>
            <li><?php echo $animal['population']; ?></li>
            <li><?php echo $animal['country']; ?></li>
        <?php } ?>
    </ul>
    </div>
</body>

</html>

