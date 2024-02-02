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

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['submit'])) {
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
    

// check if you edit or insert new record
if($_GET['id'] != ''){
    $recordId = $_GET['id'];
    $newname = $_GET['name'];
    $newemail = $_GET['email'];
    $newgender = $_GET['gender'];
    if(isset($_GET['check'])){
        $newmailstatus = $_GET['check'];
        }
        else{
            $newmailstatus = 'no';
        }
    mysqli_query($seccon,"UPDATE userdata set username='$newname', email='$newemail', gender='$newgender', mailstatus='$newmailstatus'
    WHERE userid=$recordId");
    echo $newdata;
}
else{

 $sql = "INSERT INTO userdata(username, email, gender , mailstatus) 
   VALUES ( '$name' ,'$email' ,'$gender' , '$mailstatus')";

   $retval = mysqli_query( $seccon,$sql );
   
   if(! $retval ) {
      die('Could not insert to table: ' . mysqli_error($seccon));
   }
    
   echo "<br>Data inserted to table successfully\n";
}
   //to prevent insertion every time viewuser is reloaded.
   header("Location: viewusers.php");
   exit();
}
   mysqli_close($seccon);
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">    
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

// delete button 
if(isset($_GET['delete_id'])){
    $recordId = $_GET['delete_id']; 
    $selected_data = "DELETE FROM userdata WHERE userid=$recordId";
    mysqli_query($newcon,$selected_data);
}

$selected_data = 'SELECT userid, username , email ,gender, mailstatus from userdata';
$result = mysqli_query($newcon,$selected_data);
if(! $result ) {
    die('Could not retrieve data: ' . mysqli_error($newcon));
 }

?>
    <div class="container">
    <div class="row mt-4">
        <h2 class="col-10">User Details</h2>
        <button class="btn btn-success col-2" onclick="window.location.href='form.php'" >Add New User</button>
    </div>
    <hr>
    <table class="table table-striped table-hover">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Mail Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    
     while($row = mysqli_fetch_row($result)){
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "<td>".$row[4]."</td>";
        echo "<td><a href='viewrecord.php?id=".$row[0]."'><i class='fa-solid fa-eye text-primary pe-3'></i></a>
        <a href='form.php?id=".$row[0]."'><i class='fa-solid fa-pen text-primary pe-3'></i></a>
        <a href='viewusers.php?delete_id=".$row[0]."'><i class='fa-solid fa-trash text-primary'></i></a>
        </td>";
        echo "</tr>";
        }
   


    //or if we consider it assositive array
    // while($row = mysqli_fetch_assoc($result)){
    //     echo "<tr>";
    //     echo "<td>".$row['userid']."</td>";
    //     echo "<td>".$row['username']."</td>";
    //     echo "<td>".$row['email']."</td>";
    //     echo "<td>".$row['gender']."</td>";
    //     echo "<td>".$row['mailstatus']."</td>";
    //     echo "</tr>";
    // }
    mysqli_close($newcon);
         ?>
  </tbody>
    </table>
    </div>
    </body>
</html>
