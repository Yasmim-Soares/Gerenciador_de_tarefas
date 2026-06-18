<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "gerenciador_tarefas";

    $mysqli = new mysqli($serverName, $userName, $password, $dbName);

    if($mysqli->connect_error) {
        die("Connection failed" . $mysqli->connect_error);
    }

    echo("Connected successuly yay.");
?>