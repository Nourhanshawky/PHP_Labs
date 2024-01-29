<html>
    <head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

    <body>
    <?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'users';


// view Data 
$newcon = new mysqli($servername , $username , $password , $dbname);
if(!$newcon){
    echo 'connection failed !';
}

$selected_data = 'SELECT userid, username , email ,gender, mailstatus from userdata';
// mysqli_select_db($newcon,$dbname);
$result = mysqli_query($newcon,$selected_data);
if(! $result ) {
    die('Could not retrieve data: ' . mysqli_error($newcon));
 }

?>
    <div class="container">
        <h2>User Details</h2>
        <hr>
    <table class="table table-striped table-hover">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Mail Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
     while($row = mysqli_fetch_row($result)){
        //  echo $row[0];
        //  echo $row[1];
        //  echo $row[2];
        
        //  echo "--------------------------------<br>";
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "<td>".$row[4]."</td>";
        echo "</tr>";
         }
         ?>
  </tbody>
    </table>
    </div>
    </body>
</html>

<?php
//insert data into table
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'users';
$seccon = new mysqli($servername , $username , $password , $dbname);
 if(! $seccon){
    die("connection faild :( :" .musqli_connect_error());
 }
//  echo 'connection sucess';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['name']) && isset($_GET['email'])) {
$name = $_GET['name'];
$email = $_GET['email'];
if (isset($_GET['gender']))
{
$gender = $_GET['gender'];
}

if(isset($_GET['check'])){
$mailstatus = $_GET['check'];
}
else{
    $mailstatus = 'no';
}
 
    mysqli_select_db( $seccon,$dbname );
 $sql = "INSERT INTO userdata(username, email, gender , mailstatus) 
   VALUES ( '$name' ,'$email' ,'$gender' , '$mailstatus')";

   $retval = mysqli_query( $seccon,$sql );
   
   if(! $retval ) {
      die('Could not insert to table: ' . mysqli_error($seccon));
   }
    
   echo "<br>Data inserted to table successfully\n";
   //to prevent insertion every time viewuser is reloaded.
   header("Location: viewusers.php");
   exit();
}
   mysqli_close($seccon);
?>
