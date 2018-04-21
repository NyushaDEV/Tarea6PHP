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
        
        
        //
        $this->vista->start();
        $this->vistaLogin();
        $this->vista->end();
        //
        
    }


    public function vistaLogin() {
        $this->vistaLogin->loginForm();
    }
}