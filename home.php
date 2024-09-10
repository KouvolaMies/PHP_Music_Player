<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/home.css">
    </head>
    <body>
        <form action="index.php">
            <input type="submit" value="back to index" id="index">
        </form>
        <form action="add_songs.php">
            <input type="submit" value="add songs" id="add">
        </form>
        <form action="logout.php">
            <input type="submit" value="log out" id="logout">
        </form>

        <table id="songTable">
        <tr>
            <td id="playRow">
                <form action="home.php" method="post">
                    <input type="text" name="search" placeholder="search">
                    <input type="submit" value="search" id="searchButton">
                </form>
            </td>
            <td id="songName">Pick a song</td><td id="songPlayer"><audio controls autoplay src="" id="player"></td>
        </tr>
        <tr id="songList"><th id="playRow">Play</th><th id="songList">Title</th><th id="songList">Artist</th></tr>
        <?php
            include "db_connect.php";
            error_reporting(0);

            $id = $_SESSION["id"];
            $search = $_POST["search"];

            $memberRows = $pdo->query("SELECT * FROM id$id")->fetchAll();

            if($search == null){
                foreach($memberRows as $row){
                    $title = strval($row["title"]);
                    $artist;
                    if($row["artist"] == null){
                        $artist = "unknown";
                    }else{
                        $artist = $row["artist"];
                    }
                    $src = strval("songs/" . $row["src"]);
                    echo "<tr id='songList'><td id='playRow'><button id='playButton' onclick=" .  '"' . "changeSong('$src'" . "," . "'$title')" . '"' . "><img src='images/play.png' id='playIcon'></button></td>";
                    echo "<td id='songList'>$title</td><td id='songList'>$artist</td>";
                }
            }else{
                foreach($memberRows as $row){
                    if(str_contains($row["title"], $search)){
                        $title = $row["title"];
                        $artist;
                        if($row["artist"] == null){
                            $artist = "unknown";
                        }else{
                            $artist = $row["artist"];
                        }
                        $src = strval("songs/" . $row["src"]);
                        echo "<tr id='songList'><td id='songList'><button id='playButton' onclick=" .  '"' . "changeSong('$src'" . "," . "'$title')" . '"' . "><img src='images/play.png' id='playIcon'></button></td>";
                        echo "<td id='songList'>$title</td><td id='songList'>$artist</td>";
                    }
                }
            }

            echo "<div id='loginText'>logeed in as " . $_SESSION["login"] . "</div>";
        ?>
        </table>

        <script>
            function changeSong(source, title){
                document.getElementById("player").src = source;
                document.getElementById("songName").innerHTML = title;
            }
        </script>
    </body>
</html>