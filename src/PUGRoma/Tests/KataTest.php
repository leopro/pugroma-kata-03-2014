<?php

namespace PUGRoma\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function testStart()
    {
        $kata = new Kata();
        $this->assertTrue($kata->isReady());
    }

    public function testTre()
    {
        $kata = new Kata();
        $this->assertEquals("Fizz", $kata->returnFizzBuzz(3));
    }
    
    public function testCinque()
    {
        $kata = new Kata();
        $this->assertEquals("Buzz", $kata->returnFizzBuzz(5));
    }

    public function testTreCinque()
    {
        $kata = new Kata();
        $this->assertEquals("FizzBuzz?", $kata->returnFizzBuzz(15));
    }

    public function testSette()
    {
        $kata = new Kata();
        $this->assertEquals("7", $kata->returnFizzBuzz(7));
    }
    
}