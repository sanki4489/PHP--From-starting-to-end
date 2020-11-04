<?php

$user='root';
$pass='sanki4489';
$db='sankalp';

$db = new mysqli('localhost', $user, $pass, $db) or die(); 

echo 'connection secured';

?>