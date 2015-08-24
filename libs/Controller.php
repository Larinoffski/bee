<?php
/**
 * Created by PhpStorm.
 * User: laring
 * Date: 12.08.15
 * Time: 1:48
 */

class Controller {
    public function __construct() {
        $this->view = new View();
    }

    public function loadModel($name) {
        $path = 'models/'.$name.'_model.php';
        if(file_exists($path)) {
            require 'models/'.$name.'_model.php';
            $modelName = $name.'_Model';
            $this->model = new $modelName();
        }
    }
}