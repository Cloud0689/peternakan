<?php

$server = "localhost";
$myhost = "";
$user = "root";
$pass = "";
$database = "semoga";

$conn = mysql_connect($server, $myhost, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
