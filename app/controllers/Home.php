<?php

class Home extends Controller {
    public function index()
    {
        if ( !isset($_SESSION["login"]) ) {
            header("Location: " . BASEURL . "/login");
            exit;
        }

        $data['titleHal'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }


    public function tambah()
    {
        if ( $this->model('User_model')->tambahDataAkun($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/home');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/home');
        }
    }
    
}