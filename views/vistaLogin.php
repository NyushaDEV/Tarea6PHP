<?php

class vistaLogin extends vista {


    public function loginForm() {
        echo '<form method="POST" action="">' .
            '<label>Usuario</label>' . 
            '<input type="text" name="usuario">' . 
            '<label>Usuario</label>' . 
            '<input type="password" name="pass">' .
            '<button>Iniciar sesión</button>';
    }
}

