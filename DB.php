<?php

class DB {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'root';
    private $pdo;

    public function __construct($host=null, $user=null, $pass=null, $dbname=null){
        
        if($host!==null) {
            $host=$this->host;
            $user=$this->user;
            $pass=$this->pass;
            $dbname=$this->dbname;
        }

        try {
            $this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.'', $this->user, $this->pass);
        } catch(Exception $e) {
            die($e);
        }

    }
    
}