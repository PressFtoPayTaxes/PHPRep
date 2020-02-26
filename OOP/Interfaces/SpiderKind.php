<?php


interface SpiderKind extends Kind
{
    public function makeWeb();
    public function bite();
}