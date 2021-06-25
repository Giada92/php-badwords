<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php 
    $testo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt alias officia hic repellat deserunt enim vero et iste perferendis dolorum adipisicing.";
    $_GET["censura"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo esercizio di PHP</title>
</head>
<body>

    <h1>Testo</h1>
    <p><?php echo $testo;?></p>
    <h5>Il testo è composto da: <span><?php echo strlen($testo);?></span> lettere!</h5>

    <h2>Parola censurata</h2>
    <p><?php echo $_GET["censura"];?></p>

    <h2>Paragrafo con censura</h2>
    <p>
        <?php 
                $sostParola = str_replace($_GET["censura"], ('***'), $testo);
                echo $sostParola;
        ;?>
    </p>
    <h5>Il testo è composto da: <span><?php echo strlen($sostParola);?></span> lettere!</h5>

</body>
</html>