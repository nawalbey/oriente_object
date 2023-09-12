<?php

// creer la classe DbConnect permettant de se connecter a la base de donnees

class DbConnect
{

    private $servername = "localhost";
    private $dbName= "cours_db";
    private $username = "root";
    private $password = "";
    public function dbConnexion()
    {

        $conn = null;
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbName", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return ;
    }
}