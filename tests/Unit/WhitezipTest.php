<?php

namespace Tests\Unit;

use App\Http\Controllers\testController;
use PHPUnit\Framework\TestCase;

class WhitezipTest extends TestCase
{
    public function __construct(string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->TestController = new testController();
    }

    /**
     * Get the N first Fibonacci numbers
     */
    public function test_getFibonnaciNumbers() {
        $result = $this->TestController->getFibonnaciNumbers(5);
        $this->assertEquals('0, 1, 1, 2, 3', $result);
        $result = $this->TestController->getFibonnaciNumbers(10);
        $this->assertEquals('0, 1, 1, 2, 3, 5, 8, 13, 21, 34', $result);
    }

    /**
     * Check if is a Leap Year
     */
    public function test_isLeapYear(){
        $result = $this->TestController->isLeapYear(1995);
        $this->assertFalse($result);
        $result = $this->TestController->isLeapYear(1800);
        $this->assertFalse($result);
        $result = $this->TestController->isLeapYear(2016);
        $this->assertTrue($result);
        $result = $this->TestController->isLeapYear(2060);
        $this->assertTrue($result);
        $result = $this->TestController->isLeapYear(2000);
        $this->assertTrue($result);
    }

    /**
     * Convert Text to hexadecimal
     */
    public function test_getHexText() {
        $result = $this->TestController->getHexText('Hello World!');
        $this->assertEquals('48656C6C6F20576F726C6421', $result);
        $result = $this->TestController->getHexText('Backend easy test');
        $this->assertEquals('4261636B656E6420656173792074657374', $result);
    }


}
