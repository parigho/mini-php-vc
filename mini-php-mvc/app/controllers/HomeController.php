<?php

class HomeController extends Controller
{
    public function index()
    {
        $this->view('home', ['message' => 'Hello from main page']);
    }

    public function greet()
    {
        // Get system username depending on the OS
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $username = getenv('USERNAME');
        } else {
            $username = getenv('USER');
        }

        // Fallback if username is not found
        if (!$username) {
            $username = "Guest";
        }

        $this->view('greet', ['name' => $username]);
    }
}
