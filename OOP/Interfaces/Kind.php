<?php


interface Kind
{
    public function move();
    public function eat(Animal $animal);
    public function drink();
    public function sleep();
    public function jump();
}