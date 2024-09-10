<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div id="indexBox">
            <div id="loginText">Log In</div>
            <form action="login.php" method="post">
                <div id="loginRow">username:<input type="text" name="username" id="loginInput"></div>
                <div id="loginRow">password:<input type="text" name="password" id="loginInput"></div>
                <input type="submit" value="Log in" id="submit">
            </form>
            <form action="index.php">
                <input type="submit" value="back to index" id="index">
            </form>
        </div>

        <?php
            include "db_connect.php";
            error_reporting(0);

            $username = $_POST["username"];
            $password = $_POST["password"];

            if($username != "" && $password != ""){
                $memberRows = $pdo->query("SELECT id, username, passwd FROM users")->fetchAll();
                foreach($memberRows as $row){
                    if($username == $row["username"] && password_verify($password, $row["passwd"])){
                        $_SESSION["login"] = "$username";
                        $_SESSION["id"] = $row["id"];
                        header("refresh:0; url=home.php");
                    }
                }
            }
        ?>
    </body>
</html>