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
<head></head>
<body>
    <h1>ENDANGERED ANIMAL LIST</h1>
    
</body>

</html>

