<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class Posts extends Controller
{
    public function indexAction()
    {
        View::renderTemplate('Posts/index.html');
    }

    public function addNewAction()
    {
        echo 'Hello from add new method';
    }

    public function editAction()
    {
        echo 'Hello from edit method';
        echo '<p>Query string parameters: <pre>' .
        htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }
}
