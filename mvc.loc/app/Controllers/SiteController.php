<?php

namespace Controllers;
use Models\Books;
use Core\_Abstracts\Controller;

class SiteController extends Controller
{
    function index(){
        Books::insert([
            'name' => 'Test book'
        ]);

        return $this->render('index');
    }
}