<?php
$user = 'root';
$pass = '12345678';
$db = 'animation';
$lo='localhost';
$mysqli=new mysqli ('localhost', $user, $pass, $db) or die("unable to connect");


//$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($mysqli->connect_errno){
    die("ERROR: Could not connect. (" .$mysqli->connect_errno. ") " . $mysqli->connect_error);
}
?>