<?php

class ExtraBudget extends Budget
{
    public function __construct($money){
        parent::__construct($money);
    }

    public function spendMoney($money){
        if(self::$bank + $this->collection < $money){
            $lack = $this->collection - $money;
            $this->collection = 0;
            self::$bank += $lack;
            return $this;
        }

        return parent::spendMoney($money);
    }
}