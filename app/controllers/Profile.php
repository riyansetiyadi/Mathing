<?php

class Profile extends Controller {
    public function index($id)
    {
        $data['user'] = $this->model('User_model')->getUserById($id);
        $countPassword = strlen($data['user']['password']);
        $data['password'] = "";
        for ($x = 1; $x <= $countPassword; $x++) {
            $data['password'] = $data['password'] . "*";
        }
        $data['titleHal'] = 'My Profile';
        $data['level'] = $this->getLevel($id);

        $this->view('templates/header', $data);
        $this->view('profile/index', $data);
        $this->view('templates/footer');
    }

    public function delete($id)
    {
        if ( $this->model('User_model')->deleteUser($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/profile/logout');
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/profile/' . $id);
        }
    }

    public function saveEdit()
    {
        if ( $this->model('User_model')->editUser($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'di edit', 'success');
            header('Location: ' . BASEURL . '/profile/' . $_POST['id']);
        } else {
            Flasher::setFlash('gagal', 'di edit', 'danger');
            header('Location: ' . BASEURL . '/profile/' . $_POST['id']);
        }
    }

    public function edit($id)
    {
        $data['titleHal'] = 'Edit';
        $data['user'] = $this->model('User_model')->getUserById($id);
        $this->view('templates/header', $data);
        $this->view('profile/edit', $data);
        $this->view('templates/footer');
    }

    public function logout()
    {
        $_SESSION = [];
        session_unset();
        session_destroy();

        setcookie("userId", "", time()-3600, "/Tugas_Akhir_pweb2/mvc/public/");
        setcookie("username", "", time()-3600, "/Tugas_Akhir_pweb2/mvc/public/");

        header("location: " . BASEURL . "/login");
        exit;
    }

    public function getLevel($id)
    {
        $exp = (int)$this->model("User_model")->getExp($id)["exp"];
        $level = 0;
        $limit = 5;
        while($exp >= $limit) {
            $level += 1;
            $exp -= $limit;
            $limit *= 2;
        }
        return [
            "level" => $level,
            "exp" => $exp,
            "limit" => $limit
        ];
    }
}