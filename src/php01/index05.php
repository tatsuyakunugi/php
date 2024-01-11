<?php
$Fizz = "Fizz";
$Buzz  = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($number = 1; $number <= 50; $number++) {
  if($number % 3 == 0) {
    echo $Fizz . '<Br />';
  }
  elseif($number % 5 == 0) {
    echo $Buzz . '<br />';
  }
  elseif($number % 15 == 0) {
    echo $FizzBuzz . '<br>';
  }else{
    echo $number . '<br />';
  }
}