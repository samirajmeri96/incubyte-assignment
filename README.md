# String Calculator
This is a simple implementation of a String Calculator based on the requirements provided. The calculator supports addition of comma-separated numbers, handles custom delimiters, and throws exceptions for negative numbers.

## Requirements
- PHP 8.2 or later
- PHPUnit for testing

## Features
- **Empty String**: Returns 0 for an empty string.
- **Single Number**: Returns the number itself.
- **Multiple Numbers**: Returns the sum of the numbers (comma-separated). 
- **Newline Delimiters**: Supports numbers separated by newlines (\n) as well as commas.
- **Custom Delimiters**: Supports custom delimiters defined at the beginning of the input string.
- **Negative Numbers**: Throws an exception for negative numbers and lists them.

## Installation
1) Clone this repository:
~~~
git clone https://github.com/samirajmeri96/incubyte-assignment.git
~~~
2) Navigate to the project directory:
~~~
cd incubyte-assignment
~~~
3) Install dependencies using Composer:
~~~
composer install
~~~
4) Install PHPUnit (if not already installed globally):
~~~
composer require --dev phpunit/phpunit
~~~

## Usage
### Example Inputs and Outputs
- " " => 0
- "1" => 1
- "1,5" => 6
- "1\n2,3" => 6
- "//;\n1;2" => 3

### Running Tests
##### You can run the tests using PHPUnit:
~~~
vendor/bin/phpunit tests/StringCalculatorTest.php
~~~
### Example Input Strings
1) Empty String:
~~~
$calculator->add(""); // Output: 0
~~~

2) Single Number:
~~~
$calculator->add("1"); // Output: 1
~~~

3) Multiple Numbers:
~~~
$calculator->add("1,5"); // Output: 6
~~~

4) Newline Between Numbers:
~~~
$calculator->add("1\n2,3"); // Output: 6
~~~

5) Custom Delimiters:
~~~
$calculator->add("//;\n1;2"); // Output: 3
~~~

6) Negative Numbers (Exception):
~~~
$calculator->add("1,-1,-2"); // Throws exception: Negative numbers not allowed: -1,-2
~~~

### Code Structure
- **src/StringCalculator.php**: Contains the implementation of the **StringCalculator** class with the **add()** method.
- **tests/StringCalculatorTest.php**: Contains PHPUnit test cases that validate the functionality of the **StringCalculator**.

### Testing
The project uses PHPUnit for unit testing. The tests ensure that:
- Edge cases like empty strings and single number inputs are handled correctly.
- Delimiters (commas, newlines, and custom delimiters) are processed correctly.
- Negative numbers are identified, and an exception is thrown.

### Running the Tests
To run the tests, execute the following command:
~~~
.\vendor\bin\phpunit .\Tests\StringCalculatorTest.php 
~~~
