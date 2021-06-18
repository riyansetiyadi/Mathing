<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $data['titleHal'] ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>
<body>
<div class="container fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= BASEURL; ?>"><img src="<?= BASEURL; ?>/img/logo.png" alt="" class="logo"></a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link ms-3 active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-3" href="<?= BASEURL ?>/operator">Operator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-3" href="<?= BASEURL ?>/#About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-3" href="<?= BASEURL ?>/profile/index/<?= $_SESSION["id"] ?>">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-3" href="<?= BASEURL; ?>/profile/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>