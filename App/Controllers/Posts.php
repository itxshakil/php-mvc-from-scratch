<?php

namespace App\Controllers;

use Core\Controller;

class Posts extends Controller
{
    public function index()
    {
        echo 'Hello from the index action in the Posts controller!';
        echo '<p>Query string parameters: <pre>' .
             htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
    }

    public function addNew()
    {
        echo 'Hello from add new method';
    }

    public function edit()
    {
        echo 'Hello from edit method';
        echo '<p>Query string parameters: <pre>' .
        htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }
}
