<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "adatb";

$conn = mysqli_connect("localhost", "root", "", "web_db") or die("Csatlakozási hiba");
mysqli_options($conn, MYSQLI_INIT_COMMAND, "SET NAMES 'utf8mb4'");
mysqli_real_connect($conn,"localhost", "root", "", "web_db");