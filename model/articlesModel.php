<?php
class ArticlesModel
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }
    
    public function getArticles()
    {
        return $this->bdd->query("SELECT * FROM articles")->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getArticleById($id)
    {
        return $this->bdd->query("SELECT * FROM articles WHERE id=$id")->fetch(PDO::FETCH_ASSOC);
    }

    public function setArticle($name, $image_url)
    {
        $setArticle = $this->bdd->prepare("INSERT INTO articles(name, image_url) VALUES(?, ?)");
        return $setArticle->execute([$name, $image_url]);
    }
    public function getMatchDetails($id)
    {
        return $this->bdd->query("SELECT * FROM articles WHERE id=$id")->fetch(PDO::FETCH_ASSOC);
    }

    public function placeBet($team, $amount, $matchId)
    {
        $placeBet = $this->bdd->prepare("INSERT INTO Pari (team, amount, match_id) VALUES (?, ?, ?)");
        return $placeBet->execute([$team, $amount, $matchId]);
    }
}
?>