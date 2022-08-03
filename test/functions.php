<?php
require '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function testDisplayAnimalsSuccess()
    {
        $animals = [['species' => 'Rhino', 'population' => 65, 'country' => 'Indonesia', 'charity' => 'www.bbc.com']];
        $result = displayAnimals($animals);
        $this->assertIsString($result);
    }
    public function testDisplayAnimalSuccess_2()
    {
        $animals = [['species' => 'Rhino', 'population' => 65, 'country' => 'Indonesia', 'charity' => 'www.bbc.com']];
        $expected = '<div class = animal><li class = species>Species: Rhino</li><li class = facts>Individuals remaining :65</li><li class = facts>Habitat: Indonesia</li><li class = facts>Charity: <a href = "www.bbc.com">Link</a></li></div>';
        $result = displayAnimals($animals);
        $this->assertEquals($expected, $result);
    }
    public function testDisplayAnimalFailure()
    {
        $input = [['boat' => 'speed']];
        $expected = '';
        $result = displayAnimals($input);
        $this->assertEquals($expected, $result);

    }
}

