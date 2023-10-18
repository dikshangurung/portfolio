<?php
 session_start();
//  include 'config.php';
//  include_once 'function.php';
//  include_once 'login.php';
//  include_once 'register.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css_docs/style2.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <div class="container_hide">
        <div class="hide">
            <div class="hide_head">
                <div class="login_page">
                    <h1>Login</h1>
                </div>
                <div class="registration_page">
                    <h1>Registration</h1>
                </div>
                <div class="cross">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                    >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                    />
                    </svg>
                </div>
            </div>
            <div class="hide_body">
                <?php include 'config.php';?>
                <?php include_once 'function.php';?>
                <?php include_once 'login.php';?>
                <?php include_once 'register.php';?>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
    <script src="../js_docs/logreg.js"></script>
</body>
</html>