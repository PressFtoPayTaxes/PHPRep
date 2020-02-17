<?php

include_once "Attributes.php";
include_once "Body.php";

class Tag
{
    private $name;
    private $attributes;
    private $selfClosing;
    private $body;

    public function __construct($name, array $attributes = []){
        $this->name = $name;
        $this->attributes = new Attributes($attributes);
        $this->selfClosing = false;
        $this->body = new Body();
    }

    public function setAttribute($key, $value = null){
        $this->attributes->setAttribute($key, $value);
        return $this;
    }

    public function appendAttribute($key, $value){
        $this->attributes->appendAttribute($key, $value);
        return $this;
    }

    public function prependAttribute($key, $value){
        $this->attributes->prependAttribute($key, $value);
        return $this;
    }

    public function selfClosing(){
        $this->selfClosing = true;
        return $this;
    }

    public function appendBody($value){
        $this->body->appendBody($value);
        return $this;
    }

    public function prependBody($value){
        $this->body->prependBody($value);
        return $this;
    }

    public function __toString(){
        $tag = "<{$this->name}{$this->attributes}";
        if($this->selfClosing === false)
            $tag .= ">{$this->body}</{$this->name}>";
        else
            $tag .= " />";

        return $tag;
    }

}