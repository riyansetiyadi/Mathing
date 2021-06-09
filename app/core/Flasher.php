<?php

class Flasher {
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if ( isset($_SESSION['flash']) ) {
            echo $_SESSION['flash']['pesan'] . $_SESSION['flash']['aksi'] . $_SESSION['flash']['tipe'];
            unset($_SESSION['flash']);
        }
    }
}