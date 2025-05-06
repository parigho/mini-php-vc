<?php

class Controller
{
    public function view($view, $data = [])
    {
        extract($data);
        $viewPath = "../app/views/$view.php";
        require "../app/views/layout.php";
    }
}
