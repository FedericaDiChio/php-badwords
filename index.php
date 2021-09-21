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
</body>
</html>