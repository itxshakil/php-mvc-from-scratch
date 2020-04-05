<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class Home extends Controller
{
    public function indexAction()
    {
        View::render('Home/index.php');
        // echo ' Hello from Home controllers index method';
    }

    protected function before()
    {
        // echo 'before';
    }

    protected function after()
    {
        // echo 'after';
    }
}
