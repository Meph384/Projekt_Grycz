<?php
    session_start();

    $username = "";
    $email = "";
    $errors = array();

    $db = mysqli_connect('localhost','root','','Projekt');

    if (count($errors) == 0 ) { 
        $password = md5 ($password);

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Zalogowałeś się";

            header('location: landingPage.html');
        } else {
            array_push($errors, "Zły login/jasło");
        }
    } 


?>