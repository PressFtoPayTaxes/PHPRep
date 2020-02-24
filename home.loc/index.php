<?php

include_once "./Hello.php";

$req_string = $_SERVER['REQUEST_URI'];
$req_array = explode('/', $req_string);

$name = $req_array[count($req_array) - 2];
$method = $req_array[count($req_array) - 1];

$class = new $name;
echo $class->$method();