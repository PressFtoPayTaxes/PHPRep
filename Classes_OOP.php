<?php

class Tag
{
    private $name;
    private $attrs;
    private $body;
    private $selfClosing;

    public function __construct($name, $attrs = []){
        $this->name = $name;
        $this->attrs = $attrs;
        $this->body = "";
        $this->selfClosing = false;
    }

    public function selfClosing(){
        $this->selfClosing = true;
        return $this;
    }

    public function addAttributes($attrs){
        foreach($attrs as $key => $value)
            $this->addAttribute($key, $value);
        return $this;
    }

    public function addAttribute($key, $value = null){
        $this->attrs[$key] = $value;
        return $this;
    }

    public function addClass($class){
        $this->attrs["class"] = "{$this->attrs["class"] }" ?? "" . "{$class}";

        return $this;
    }

    public function appendAttribute($key, $value){
        $this->attrs[$key] .= $value;
        return $this;
    }

    public function prependAttribute($key, $value){
        $this->attrs[$key] = $this->attrs[$key] . $value;
    }

    public function appendBody($body){
        $this->body .= $body;
        return $this;
    }

    public function prependBody($body){
        $this->body = $this->body . $body;
        return $this;
    }

    public function getString(){
        $str = "<{$this->name}";
        foreach($this->attrs as $key =>$value){
            $str .= " {$key}";
            if($value !== null)
                $str .= "='{$value}'";
        }
        if($this->selfClosing == false)
            $str .= " />";
        else
            $str .= ">{$this->body}</{$this->name}>";

        return $str;
    }
}