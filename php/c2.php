<?php

/*
Challenge 2: Surface area calculation
Each line of input represents the dimensions of a right rectanguluar
prism (l*w*h). Your job is to calculate the total surface area of all the inputs.

Hint: The surface area can be calculated with the following 
formula: 2*l*w + 2*w*h + 2*h*l
*/

define("input", [
  "12x90x2",
  "3x67x5",
  "24x15x10",
  "78x30x1",
  "6x21x90",
  "34x2x11",
  "17x97x12",
  "6x70xb",
  "33x20x12",
  "78x32x1",
  "6x21x90",
  "39x2x11",
  "12x94x2",
  "3x75x5",
  "24x15x16",
  "84x30x1",
  "6x21x90",
  "41x2x11",
  "12x90x2",
  "5x70x5",
  "24x26x10",
  "78x33x1",
  "11x21x90",
  "40x6x11"
]);

class Challenge
{
  public function __construct(CalculatorInterface $calculator)
  {
    echo "What is the total surface area of the input?\n";
    $result = $calculator->calculate();

    if ($calculator instanceof CalculatorInterface) {
      echo "The total surface area is: " . $result . PHP_EOL;
    }
  }
}

interface CalculatorInterface
{
  public function calculate();
}

// start editing here



// end editing here

$calculator = new Calculator;
$challenge = new Challenge($calculator);
