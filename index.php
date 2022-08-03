<?php require_once 'functions.php';

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

</body>

</html>

