<?php
    require_once '../setup.php';
    require_once '../dbconnection/connection.php';
    require_once '../dbconnection/helpers.php';

    if ( !empty($_SESSION) ){
        header("Location: ".BASE_URL);
        die();
    }
    
    if( isset($_POST['login']) ){
        $username = trim($_POST['username']) ?? null;
        $password = trim($_POST['password']) ?? null;

        // username:
        if ( empty($username) ){
            $errors['username']['empty'] = "Debes introducir un nombre de usuario.<br>";
            $username = null;
        }

        // password:
        if ( empty($password) ){
            $errors['password']['empty'] = "Debes facilitar una contraseña.<br>";
        }
    
        if ( strlen($password) < 6 ) {
            $errors['password']['length'] = "La contraseña debe tener al menos 6 caracteres.<br>";
        }

        if( empty($errors) ){

            $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
            
            $login = mysqli_query($db, $sql);

            $guardar = mysqli_query($db, $sql);

            if( $login && mysqli_num_rows($login)==1 ){
                $usuario = mysqli_fetch_assoc($login);
        
                if( password_verify($password, $usuario['password']) ) {
                    guardarLogin($db, $username, 'OK');

                    $_SESSION['usuario'] = $usuario;
                    header("Location: ".BASE_URL);
                }else{
                    guardarLogin($db, $username, 'WRONG_PASS');

                    $errors['login']['password'] = "La contraseña no es correcta.";
                }
            }else{
                guardarLogin($db, $username, 'WRONG_USER');
                $errors['login']['data'] = "Los datos no son correctos.";
            }  
        }
    }

    require_once 'login.view.php';