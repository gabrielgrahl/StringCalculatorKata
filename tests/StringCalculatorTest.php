<?php

require_once('../simpletest/autorun.php');
require_once('../src/StringCalculator.php');


class StringCalculatorTest extends UnitTestCase {
    
    function testShouldReturnZeroWhenISendEmpty() {
        $stringCalculator = new StringCalculator();
        $this->assertEqual($stringCalculator->Sum(""), 0);
    }
    
    function testShouldReturn1WhenISend1() {
        $stringCalculator = new StringCalculator();
        $this->assertEqual($stringCalculator->Sum(1), 1);
    }
    
    function testShouldReturn2WhenISend2() {
        $stringCalculator = new StringCalculator();
        $this->assertEqual($stringCalculator->Sum(2), 2);
    }
    
    function testShouldReturn3WhenISend1And2() {
        $stringCalculator = new StringCalculator();
        $this->assertEqual($stringCalculator->Sum("1,2"), 3);
    }
    
    function testShouldSumNNumbers(){
        $stringCalculator = new StringCalculator();
        $this->assertEqual($stringCalculator->Sum("1,2,3,4,5"), 15);
    }
    
    function testShouldAcceptNewLineAsDelimiter(){
        $stringCalculator = new StringCalculator();
        $this->assertEqual($stringCalculator->Sum("1\n2\n3,4,5"), 15);
    }
    
    
    
    
}
