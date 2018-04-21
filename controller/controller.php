<?php 

class Controlador {
    private $vistaLogin;
    private $vista;
    private $db;
    public function __construct() {
        require 'DB.php';
        $this->db = new DB();

        require 'views/vista.php';
        require 'views/vistaLogin.php';
        $this->vista = new vista();
        $this->vistaLogin = new vistaLogin();
        
        
        // Vistas
            $this->vista->start();
            $this->vistaLogin();
            $this->vista->end();
        //

        if(isset($_GET['login'])) {
            $this->login();
        }
        
    }


    public function vistaLogin() {
        $this->vistaLogin->loginForm();
    }

    public function login() {

        $json = array();
        if(isset($_POST['usuario']) && isset($_POST['pass'])) {
            $usuario = $_POST['usuario'];
            $pass = $_POST['pass'];

            if(empty($usuario) || empty($pass)) {
                $json['mensaje'] = 'Los campos usuario o contraseña están vacios';
            } else {
            }

            echo json_encode($json);
        }
    }
}