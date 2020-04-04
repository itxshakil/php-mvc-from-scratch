<?php

namespace App\Controllers;

use Core\Controller;

class Home extends Controller
{
    public function indexAction()
    {
        echo ' Hello from Home controllers index method';
    }

    protected function before()
    {
        echo 'before';
    }

    protected function after()
    {
        echo 'after';
    }
}
