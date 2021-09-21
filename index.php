<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <!-- Creare una variabile con un paragrafo di testo a vostra scelta. -->
    <p>
        <?php 
            $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sit sed do eiusmod tempor incididunt sit ut labore et dolore sit magna aliqua sit.";
            $message = "Le parole contenute nel testo sono: ";
            echo $text;
        ?>
    </p>
    <!-- Stampare a schermo il paragrafo e la sua lunghezza.  -->
    <p>
        <?php 
        echo $message;
        echo strlen($text);  
        ?>
    </p>
    <!-- Una parola da censurare viene passata dall'utente tramite parametro GET. -->
    <p>
        <?php 
        $bad_word = $_GET["word"];
        $censorship = "***";
         ?>
    </p>
    <!-- Stampare di nuovo il paragrafo e la sua lunghezza, 
    dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
    <p>
        <?php  $text2 = str_replace($bad_word, $censorship, $text);
        echo $text2;
         ?>
    </p>
    <p>
        <?php 
        echo $message;
        echo strlen($text2);    
        ?>
    </p>
</body>
</html>