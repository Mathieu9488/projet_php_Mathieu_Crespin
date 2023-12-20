<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header>
    <nav>
      <a href="?page=accueil">Accueil</a>
      <a href="?page=articles">Parier</a>
      <?php if (!isset($_SESSION['nom'])) { ?>
        <a href="?page=inscription">Inscription</a>
        <a href="?page=authentification">Authentification</a>
      <?php } else { ?>
        Vous êtes connecté,
        <?= @$_SESSION['nom'] ?>
        <a href="?page=exit">Se deconnecter</a>
        <a href="?page=paris">Mes Paris</a>
      <?php } ?>

    </nav>
  </header>
  <hr>

  <style>
    body {
      margin: 0;
      background: linear-gradient(#2C3E50, #000000);
      font-family: 'Tw Cen MT', sans-serif;
      color: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
    }

    header {
      background-color: #1a1a1a;
      color: #fff;
      padding: 20px;
      text-align: center;
      width: 100%;
      box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
    }


    a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-size: 1.2em;
    }

    a:hover {
      border-bottom: 2px solid #3498db;
    }
  </style>