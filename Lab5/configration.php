<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'users';
$con = new mysqli($hostname , $username , $password , $dbname);

if(!$con){
    echo 'failed to connect db';
}
// echo 'connect successfully';
?>