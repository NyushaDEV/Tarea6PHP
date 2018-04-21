<?php

class userModel{

    public function comprobar($user, $pass) {
        require_once 'DB.php';
        $db = new DB();
        return $db->consulta('SELECT * FROM usuarios WHERE usuario=:usuario AND pass=:pass', array(
            'usuario'   =>  $user,
            'pass'      =>  $pass
        ));
    }
}