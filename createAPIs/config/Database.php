<?php

class Database
{
    private $host = 'localhost'; //serveur donné
    private $db_name = 'api_rest'; //nom de la DB
    private $username = 'root'; //username
    private $password = ''; //password
    public $connexion; //propriété qui permet de stocker les donnés

    //Méthode qui permet d'établir la connexion et retourner un object PDO
    public function getConnection()
    {
        $this->connexion = null;
        try {
            $this->connexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->connexion;
    }
}
