<?php

class Link extends BaseTag
{
    public function __construct(array $attributes = []){
        parent::__construct('a', $attributes);
    }

    public function href($url){
        return $this->setAttribute('href', $url);
    }
}