<?php

abstract class BaseTag
{
    private $name;
    private $attributes;
    private $selfClosing;
    private $body;

    const SELF_CLOSED = [
        'area', 'base', 'br', 'col', 'embed', 'hr', 'img',
        'input', 'link', 'meta', 'param', 'source', 'track',
        'wbr', 'command', 'ketgen', 'menuitem'
    ];

    public function __construct($name, array $attributes = []){
        $this->name = $name;
        $this->attributes = new Attributes($attributes);
        $this->body = new Body();

        if (in_array($name, self::SELF_CLOSED))
            $this->selfClosing();
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

    protected function selfClosing(){
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

    public function appendTo(BaseTag $tag){
        $tag->appendBody($this);
        return $this;
    }

    public function prependTo(BaseTag $tag){
        $tag->prependBody($this);
        return $this;
    }

}