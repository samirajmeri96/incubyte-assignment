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

        return (int)$numberString;
    }
}
