<?php

class Hello{
    public function world(){
        return "Hello world!";
    }
    public function index(){
        return "Hello something!";
    }
    public function __call($name, $arguments){
        return $this->index();
    }
}