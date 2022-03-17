<?php

    session_start();

    if (
        isset($_SESSION['login']) &&
        $_SESSION['login']
    ) {
        die(header("Location: ./"));
    }

?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/custom.css">
        <link rel="shortcut icon" href="./img/favicon.svg" type="image/x-icon">
    </head>
    <body>
        <div class="container">
            <div class="row h-100vh d-flex justify-content-center align-items-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                    <div class="card shadow rounded-0">
                        <div class="card-body text-center">
                            <img class="logo" src="./img/logo-dark.svg" alt="Logo">
                            <h3 class="font-weight-normal m-0 mt-2">Login</h3>
                            <form class="mt-4" action="./jobs/" method="POST">
                                <input class="form-control" type="text" placeholder="Username" name="username">
                                <input class="form-control mt-2" type="password" placeholder="Password" name="password">
                                <button class="btn btn-danger btn-block mt-3">
                                    <span class="font-weight-normal">Login</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>

            console.log(
                '%cYou%c are being watched.',
                'font-family: Arial; color: #DC3545; font-size: 2rem;',
                'font-family: Arial; color: #343A40; font-size: 2rem;',
            );

        </script>
    </body>
</html>