<?php

class Budget
{
    public static $bank = 0;
    public $collection = 0;

    public function __construct($money){
        self::$bank += $money;
    }

    public function addMoney($money){
        self::$bank += $money;
        return $this;
    }

    public function spendMoney($money){
        if(self::$bank + $this->collection < $money)
            die("You don't have money");

        $k = self::$bank - $money;
        if($k < 0){
            self::$bank = 0;
            $this->collection -= $k;
        }
        else{
            self::$bank -= $k;
        }

        return $this;
    }

    public function collectMoney($money){
        if(self::$bank - $money < 0)
            die("You don't have money");

        self::$bank -= $money;
        $this->collection += $money;

        return $this;
    }
}