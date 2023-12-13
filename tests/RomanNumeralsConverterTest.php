<?php

use PHPUnit\Framework\TestCase;

class RomanNumeralsConverterTest extends TestCase
{
    protected $converter;

    public function __construct()
    {
        parent::__construct();
        $this->converter = new RomanNumeralsConverter();
    }


    function it_calculates_the_roman_numeral_for_1()
    {
        $this->assertSame($this->converter->convert(1), 'I');
    }

    function it_calculates_the_roman_numeral_for_2()
    {
        $this->assertSame($this->converter->convert(2), 'II');
    }

    function it_calculates_the_roman_numeral_for_4()
    {
        $this->assertSame($this->converter->convert(4), 'IV');
    }

    function it_calculates_the_roman_numeral_for_5()
    {
        $this->assertSame($this->converter->convert(5), 'V');
    }

    function it_calculates_the_roman_numeral_for_6()
    {
        $this->assertSame($this->converter->convert(6), 'VI');
    }

    function it_calculates_the_roman_numeral_for_9()
    {
        $this->assertSame($this->converter->convert(9), 'IX');
    }

    function it_calculates_the_roman_numeral_for_10()
    {
        $this->assertSame($this->converter->convert(10), 'X');
    }

    function it_calculates_the_roman_numeral_for_11()
    {
        $this->assertSame($this->converter->convert(11), 'XI');
    }

    function it_calculates_the_roman_numeral_for_20()
    {
        $this->assertSame($this->converter->convert(20), 'XX');
    }

    function it_calculates_the_roman_numeral_for_50()
    {
        $this->assertSame($this->converter->convert(50), 'L');
    }

    function it_calculates_the_roman_numeral_for_100()
    {
        $this->assertSame($this->converter->convert(100), 'C');
    }

    function it_calculates_the_roman_numeral_for_500()
    {
        $this->assertSame($this->converter->convert(500), 'D');
    }

    function it_calculates_the_roman_numeral_for_1000()
    {
        $this->assertSame($this->converter->convert(1000), 'M');
    }

    function it_calculates_the_roman_numeral_for_1999()
    {
        $this->assertSame($this->converter->convert(1999), 'MCMXCIX');
    }

    function it_calculates_the_roman_numeral_for_4990()
    {
        $this->assertSame($this->converter->convert(3990), 'MMMCMXC');
    }

    /** Homework Solution */
    function it_shows_empty_string_with_zero()
    {
        $this->assertSame($this->converter->convert(0), '');
    }

}