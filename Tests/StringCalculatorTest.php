<?php

namespace Tests;

use App\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    /**
     * Method used to test string calculator with emplty string.
     * @return void
     */
    public function testEmptyStringReturnZero(): void
    {
        $calculator = new StringCalculator();
        $this->assertEquals(0,$calculator->add(""));
    }
}
