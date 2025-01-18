<?php

namespace Tests;

use App\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    /**
     * Method used to test string calculator with empty string.
     * @return void
     */
    public function testEmptyStringReturnZero(): void
    {
        $calculator = new StringCalculator();
        $this->assertEquals(0,$calculator->add(""));
    }

    /**
     * Method used to test string calculator with single number value.
     * @return void
     */
    public function testSingleNumberReturnItsValue(): void
    {
        $calculator = new StringCalculator();
        $this->assertEquals(1, $calculator->add("1"));
    }

    /**
     * Method used to test string calculator with comma separated number return sum of their.
     * @return void
     */
    public function testCommaSeparatedNumbersReturnTheirSum(): void
    {
        $calculator = new StringCalculator();
        $this->assertEquals(5, $calculator->add('2,3'));
    }

    /**
     * Method used to test handle of new line separators.
     * @return void
     */
    public function testNewLineSeparatedNumbersReturnTheirSum(): void
    {
        $calculator = new StringCalculator();
        $this->assertEquals(7, $calculator->add("1\n2,3\n1"));
    }

    /**
     * Method used to test custom delimiter separated numbers.
     * @return void
     */
    public function testCustomDelimiterSeparatedNumbersReturnTheirSum(): void
    {
        $calculator = new StringCalculator();
        $this->assertEquals(11, $calculator->add("//;\n1,2\n3,4;1"));
    }
}
