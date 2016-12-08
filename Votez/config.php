<?php

$dbUser = "root";
$dbPass = "root";
$dbDB = "ivotez";
$dbHost = "localhost:3306";

/*
$dbUser = "adminFJbB2z9";
$dbPass = "5r6dun1ZbTcg";
$dbDB = "ivotez";
$dbHost = "127.2.5.130:3306";
*/

$mysqli = mysqli_connect($dbHost, $dbPass, $dbUser, $dbDB);
//mysql_select_db($dbDB);

if ($mysqli->connect_errno)
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;