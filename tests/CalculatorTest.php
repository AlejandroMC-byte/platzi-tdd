<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {

    public function test_addWillReturnTheSumOfItsParameters(){

        $sut = new Calculator();

        $this->assertEquals(8 , $sut->add(5,3));
        $this->assertEquals(10 , $sut->add(5,5));
    }
    public function test_resWillReturnTheResOfItsParameters(){

        $sut = new Calculator();

        $this->assertEquals(2 , $sut->res(5,3));
        $this->assertEquals(0 , $sut->res(5,5));
    }
    public function test_multiplicarWillReturnTheMultiplicationOfItsParameters(){

        $sut = new Calculator();

        $this->assertEquals(15 , $sut->multiplicar(5,3));
        $this->assertEquals(25 , $sut->multiplicar(5,5));
    }
    public function test_dividirWillReturnTheDivisionOfItsParameters(){

        $sut = new Calculator();

        $this->assertEquals(5 , $sut->dividir(15,3));
        $this->assertEquals(1 , $sut->dividir(5,5));
        $this->assertEquals('Division por cero' , $sut->dividir(2,5));
    }
}