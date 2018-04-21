<?php

require_once 'model/usuarios.php';

function login() {
    $userModel = new userModel();

    $json = array();
    if(isset($_POST['usuario']) && isset($_POST['pass'])) {
        $usuario = $_POST['usuario'];
        $pass = $_POST['pass'];

        if(empty($usuario) || empty($pass)) {
            $json['mensaje'] = 'Los campos usuario o contraseña están vacios';
        } else {
            if($userModel->comprobar($usuario, $pass)) {
                $_SESSION['usuario'] = $usuario;
                $_SESSION['pass'] = $pass;
                $json['mensaje'] = 'OK';
            } else {
                $json['mensaje'] = 'Usuario o contraseña incorrecto';
            }
        }

        echo json_encode($json);
    }
}

login();