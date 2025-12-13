<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    }
    
    if (empty($username) || empty($email) || empty($password)) {
        die("Hiba: Minden mező kitöltése kötelező.");
    }
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $db_host = 'localhost';
    $db_user = 'db_felhasznalo';
    $db_pass = 'db_jelszo';
    $db_name = 'webshop_db';
?>