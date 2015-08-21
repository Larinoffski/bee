<?php
/**
 * Created by PhpStorm.
 * User: laring
 * Date: 12.08.15
 * Time: 6:28
 */

class Dashboard extends Controller{

    public function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if($logged == false) {
            Session::destroy();
            header('Location: ../login');
            exit();
        }
    }

    public function index()
    {
        $this->view->render('dashboard/index');
    }

    public function logout() {
        Session::destroy();
        header('Location: ../login');
        exit();
    }
}