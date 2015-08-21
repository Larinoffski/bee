<?php
/**
 * Created by PhpStorm.
 * User: laring
 * Date: 12.08.15
 * Time: 1:41
 */

class Error extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->render('error/index');
        $this->view->msg = 'Страницы не существует!';
        $this->view->render('error/index');
    }
}