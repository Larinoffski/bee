<?php

class Login_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function run($login = null, $password = null) {
        $sth = $this->db->prepare("SELECT id FROM users WHERE login = :login AND password = MD5(:password)");
        $sth->execute(array(
            ':login' => $login,
            ':password' => $password
        ));

        $data = $sth->fetch();
    return $data;
    }
}