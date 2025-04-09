<?php

namespace App\UserModelDao;

use App\ModelDAO;
use App\UserModel;

class UserModelDAO extends ModelDAO
{
    private $connexion;

    public function getUser(string $login): 
    {
        $sql = "SELECT * FROM utilisateur WHERE login = :login ;";
        $req = $this->connexion->prepare($sql);
        $req->bindParam(':login', $login);
        $req->execute();
        $res = $req->fetch($this->connexion::FETCH_ASSOC);
        return $res;
        
    }
    
    public function findUser(string $name, string $firstname): bool
    {
        $sql = "SELECT * FROM utilisateur WHERE name = :name AND firstname = :firstname ;";
        $req = $this->connexion->prepare($sql);
        $req->bindParam(':name', $name);
        $req->bindParam(':firstname', $firstname);
        $req->execute();
        $res = $req->fetch($this->connexion::FETCH_ASSOC);
        return $res == '' ? false: true;
    }

    public function setMail(){

    }

    public function __construct()
    {
        $modelDAO = new ModelDAO;
        $this->connexion = $modelDAO->dbConnection();
    }
}



?>