<?php
    require_once '../setup.php';
    require_once '../database/conexion.php';

    if ( !empty($_SESSION) ){
        header("Location: ".BASE_URL);
        die();
    }
    
    if( isset($_POST['registro']) ){
        $username = $_POST['username'] ?? null;
        $email = $_POST['email'] ?? null;
        $password = trim($_POST['password']) ?? null;
        $passwordconf = trim($_POST['password-conf']) ?? null;

        $errors = [];

        if ( empty($username) ){
            $errors['username']['empty'] = "el campo 'nombre de usuario' debe ser introducido.";
            $username = null;
        }

        if ( strlen($username) < 5 ) {
            $errors['username']['length'] = "El nombre de usuario debe tener al menos 5 caracteres.";
            $username = null;
        }

        if ( !preg_match("/[0-9A-Za-z]+$/",$username) ){
            $errors['username']['format'] = "El nombre de usuario solo admite números y letras.";
            $username = null;
        }
    
        if ( empty($email) ){
            $errors['email']['empty'] = "El campo 'email' debe ser introducido.";
            $email = null;
        }

        if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
            $errors['email']['format'] = "Debes introducir un email válido.";
            $email = null;
        }
    
        // password:
        if ( empty($password) ){
            $errors['password']['empty'] = "El campo 'contraseña' debe ser introducido.";
        }
    
        if ( strlen($password) < 6 ) {
            $errors['password']['length'] = "La contraseña debe tener al menos 6 caracteres.";
        }

        if ( empty($passwordconf) ){
            $errors['passwordconf']['empty'] = "Debes confirmar la contraseña.";
        }

        if ( $password != $passwordconf ){
            $errors['passwordconf']['match'] = "Las contraseñas no coinciden.";
        }
    
        if( empty($errors) ){

            $password_segura = password_hash($password, PASSWORD_BCRYPT);

            // Insertar usuario en la base de datos
            $sql = "INSERT INTO users VALUES(NULL, '$username', '$email', '$password_segura', NOW(), NOW())";

            $guardar = mysqli_query($db, $sql);

            if( $guardar ){
                header("Location: ".BASE_URL);
                die();
            }

            echo "Error";
            die();   
        }
    }

    require 'register.view.php';