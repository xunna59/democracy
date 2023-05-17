<?php
$servername = "localhost";
$usern = "uuqx9rehslvg4";
$paord = "ehze4llzsfvo";
$dbname = "dbkui7g2w2gcog";

// Create connection
$sonawap = new mysqli($servername, $usern, $paord, $dbname);

// Check connection
if ($sonawap->connect_error) {
    die("Connection failed: " . $sonawap->connect_error);
}
$db = mysqli_connect('localhost', 'uuqx9rehslvg4', 'ehze4llzsfvo', 'dbkui7g2w2gcog');
