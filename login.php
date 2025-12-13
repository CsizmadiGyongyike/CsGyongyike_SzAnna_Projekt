<?php 
    $teszt_username = "tesztUsername";
    $teszt_password = "teszt123";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === $teszt_username && $password === $teszt_password) {
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;

            header("Location: index.html");
            exit;
        }
        else {
            $error = "Hibás felhasználónév vagy jelszó!";
        }
    }
?>