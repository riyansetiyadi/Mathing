<?php

class Operator extends Controller {
    public function index()
    {
        $data['titleHal'] = 'Operator';
        $this->view('templates/header', $data);
        $this->view('operator/index', $data);
        $this->view('templates/footer');
    }

    public function  choiceOpDiff()
    {
        header('Location: ' . BASEURL . '/operator/' . $_POST["operator"] . '/' . $_POST["difficulty"]);
        exit;
    }

    public function penjumlahan($difficulty = "Acak")
    {
        if ( isset($_SESSION["number1"]) && isset($_SESSION["number2"]) ) {
            $result = $_SESSION["number1"] + $_SESSION["number2"];
            if ( isset($_POST['answer']) ) {
                if ( $result == $_POST['answer'] ) {
                    $earnExp = $this->countExp("Penjumlahan", $difficulty);
                    $this->model("User_model")->addExp($earnExp);
                    echo '<script>alert("jawaban benar")</script>';
                }
            }
        }        

        $_SESSION['number1'] = $this->randomNumber($difficulty);
        $_SESSION['number2'] = $this->randomNumber($difficulty);

        $data['difficulty'] = $difficulty;
        $data['titleHal'] = 'Penjumlahan';
        $this->view('templates/header', $data);
        $this->view('operator/penjumlahan', $data);
        $this->view('templates/footer');
    }

    public function pengurangan($difficulty = "Acak")
    {
        if ( isset($_SESSION["number1"]) && isset($_SESSION["number2"]) ) {
            $result = $_SESSION["number1"] - $_SESSION["number2"];
            if ( isset($_POST['answer']) ) {
                if ( $result == $_POST['answer'] ) {
                    $earnExp = $this->countExp("Pengurangan", $difficulty);
                    $this->model("User_model")->addExp($earnExp);
                    echo '<script>alert("jawaban benar")</script>';
                }
            }
        }        

        $_SESSION['number1'] = $this->randomNumber($difficulty);
        $_SESSION['number2'] = $this->randomNumber($difficulty);

        $data['difficulty'] = $difficulty;
        $data['titleHal'] = 'Pengurangan';
        $this->view('templates/header', $data);
        $this->view('operator/pengurangan', $data);
        $this->view('templates/footer');
    }

    public function perkalian($difficulty = "Acak")
    {
        if ( isset($_SESSION["number1"]) && isset($_SESSION["number2"]) ) {
            $result = $_SESSION["number1"] * $_SESSION["number2"];
            if ( isset($_POST['answer']) ) {
                if ( $result == $_POST['answer'] ) {
                    $earnExp = $this->countExp("Perkalian", $difficulty);
                    $this->model("User_model")->addExp($earnExp);
                    echo '<script>alert("jawaban benar")</script>';
                }
            }
        }        

        $_SESSION['number1'] = $this->randomNumber($difficulty);
        $_SESSION['number2'] = $this->randomNumber($difficulty);

        $data['difficulty'] = $difficulty;
        $data['titleHal'] = 'Perkalian';
        $this->view('templates/header', $data);
        $this->view('operator/perkalian', $data);
        $this->view('templates/footer');
    }

    public function pembagian($difficulty = "Acak")
    {
        if ( isset($_SESSION["number1"]) && isset($_SESSION["number2"]) ) {
            $result = $_SESSION["number1"] / $_SESSION["number2"];
            if ( isset($_POST['answer']) ) {
                if ( round($result, 2) == $_POST['answer'] ) {
                    $earnExp = $this->countExp("Pembagian", $difficulty);
                    $this->model("User_model")->addExp($earnExp);
                    echo '<script>alert("jawaban benar")</script>';
                }
            }
        }        

        $_SESSION['number1'] = $this->randomNumber($difficulty);
        $_SESSION['number2'] = $this->randomNumber($difficulty);

        $data['difficulty'] = $difficulty;
        $data['titleHal'] = 'Pembagian';
        $this->view('templates/header', $data);
        $this->view('operator/pembagian', $data);
        $this->view('templates/footer');
    }

    function randomNumber($difficulty) {
        if ($difficulty === "Satuan") {
            return rand(0, 9);
        } elseif ($difficulty === "Puluhan") {
            return rand(10, 99);
        } elseif ($difficulty === "Ratusan") {
            return rand(100, 999);
        } elseif ($difficulty === "Ribuan") {
            return rand(1000, 9999);
        } else {
            return rand(0, 9999);
        }
    }

    public function countExp($operator, $difficulty)
    {
        if( $operator == "Penjumlahan" || $operator === "Pengurangan") {
            $expOp = 1;
        } else {
            $expOp = 2;
        }

        if ($difficulty === "Satuan") {
            return $expOp * 1;
        } elseif ($difficulty === "Puluhan") {
            return $expOp * 2;
        } elseif ($difficulty === "Ratusan") {
            return $expOp * 3;
        } elseif ($difficulty === "Ribuan") {
            return $expOp * 4;
        } else {
            return $expOp * 5;
        }
    }
}