<?php
    if(isset($_POST['connecter'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
        $vrai_login = "MEDIATECH";
        $vrai_pass = "CENTREadmin123!";
        if($login == $vrai_login && $password == $vrai_pass){
            header('location:index_accueil.php');
        }
        else{
            header('location:index.php');
            echo "Login ou Mot de passe incorrect";
        }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>page de connection</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="connection/connection.css">
    </head>
    <body>
        <form action="index.php" method="POST">
            <h1>SE CONNECTER</h1>
            <div class="button">
                <p></p>
                <p></p>
                <p></p>
                <p></p>
            </div>
            <div class="input">
                <input type="text" placeholder="LOGIN" name="login">
            </div>
            <div class="puto">
                <input type="password" placeholder="PASSWORD" id="password" name="password">
                <img src="image/image.jpg" id="eye" onclick="changer()">
            </div>
            <p>MEDIA TECH  ADMIN PANNEL</p>
            <div align="center">
                <button type="submit" name="connecter">SE CONNECTER</button>
            </div>
        </form>
        <script src="connection/connection.js"></script>
    </body>
</html>