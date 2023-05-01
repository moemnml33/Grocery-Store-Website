<?php 
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['email-input'] == 'user@' && $_POST['password-input'] == 'password') {
            $_SESSION['is_logged_in'] = true;
            
            // header('Location:'.$_SESSION['last_visited']);
        } 
        else {
            $_SESSION['is_logged_in'] = false;
            echo("login incorrect");
        } 
    }
?>