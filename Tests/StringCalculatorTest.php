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
}
