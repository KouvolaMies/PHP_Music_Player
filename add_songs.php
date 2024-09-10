<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add Songs</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/add.css">
    </head>
    <body>
        <div id="indexBox">
            <div id="addText">Add Songs</div>
            <form action="add_songs.php" method="get">
                <div id="browseRow">
                    <label for="browseButton">
                    <input type="file" name="song" id="browseButton">
                    <div id="customButton">Choose a Song</div>
                    </label>
                </div>
                <input type="submit" value="Add Song" id="submit">
            </form>
            <form action="home.php">
                <input type="submit" value="back to dashboard" id="dashboard">
            </form>
        </div>
        
        <?php
            include "db_connect.php";
            error_reporting(0);

            $song = $_GET["song"];
            $uid = $_SESSION["id"];

            if($song != null){
                $row = [
                    "title" => substr($song, 0, -4),
                    "src" => $song
                ];
    
                $sql = "INSERT INTO id$uid SET title=:title, src=:src";
                $status = $pdo->prepare($sql)->execute($row);
            }

            echo "<div style='position:absolute; right:20px; bottom:20px;'>logeed in as " . $_SESSION["login"] . "</div>";
        ?>
    </body>
</html>