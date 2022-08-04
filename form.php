<?php
require_once 'functions.php';

if (isset($_POST['species']) && isset($_POST['population']) && isset($_POST['country']) && isset($_POST['charity'])) {
    $species = $_POST['species'];
    $population = $_POST['population'];
    $country = $_POST['country'];
    $charity = $_POST['charity'];
    InsertToDb($species, $population, $country, $charity);
} else {
    echo 'some input are missing';
}

header('Location: index.php');
