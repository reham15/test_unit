<?php

use PHPUnit\Framework\TestCase;
//include ('factorial.php');

class FactorialTest extends PHPUnit\Framework\TestCase{



public function test_factorial_of_zero(){
    
    $this->assertTrue(factorial::calc_factorial(0)==1);

}
public function test_factorial_of_one(){
    
    $this->assertTrue(factorial::calc_factorial(1)==1);

}
public function test_factorial_of_integer(){
    
    $this->assertTrue(factorial::calc_factorial(5)==120);

}
public function test_factorial_of_negativeve_number(){
    
    $this->assertTrue(factorial::calc_factorial(-3)==null);

}
public function test_factorial_of_boolean(){
    
    $this->assertTrue(factorial::calc_factorial(false)==null);

}
public function test_factorial_of_float(){
    
    $this->assertTrue(factorial::calc_factorial(1.5)==null);

}
public function test_factorial_of_string(){
    
    $this->assertTrue(factorial::calc_factorial("abc")==null);

}
public function test_factorial_of_n_equal_nXfactorialn_minus_one(){
    
    $this->assertTrue(factorial::calc_factorial(4)==4*factorial::calc_factorial(3));

}


}

?>