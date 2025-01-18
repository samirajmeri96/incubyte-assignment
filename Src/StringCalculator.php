<?php

namespace App;

class StringCalculator
{
    /**
     * Method used to sum all the number provided in by comma separated, new line, or with custom delimiter.
     * @param string $numbers
     * @return int
     */
    public function add(string $numberString): int
    {
        if (empty($numberString)) {
            return 0;
        }
        $numberString = preg_replace("/(\/\/|\/\/;|;|,|\\n)/", ",", $numberString);
        $numbers = explode(',', $numberString);
        $negativeNumbers = array_filter($numbers, fn($n) => (int)$n < 0);
        if (!empty($negativeNumbers)) {
            throw new \Exception('Negative numbers not allowed: '.implode(',', $negativeNumbers));
        }
        return array_sum(array_map('intval', $numbers));
    }
}
