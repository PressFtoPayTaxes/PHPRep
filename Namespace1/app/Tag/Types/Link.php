<?php

namespace Project\Tag\Types;

use Project\BaseTag;

class Link extends BaseTag
{
    public function __construct(array $attributes = []){
        parent::__construct('a', $attributes);
    }

    public function href($url){
        return $this->setAttribute('href', $url);
    }
}