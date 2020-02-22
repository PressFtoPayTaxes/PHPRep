<?php

namespace Core\_Abstracts;

use Core\_Interfaces\ControllerInterface;

class Controller implements ControllerInterface
{
    public function render($template, array $vars = [])
    {
        return view($template, $vars);
    }
}