<?php

class vistaLogin extends vista {


    public function loginForm() {
        echo 
        '<h1>Iniciar Sesión</h1>' .
        '<form method="POST" action="">' .
            '<div><label>Usuario</label></div>' . 
            '<div><input type="text" name="usuario"></div>' . 
            '<div><label>Contraseña</label></div>' . 
            '<div><input type="password" name="pass"></div>' .
            '<br><div><button>Iniciar sesión</button></div>';
    }
}

