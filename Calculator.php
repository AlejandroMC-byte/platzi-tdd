<?php

class Calculator{
    
    public function add(int $a, int $b){
        return $a+$b;
    }
    public function res(int $a, int $b){
        return $a-$b;
    }
    public function multiplicar(int $a, int $b){
        return $a*$b;
    }
    public function dividir(int $a, int $b){
        if($a >= $b){
            return $a/$b;
        }else{
            return 'Division por cero';
        }
    }
}