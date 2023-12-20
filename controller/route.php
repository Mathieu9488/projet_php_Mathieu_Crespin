<?php

$page = $_GET['page'];

if ($page == 'accueil') {
    include('view/accueil.php');
} elseif ($page == 'articles') {
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticles();
    include_once('controller/pariController.php');
    $articles = new PariController;
    $articles->setPari();
} elseif ($page == 'inscription') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->setUser();
} elseif ($page == 'paris') {
        include_once('controller/pariController.php');
        $articles = new PariController;
        $articles->getParis();
} elseif ($page == 'authentification') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->getAuthentification();
} elseif ($page == 'exit') {
    $_SESSION = array();
    echo "<script>window.location.href = 'index.php?page=accueil';</script>";
} else {
    echo 'page introuvable';
}
