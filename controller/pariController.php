<?php
include_once('model/pariModel.php');

class PariController
{
    private $model;
    public function __construct()
    {
        $this->model = new pariModel;
    }

   
    public function getFormInscription()
    {
        include_once('view/articles.php');
    }
    public function getParis()
    {
        $articles = $this->model->getParis();
        include_once('view/paris.php');
    }


    public function setPari()
    {
        if (isset($_POST['selected_team'])) {
            $team = $_POST['selected_team'];
            $amount = $_POST['amount'];
            $match_id = $_POST['match_id'];

            if ($this->model->setPari($team, $amount, $match_id)) {
                echo "<script>window.location.href = 'index.php?page=paris';</script>";
            } else {
                echo "Inscription KO";
                $this->getFormInscription();
            }


        } else {
            $this->getFormInscription();
        }
    }

}