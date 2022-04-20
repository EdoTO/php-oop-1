<?php

require_once __DIR__ . "/class.php";

$armageddon = new Film(
    "http://aforismi.meglio.it/img/film/armageddon.jpg",
    "Armageddon  Giudizio Finale",
    "Il pianeta Terra è minacciato dall'impatto imminente di un gigantesco asteroide. Il governo americano, incapace di trovare una soluzione, si affida a una squadra di trivellatori disposti a compiere un sacrificio estremo pur di salvare i propri cari.",
    "Fantascienza",
);

$interstellar = new Film(
    "https://m.media-amazon.com/images/I/A1smtRIAUvL._AC_SL1500_.jpg",
    "Interstellar",
    "Un lungo e concertato tentativo di salvare la razza umana da una sicura estinzione, dopo che le risorse e le condizioni della vita sulla Terra stanno progressivamente deteriorandosi. I protagonisti sono Cooper, un ex-ingegnere della Nasa, e sua figlia Murphy.",
    "Fatnascienza",
);

$the_wolf_of_wall_street = new Film(
    "https://images-na.ssl-images-amazon.com/images/I/914oHftat8L.jpg",
    "The Wolf of Wall Street",
    "The Wolf of Wall Street racconta la storia di Jordan Belfort, che negli anni Novanta si inventò il modo di fare un sacco di soldi grazie alla vendita delle “penny stocks”, azioni di poco valore di piccole società, con sistemi fraudolenti.",
    "Commedia",
);

$film_array = [];

array_push($film_array, $armageddon, $interstellar, $the_wolf_of_wall_street);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Film</title>
</head>

<body>

    <h1 class="main-title">I MIEI FILM</h1>

    <div class="container">

        <?php

        foreach ($film_array as $vetrina) {
            $vetrina->filmCompleto();
        }

        ?>

    </div>

</body>

</html>