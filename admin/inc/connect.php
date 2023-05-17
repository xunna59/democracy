<?php
$servername = "localhost";
$usern = "root";
$paord = "";
$dbname = "dbkui7g2w2gcog";

// Create connection
$sonawap = new mysqli($servername, $usern, $paord, $dbname);

// Check connection
if ($sonawap->connect_error) {
    die("Connection failed: " . $sonawap->connect_error);
}
$db = mysqli_connect('localhost', 'root', '', 'dbkui7g2w2gcog');