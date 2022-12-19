<?php

namespace Lynx\System\View;

class View {
    
    public function __construct() {
        echo 'View';
    }
    
    public function render($view, $data = []){
        $view = str_replace('.', '/', $view);
        $view = realpath("views/{$view}.blade.php");
        if (file_exists($view)) {
            extract($data);
            require_once $view;
        } else {
            die("View Exception: View Not Found.");
        }
    }

}