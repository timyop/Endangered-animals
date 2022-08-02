<?php
function dbpull():array{
    $connectionString = 'mysql:host=db; dbname=endangeredlist';
    $dbUsername = 'root';
    $dbPassword = 'password';
    $db = new PDO($connectionString, $dbUsername, $dbPassword);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $queryString = 'SELECT * FROM `animals`;';
    $query = $db->prepare($queryString);
    $query->execute();
    $allresults = $query->fetchAll();
    return $allresults;
}
$animals = dbpull();

function displayAnimals(array $animals):string {
    $animalsHTML = '';
     foreach ($animals as $animal){
         $animalsHTML .=
             '<div class = animal>' .
                '<li class = species>Species: ' . $animal['species'] . '</li>'.
                '<li class = facts>Individuals remaining :' . $animal['population'] . '</li>' .
                '<li class = facts>Habitat: ' . $animal['country'] . '</li>' .
                '<li class = facts>Charity: <a href = "' . $animal['charity'] . '">Link</a></li>' .
            '</div>';
     }
     return $animalsHTML;
}



