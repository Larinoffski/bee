<?php
/**
 * Created by PhpStorm.
 * User: laring
 * Date: 12.08.15
 * Time: 3:14
 */

class Login extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render('login/index');
    }

    public function run() {
        $loginModel = new Login_Model();
        $data = $loginModel->run($_POST['login'], $_POST['password']);
        if($data) {
            Session::init();
            Session::set('loggedIn', true);
            header('Location: ../dashboard');
        } else {
            header('Location: ../login');
        }
    }
}