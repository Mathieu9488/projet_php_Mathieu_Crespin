<?php
include_once('model/usersModel.php');

class UsersController
{
    private $model;
    public function __construct()
    {
        $this->model = new UsersModel;
    }
    public function getFormInscription()
    {
        include_once('view/inscription.php');
    }


    public function setUser()
    {
        if (isset($_POST['nom'])) {
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

            if ($this->model->setUser($nom, $email, $mdp)) {
                echo "Inscription OK";
            } else {
                echo "Inscription KO";
                $this->getFormInscription();
            }


        } else {
            $this->getFormInscription();
        }


    }
    public function getFormAuthentification()
    {
        include_once('view/authentification.php');
    }
    public function getAuthentification()
    {
        if (isset($_POST['email'])) {

            $email = $_POST['email'];

            $user = $this->model->getUserByEmail($email);
            $mdp = password_verify($_POST['mdp'], $user['password']);

            if ($mdp) {
                $_SESSION['nom'] = $user['name'];
                echo "<script>window.location.href = 'index.php?page=accueil';</script>";
            } else {
                $this->getFormAuthentification();
            }


        } else {
            $this->getFormAuthentification();
        }


    }


}