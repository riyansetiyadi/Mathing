<?php

class Register extends Controller {
    public function index()
    {
        if ( isset($_COOKIE["userId"]) && isset($_COOKIE["username"]) ) {
            $dataUser = $this->model('User_model')->getUserById($_COOKIE["userId"]);
      
            if ( $_COOKIE["username"] === $dataUser["username"] ) {
              $_SESSION["login"] = true;
              $_SESSION["id"] = $dataUser["accountID"];
            }
        }
      
        if ( isset($_SESSION["login"]) ) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }

        $data['titleHal'] = 'Register';
        $this->view('templates/headerNonNav', $data);
        $this->view('register/index', $data);
        $this->view('templates/footer');
    }

    public function registerPermission()
    {
        if ( $this->model('User_model')->userRegister($_POST) > 0 ) {
            $dataUser = $this->model('User_model')->getUserByUsernameAndPassword($_POST);
            $_SESSION["login"] = true;
            $_SESSION["id"] = $dataUser["accountID"];

            Flasher::setFlash('berhasil', 'register', 'success');
            header('Location: ' . BASEURL . '/home');
        } else {
            Flasher::setFlash('gagal', 'register', 'danger');
            header('Location: ' . BASEURL . '/register');
        }
    }
}