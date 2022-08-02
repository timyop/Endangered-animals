<?php
require '../functions.php';
use PHPUnit\Framework\TestCase;
class indextest extends TestCase
{
public function testDisplayAnimalsSuccess()
{
    $data = ['tst','moretest'];
    $result = displayAnimals($data);
    $this->assertIsString($result);
}
}