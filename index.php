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
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>ENDANGERED ANIMAL LIST</h1>
    <div>
    <ul>
        <?php $animals = $allResults;
        foreach($animals as $animal) { ?>
            <div class = "animal">
                <li class = "species">Species: <?php echo $animal['species']; ?></li>
                <li class = "facts">Individuals remaining: <?php echo $animal['population']; ?></li>
                <li class = "facts">Habitat: <?php echo $animal['country']; ?></li>
                <li class = "facts">Charity: <a href = "<?php echo $animal['charity'];?>">Link</a></li>
            </div>
        <?php } ?>
    </ul>
    </div>
</body>

</html>

