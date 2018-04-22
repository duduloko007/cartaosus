<?php

class Controller {

    public function __construct() {
        
    }

    public function __call($name, $arguments) {
        $this->loadTemplate('404');
    }

    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/' . $viewName . '.php';
    }

    public function loadTemplate($viewName, $viewData = array()) {
        
        include 'views/templates.php';
    }

    public function loadViewInTemplate($viewName, $viewData) {
        extract($viewData);
        include 'views/' . $viewName . '.php';
    }

}
