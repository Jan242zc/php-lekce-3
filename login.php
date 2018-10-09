<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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

    <form method="POST">
        <div class="form-group">
            <label for="formGroupExampleInput">Login:</label>
            <input type="text" name="Login">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Heslo:</label>
            <input type="password" name="Password">
        </div>
        <button type="submit" class="btn btn-primary">Přihlásit</button>
    </form>
    
    <?php
    session_start();
    $pokracovat = '<a class="button button-primary" href="admin.php">Pokračovat do administrace </a>';
    if (($_POST['Login'] == 'admin') && ($_POST['Password'] == 'top-secret')){
        $_SESSION['login'] = $_POST['Login'];
        $_SESSION['data'] = ['Datum registrace:' => '2.4.2018', 'Souhlas s podmínkami' => 'ANO', 'Počet objednávek' => 23];
        echo $pokracovat . '<br>';
    }
    elseif (isset($_POST['Login'])){
        echo "<b>Chybné jméno nebo heslo</b><br>";
    } else {
        echo "";
    }

    ?>
    
</div> <!-- konec kontejneru -->
</body>
</html>

