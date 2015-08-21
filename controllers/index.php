<?php

class Index extends Controller {
      public function __construct() {
          parent::__construct();
      }

      public function index(){
          $this->view->render('index/index');
      }

      public function message() {
          $indexModel = new Index_Model();
          $message = $indexModel->post();
          if ($message){
              echo $_POST['nameFF'];
              echo $_POST['contactFF'];
              echo $_POST['messageFF'];
          }
      }
  }