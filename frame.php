<?php 
    session_start();
    if (!isset($_SESSION["visits"])) {
        if (isset($_COOKIE["visits"])) {
            $_SESSION["visits"] = $_COOKIE["visits"] + 1;
            $_COOKIE["visits"] = $_SESSION["visits"];
        } else {
            $_SESSION["visits"] = 1;
            setcookie('visits', $_SESSION["visits"], time() + 86400 * 365, "/");
        }
    }
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/frame.css">
    </head>
    <body>
        <div id="side-frame" class="frame">
            <nav id="nav-frame" class="frame">
                <ul>
                    <li id="top-li-el"><a href="projects/minion-leaderboard/index.php">Minion Leaderboard</a></li>
                    <li><a href="projects/clicktest/index.php">Clicktest</a></li>
                    <li><a href="#">About me</a></li>
                </ul>
            </nav>
        </div>

        <div id="top-frame" class="frame">
            <h1>Lucifer Monao</h1>
        </div>
        
        <div id="bottom-frame" class="frame">
            <a href="github.com/LuciferMonao/home"><img src="https://img.icons8.com/fluent/48/000000/github.png"/></a><a href="mailto:Lucifermonao@gmx.de"><img src="https://img.icons8.com/ios-filled/50/000000/important-mail.png"/></a><h2>Copyright &copy 2020 Lucifer Monao. Some rights reserved</h2>
        </div>

        <script src="frame.inc.js"></script>
    </body>
</html>