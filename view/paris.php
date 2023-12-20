<style>
    .pari {
        background-color: grey;
        width: 200px;
        text-align: center;
        margin-top: 40px;
    }
</style>
<?php
foreach ($articles as $article) { ?>
    <div class= "pari">
    <h1><?= $article["id"]?></h1>
    <h1><?= $article["team"]?></h1>
    <h1><?= $article["amount"]?> &#8364;</h1>
    </div>
<?php }
