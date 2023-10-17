<?php
include('login_params.php');
$dbh = new PDO("$driver:host=$server;dbname=$dbname", $user, $pass);

$fic = $_POST;



?>