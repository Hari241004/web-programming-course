<?php

    if(isset($_POST['email']) || isset($_POST['email'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email == 'admin@gmail.com' && $password == 'admin123') {
            header('Location: ./../dashboard.php');
        } else {
            echo "email atau password salah.";
        }
    }