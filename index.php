<?php require_once 'functions.php';

$animals = dbpull();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Collector App</title>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
    <h1>ENDANGERED ANIMAL LIST</h1>
    <div>
    <ul>
        <?php
        echo displayAnimals($animals);
        ?>
    </ul>
    </div>
</body>

</html>

