<?php

namespace App\Controllers;

use App\Models\Post;
use Core\Controller;
use Core\View;

class Posts extends Controller
{
    public function indexAction()
    {
        $posts = Post::getAll();
        View::renderTemplate('Posts/index.html',compact('posts'));
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
