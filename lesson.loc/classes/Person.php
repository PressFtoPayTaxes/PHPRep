<?php

class Person
{
    private $age;
    private $satiety;

    public function __construct($age){
        $this->age = $age;
        $this->satiety = 100;
    }

    public function growUp($on = 1){
        $this->age += $on;
    }

    public function getAge(){
        return $this->age;
    }

    public function spendTime(){
        $this->satiety -= rand(1, 10);
        if($this->satiety <= 0){
            die('Person is dead');
        }

        return $this->satiety;
    }

    public function isHungry(){
        if($this->satiety <= 25){
            return true;
        }
        return false;
    }

    public function eatFood(){
        $this->satiety += rand(1, 100);
        if($this->satiety > 100){
            die('Person is dead');
        }
    }
}