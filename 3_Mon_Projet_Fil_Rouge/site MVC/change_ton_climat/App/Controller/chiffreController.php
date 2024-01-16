<?php

namespace App\Controller;

use App\Vue\Template;

class chiffreController {
    public function getChiffre() {
        $error = '';
        Template::render(
            'navbar.php',
            'Change ton Climat - Les Chiffres',
            'vueChiffre.php',
            'footer.php',
            $error,
            [],
            ['style.css']
        );
    }
}
