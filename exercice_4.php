<?php
require_once 'connexion.inc.php';

$errorMsg = '';
if (count($_POST) > 0) {
    $sql = 'SELECT * FROM user WHERE `login` = "'. $_POST['login'] .'" AND `motDePasse` = "'. md5($_POST['mdp']) .'" ';
    $stmt = $copdo->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        session_start();
        setcookie('login', $_POST['login'] , time()+100, '/');
        setcookie('mdp', $_POST['mdp'] , time()+100, '/');
        session_get_cookie_params();
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['mdp'] = $_POST['mdp'];
        $_SESSION['connexion'] = 0;
        $_SESSION['connexion']++;
        header('location: exercice_5.php');
    } else  $errorMsg = 'Email ou mot de passe incorrect';
}
if(isset($_SESSION)){
    // ?var_dump($_SESSION);
} else session_start();

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        *{
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
            overflow: hidden;
        }
        div{
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 300px;
            padding: 10px;
            background-color: #252525;
            border-radius: 5px;
        }
        div a{
            color: #0C9A9A;
            transition: color 0.4s;
            margin: 7px auto 0;
            text-decoration: none;
        }
        div a:hover{
            color: #0eb8b8;
        }
        div form{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        label{
            color: #fff;
            font-weight: 600;
        }
        div input[type='text'] , div input[type='password']{
            background-color: transparent;
            outline: none;
            border-top: none;
            border-right: none;
            border-bottom: 3px solid #fff;
            border-left: none;
            color: #fff0f0;
            font-size: 1rem;
            transition: border-bottom 0.2s;
        }
        div input[type='text']:focus , div input[type='password']:focus{
            border-top: none;
            border-right: none;
            border-bottom: 3px solid #0eb8b8;
            border-left: none;
        }
        div input[type='submit']{
            outline: none;
            font-weight: 800;
            padding: 5px 0;
            border-radius: 5px;
            border: none;
        }
    </style>
</head>
<body>
<div>
    <form method="post">
        <label for="">Login</label><br>
        <input type="text" name="login"><br>
        <label for="">Mot de passe</label><br>
        <input type="password" name="mdp"><br>
        <p><?= $errorMsg ?></p>
        <input type="submit" value="LOGIN">
    </form>
    <a href="logout.php">-Logout-</a></div>
</body>
</html>