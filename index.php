<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>index</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <div id="indexBox">
            <form action="login.php" id="loginForm">
                <input type="submit" value="login" id="loginButton">
            </form>
            <form action="register.php" id="registerForm">
                <input type="submit" value="register" id="registerButton">
            </form>
            <?php
                if(isset($_SESSION["login"])){
                    echo"<form action='home.php' id='dashboardForm'>
                            <input type='submit' value='dashboard' id='dashboardButton'>
                        </form>";
                }
            ?>
        </div>
        <?php
            error_reporting(0);
            if(isset($_SESSION["login"])){
                echo "<div style='position:absolute; right:20px; bottom:20px;'>logeed in as " . $_SESSION["login"] . "</div>";
            }
        ?>
    </body>
</html>