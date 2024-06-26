<?php
    $text = "Sono dieci anni che non lo vedo. Levi entra nell’ufficio. Sto scrivendo una lettera commerciale con un’offerta, da inviare via mail. Ho la giacca e la cravatta, i pantaloni neri comprati all’Oviesse che mi stringono al cavallo. Sento i bottoni della camicia tendersi in corrispondenza dello stomaco. Sto mettendo su peso. La sera mi lamento con Teresa perché sono convinto che questo modo di vestirmi mi stia facendo perdere anche i capelli, oltreché ingrassare. Levi imbocca la porta: ha quasi trent’anni, adesso, come me del resto; ha la barba lunga e folta, i capelli con un taglio da studente. Indossa una giacca di velluto a costine, una camicia bianca e jeans sdruciti. Sono convinto che sia diventato un professore universitario. La sua sola presenza in ufficio mi rende nervoso, polverizza gli ultimi anni di costruzioni e sacrifici per avere quello che ho. La sua perfezione animalesca mi ricorda a quanto ho mancato. Mi fa pensare di aver desiderato qualcosa, un giorno, ma di non avercela fatta. Per lui è diverso: dove finisce il suo polpastrello inizia il fatto compiuto. Levi – lo chiamavano Lev a scuola? Ricordo qualcosa in proposito, il Lev del «Newton», il Lev impegnato in politica, come il famoso nonno partigiano e poi dirigente della socialdemocrazia cittadina – Lev guarda i faldoni, le pratiche degli assicurati, i loro sinistri, le loro polizze, i premi, la storia delle loro collisioni, le volte che le carrozzerie delle loro auto si sono scontrate con quelle di altri, le volte in cui la faccenda si è chiusa con una firma sul cofano dell’auto e le volte in cui, invece, qualche paramedico ha sparso segatura sul sangue versato.
    Il padre di Teresa mi dice che faccio un lavoro rispettabile, che sono un lavoratore rispettabile, che ho buoni orari e dei benefit. Ogni estate riesco ad avere tre settimane di ferie. Lavoro abbastanza vicino a casa.
    Spero che Levi non chieda di stipulare una nuova polizza o che voglia parlare con qualcuno dell’Area Commerciale. Cerco in anagrafico il suo nome, ma non lo trovo. Poi Lev scarta lontano dalla mia postazione. Ficco lo sguardo al di là della parete e lo vedo accolto dal direttore. Ritorno al mio loculo; la camicia bianca che sale sul monte della pancia.";

    $parola = $_GET["long-text"];

    $text = str_replace($parola, "***", $text);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <form action="./index.php" method="GET">
        <input type="text" name="long-text" id="long-text" placeholder="Parola da censurare">
        <button type="submit">Send</button>
    </form>
    <?php echo $text ?>
</body>
</html>