<?php

namespace Tests\Unit;
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
//use Tests\TestCase;
use PHPUnit\Framework\TestCase;
use TDD\RaceModel;
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $race = new TDD\RaceModel;
        $this->assertInstanceOf(Race\RaceModel());

//        $this->assertTrue(true);


    }
}
