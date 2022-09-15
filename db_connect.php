<?php
$host = "localhost:3307";
$username = "root";
$pw = "";
$db = "2db";
//music data base connect
$conn = @new mysqli($host, $username, $pw, $db);
if(!$conn){
    die("Database Connection Failed. Error: ".$conn->error);
}
