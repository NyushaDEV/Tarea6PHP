<?php 

class Controlador {
    private $vistaLogin;
    private $vista;
    private $db;
    private $userModel;

    public function __construct() {
        session_start();
        require_once 'DB.php';
        require_once 'model/usuarios.php';
        $this->db = new DB();
        $this->userModel = new userModel();

        require_once 'views/vista.php';
        require_once 'views/vistaLogin.php';
        $this->vista = new vista();
        $this->vistaLogin = new vistaLogin();
        

        
        // Vistas
            $this->vista->start();
            $this->vistaLogin();
            $this->vista->end();
        //
        
    }


    public function vistaLogin() {
        $this->vistaLogin->loginForm();
    }

}