<?php
require '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function testDisplayAnimalsSuccessString()
    {
        $animals = [['species' => 'Rhino', 'population' => 65, 'country' => 'Indonesia', 'charity' => 'www.bbc.com']];
        $result = displayAnimals($animals);
        $this->assertIsString($result);
    }
    public function testDisplayAnimalSuccessOutput()
    {
        $animal = [['species' => 'Rhino', 'population' => 65, 'country' => 'Indonesia', 'charity' => 'www.bbc.com']];
        $expected = '<h2 class = species>Species: Rhino</h2><p class = facts>Individuals remaining: 65</p><p class = facts>Habitat: Indonesia</p><p class = facts>Charity: <a href = "www.bbc.com">Link</a></p>';
        $result = displayAnimals($animal);
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