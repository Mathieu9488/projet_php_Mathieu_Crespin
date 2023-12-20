<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        main {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        body {
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: grey;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .event {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 20px;
            text-align: left;
        }

        .article-title {
            color: #333;
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        .bet-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .bet-form label {
            margin-top: 10px;
            display: block;
            font-size: 1.1em;
        }

        .bet-form input,
        .bet-form select {
            padding: 10px;
            margin-top: 5px;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .bet-form button {
            padding: 12px;
            margin-top: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.1em;
        }

        .article-title {
            text-align: center;
        }

        .left-image {
            max-width: 70px;
            height: auto;
            margin-left: 70px;
            padding-right: 20px;
        }

        .right-image {
            max-width: 70px;
            height: auto;
            margin-left: 10px;
        }
    </style>

</head>

<body>
    <main>
    <?php
for ($i = 0; $i < count($articles); $i++) {
    for ($j = $i + 1; $j < count($articles); $j++) {
        $team1 = $articles[$i]['name'];
        $team2 = $articles[$j]['name'];
        $team1Image = $articles[$i]['image_url'];
        $team2Image = $articles[$j]['image_url'];

        $matchId = $articles[$i]['id'];

        echo "<div class='event'>";
        echo "<h2 class='article-title'>$team1 vs $team2</h2>";

        echo "<img src='$team1Image' alt='$team1' class='left-image'>";
        echo "<img src='$team2Image' alt='$team2' class='right-image'>";

        echo "<div class='bet-form'>";
        echo "<h3>Placez votre pari</h3>";
        echo "<form action='' method='post'>";
        echo "<input type='hidden' name='team1' value='$team1'>";
        echo "<input type='hidden' name='team2' value='$team2'>";
        echo "<input type='hidden' name='match_id' value='$matchId'>";
        

        echo "<label class='article-title'><input type='radio' name='selected_team' value='$team1'> Parier sur $team1</label>";
        echo "<label class='article-title'><input type='radio' name='selected_team' value='$team2'> Parier sur $team2</label>";

        echo "<h3><label for='amount' class='article-title'>Montant du pari :</label></h3>";
        
        echo "<input type='number' name='amount' id='amount' required>";
        echo "<button type='submit'>Placer le pari</button>";

        echo "<div style='text-align: center;'>";
        echo "</div>";
        echo "</form>";
        echo "</div>";

        echo "</div>";
    }
}
?>

    </main>
</body>

</html>