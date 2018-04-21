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
                if($this->userModel->comprobar($usuario, $pass)) {
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['pass'] = $pass;
                } else {
                    $json['mensaje'] = 'Usuario o contraseña incorrecto';
                }
            }

            echo json_encode($json);
        }
    }
}