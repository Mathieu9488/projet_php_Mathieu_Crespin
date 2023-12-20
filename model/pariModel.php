<?php
include_once('bdd.php');

class pariModel
{

    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }


    public function setPari($team, $amount, $match_id)
    {
        $setUser = $this->bdd->prepare("INSERT INTO Pari(team, amount,match_id) VALUES(?,?,?)");
        return $setUser->execute([$team, $amount, $match_id]);

    }
    public function getParis()
    {
        return $this->bdd->query("SELECT * FROM Pari")->fetchAll(PDO::FETCH_ASSOC);
    }
}


