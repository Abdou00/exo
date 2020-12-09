<?php
//session_start();
$mysqli = new mysqli('localhost', 'root', '', 'exo');
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
} elseif(isset($_POST['submit'])) {
    if(empty($_POST['login'])) {
        echo 'Empty login' ;
    } else {
        //$_SESSION['login'] = $_POST['login'];
        //$_SESSION['pass'] = $_POST['pass'];
        $query = 'SELECT * FROM log';
        $result = $mysqli->query($query);
        if ($result->num_rows == 1) {
            while($value = $result->fetch_assoc()) {
                $login = $value['login'];
                $pass = $value['motDePasse'];
                $hash = password_hash($pass, PASSWORD_BCRYPT);
                if($pass != $_POST['pass']) echo 'Wrong password';
            }
            header('Location: success.php');
        }
        $mysqli->close();
    }
}
?>
<form method ='post' action="">
    <input type="text" name="login">
    <input type="password" name="pass">
    <input type="submit" name="submit">
</form>





