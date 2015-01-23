<?php

//database configurations
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "offermama";

//try to connect to database
try
{
    // connect
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>