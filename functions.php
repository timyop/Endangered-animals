<?php

function pullAllAnimalsFromDb(): array
{
    $connectionString = 'mysql:host=db; dbname=endangeredlist';
    $dbUsername = 'root';
    $dbPassword = 'password';
    $db = new PDO($connectionString, $dbUsername, $dbPassword);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $queryString = 'SELECT `species`, `population`, `country`, `charity` FROM `animals`;';
    $query = $db->prepare($queryString);
    $query->execute();
    $allResults = $query->fetchAll();
    return $allResults;
}

function displayAnimals(array $animals): string
{
    $animalsHTML = '';
    foreach ($animals as $animal) {

        if (
            !is_array($animal) ||
            !array_key_exists('species', $animal) ||
            !array_key_exists('population', $animal) ||
            !array_key_exists('country', $animal) ||
            !array_key_exists('charity', $animal)
        ) {
            return '';
        }

        $animalsHTML .=
            '<h2 class = species>Species: ' . $animal['species'] . '</h2>' .
            '<p class = facts>Individuals remaining: ' . $animal['population'] . '</p>' .
            '<p class = facts>Habitat: ' . $animal['country'] . '</p>' .
            '<p class = facts>Charity: <a href = "' . $animal['charity'] . '">Link</a></p>';
    }
    return $animalsHTML;
}

function InsertToDb($species, $population, $country, $charity)
{
    $connectionString = 'mysql:host=db; dbname=endangeredlist';
    $dbUsername = 'root';
    $dbPassword = 'password';
    $db = new PDO($connectionString, $dbUsername, $dbPassword);

    $queryString = 'INSERT INTO `animals` (`species`, `population`, `country`, `charity`)
    VALUES (:species, :population, :country, :charity)';
    $query = $db->prepare($queryString);
    $query->execute(['species' => $species, 'population' => $population, 'country' => $country, 'charity' => $charity]);
}
