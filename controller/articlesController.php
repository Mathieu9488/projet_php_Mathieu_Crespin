<?php
include_once('model/articlesModel.php');
include_once('model/bdd.php');

class ArticlesController
{
    private $model;

    public function __construct()
    {
        $bdd = Bdd::connexion();
        $this->model = new ArticlesModel($bdd);
    }

    public function getArticles()
    {
        $articles = $this->model->getArticles();
        include_once('view/articles.php');
    }
}


