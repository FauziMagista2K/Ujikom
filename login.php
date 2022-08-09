<?php
include 'koneksi.php';
session_start();

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data_login = $data->get_user($username, $password);
    if (mysqli_num_rows($data_login) > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';


        header('location:index.php');
    } else {
        echo "<script> alert ('Maaf Username atau Password Salah') </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="logo" width="100">
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                            <form method="post">
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="username">Username</label>
                                    <input id="username" type="username" class="form-control" name="username" required autofocus>
                                    <div class="invalid-feedback">
                                        Username Wajib Di Isi
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="mb-2 w-100">
                                        <label class="text-muted" for="password">Password</label>

                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                        Password Wajib Di Isi
                                    </div>
                                </div>
                                <button class="btn btn-primary ms-auto" name="login">
                                    Login
                                </button>
                        </div>
                        </form>
                    </div>
                    <div class="text-center mt-5 text-muted">
                        <div class="d-flex align-items-center justify-content-between small">
                            <font fice="Palace Script MT" Font color="#7FFF00"> Copyright 2022 &copy; Fauzi Magista All Rights Reserved.
                                <a target="_blank" rel="nofollow" href="http://instagram.com/fmagista"> Published by Magista2K</a>
                            </font>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/login.js"></script>
</body>

</html>