<?php

namespace App\Controllers\Admin;

use Core\Controller;

class User extends Controller
{
    public function before()
    {
        // check if only login
    }

    public function indexAction()
    {
        echo 'Hello from Admin user';
    }

    public function after()
    {
        // 123
    }
}
