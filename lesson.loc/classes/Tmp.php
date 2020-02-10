<?php

class Tmp
{
    public $data = 0;

    function make(Tmp $tmp){
        $tmp->change();
        return $tmp;
    }

    private function change(){
        $this->data = 10;
    }
}