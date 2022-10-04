<!DOCTYPE html>
<html>

<head>
    <title>LearnVern | Advanced PHP Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        .table th {
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">LearnVern</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <?php
                if ($_SESSION['user']) {
                    echo '<a  class="btn btn-success" href="logout">Logout</a>';
                } else {
                    if ($_SERVER['PATH_INFO'] == '/login') {
                        echo '<a  class="btn btn-success" href="register">Register</a>';
                    } else {
                        echo '<a  class="btn btn-success" href="login">Login</a>';
                    }
                }
                ?>
            </div>
        </div>
    </nav>