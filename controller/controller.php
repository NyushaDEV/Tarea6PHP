<?php 

class Controlador {
    private $vista;
    private $db;
    public function __construct() {
        require 'DB.php';
        $this->db = new DB();
    }
}