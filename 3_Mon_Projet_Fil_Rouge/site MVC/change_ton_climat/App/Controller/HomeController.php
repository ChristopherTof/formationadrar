<?php

namespace App\Controller;

use App\Vue\Template;

class HomeController {
    public function getHome() {
        $error = '';
        Template::render(
            'navbar.php',
            'Change ton Climat - Bienvenue',
            'vueHome.php',
            'footer.php',
            $error,
            [],
            ['style.css']
        );
    }
    public function get404() {
        $error = '';
        Template::render(
            'navbar.php',
            'Error 404',
            'vueError.php',
            'footer.php',
            $error,
            ['script.js'],
            ['style.css']
        );
    }
}
