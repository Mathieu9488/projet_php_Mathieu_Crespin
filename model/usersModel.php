<?php
include_once('bdd.php');

class UsersModel
{

    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }

    public function getUsers()
    {
        return $this->bdd->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getUserByEmail($email)
    {
        return $this->bdd->query("SELECT * FROM users WHERE email='$email'")->fetch(PDO::FETCH_ASSOC);

    }

    public function setUser($nom, $email, $mdp)
    {
        $setUser = $this->bdd->prepare("INSERT INTO users(name,email,password) VALUES(?,?,?)");
        return $setUser->execute([$nom, $email, $mdp]);

    }


}


