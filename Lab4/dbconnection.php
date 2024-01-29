<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'users';
$con = new mysqli($servername ,$username , $password ,$dbname);

if(!$con){
    die("connection faild :( :" .musqli_connect_error());
}
echo "connected successfully 👌<br>";

$table = 'CREATE TABLE userdata(userid INT NOT NULL AUTO_INCREMENT primary key,
username VARCHAR(20) NOT NULL,
email VARCHAR(20) NOT NULL,
gender VARCHAR(6),
mailstatus VARCHAR(6)
)';

$dataretvied = mysqli_query( $con,$table );
if(! $table ) {
    die('Could not create table: ' . mysqli_error($con));
 }
 echo "<br>Database Table  created successfully\n";
 mysqli_close($con);

 
?>
