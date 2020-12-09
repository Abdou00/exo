<?php
session_start();
//var_dump($_SESSION);

if($_SESSION['login'] === 'admin'){
    echo 'Bienvenue : '.$_SESSION['login'];
    if (isset($_SESSION))$_SESSION['connexion']++;
    echo '<br>How many times you visited any pages : '.$_SESSION['connexion'];
}else {
    foreach ($_SESSION as $key => $value) {
        unset($_SESSION[$key]);
        session_destroy();
    }
    header('Location: exercice_4.php');
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>