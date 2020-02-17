<?php

include "classes/Tag.php";

$tag = new Tag('div');

$link = new Tag('a');

$tag->appendBody($link);

$link->setAttribute('class', 'btn');
$link->appendAttribute('class', 'red');

$tag->setAttribute('class', 'blue');

$link->appendBody('Home');

echo $tag;


