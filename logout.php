<!DOCTYPE html>
<html lang="en">
<head>
    <title>Logout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">

    <?php
    session_start();
    $navrat = '<a class="button button-primary" href="login.php">Zpět na přihlašovací formulář </a>';
    
    /*Chtěl jsem to udělat sofistikovaně tímto cyklem, ale to nefunguje, nevím proč.
    foreach($_SESSION as $pole){
        unset($pole);
} Takže bohužel musím udělat dva unsety pro každý element zvlášť.*/

    unset($_SESSION['login']);
    unset($_SESSION['data']);
 
    echo "Odhlášení proběhlo úspěšně";
    echo '<br>' . $navrat;
?>

</div>
</body>
</html>



