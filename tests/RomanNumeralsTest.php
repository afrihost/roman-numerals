<?php

use RomanNumerals\RomanNumerals;

class RomanNumeralsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var RomanNumerals
     */
    private $romanNumerals;

    public function setUp()
    {
        $this->romanNumerals = new RomanNumerals();
    }

    public function testConvertWithInputOne()
    {
        $result = $this->romanNumerals->convert(1);

        $this->assertEquals('I', $result);
    }

    public function testConvertWithInputTwo()
    {
        $result = $this->romanNumerals->convert(2);

        $this->assertEquals('II', $result);
    }

    public function testConvertWithInputFour()
    {
        $result = $this->romanNumerals->convert(4);

        $this->assertEquals('IV', $result);
    }

    public function testConvertWithInputFive()
    {
        $result = $this->romanNumerals->convert(5);

        $this->assertEquals('V', $result);
    }

    public function testConvertWithInputSix()
    {
        $result = $this->romanNumerals->convert(6);

        $this->assertEquals('VI', $result);
    }

    public function testConvertWithInputNine()
    {
        $result = $this->romanNumerals->convert(9);

        $this->assertEquals('IX', $result);
    }

    public function testConvertWithInputTen()
    {
        $result = $this->romanNumerals->convert(10);

        $this->assertEquals('X', $result);
    }

    public function testConvertWithInputEleven()
    {
        $result = $this->romanNumerals->convert(11);

        $this->assertEquals('XI', $result);
    }

    public function testConvertWithInputTwenty()
    {
        $result = $this->romanNumerals->convert(20);

        $this->assertEquals('XX', $result);
    }

    public function testConvertWithInputFourty()
    {
        $result = $this->romanNumerals->convert(40);

        $this->assertEquals('XL', $result);
    }

    public function testConvertWithInputFifty()
    {
        $result = $this->romanNumerals->convert(50);

        $this->assertEquals('L', $result);
    }

    public function testConvertWithInputOneHundred()
    {
        $result = $this->romanNumerals->convert(100);

        $this->assertEquals('C', $result);
    }

    public function testConvertWithInputFiveHundred()
    {
        $result = $this->romanNumerals->convert(500);

        $this->assertEquals('D', $result);
    }

    public function testConvertWithInputOneThousand()
    {
        $result = $this->romanNumerals->convert(1000);

        $this->assertEquals('M', $result);
    }

    public function testConvertWithInputOneThousandNineHundredAndNinetyNine()
    {
        $result = $this->romanNumerals->convert(1999);

        $this->assertEquals('MCMXCIX', $result);
    }

    public function testConvertWithInputFourThousandNineHundredAndNinetyNine()
    {
        $result = $this->romanNumerals->convert(4990);

        $this->assertEquals('MMMMCMXC', $result);
    }
}