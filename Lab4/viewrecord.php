<?php
$con = new mysqli('localhost','root','','users');
if(!$con){
    echo 'connection failed';
}
if (isset($_GET['id'])) {
    $recordId = $_GET['id'];
    
 }
$selected_data = "SELECT userid, username , email ,gender, mailstatus from userdata WHERE userid=$recordId";
$result = mysqli_query($con,$selected_data);
if(! $result ) {
    die('Could not retrieve data: ' . mysqli_error($con));
 }
 

 $row= mysqli_fetch_row($result);
   mysqli_close($con);
?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <h2>View User Record</h2>
        <hr>
        <div class="form-group">
        <label class="form-label">Name</label>
        <p>
            <?php
            echo $row[1] ;
            ?>
        </p>
        </div>

        <div class="form-group">
            <label class="form-label">Email</label>
            <p>
            <?php
            echo $row[2] ;
            ?>
        </p>
        </div>
        <div class="form-group">
            <label class="form-label">Gender</label>
            <p>
            <?php
            echo $row[3] ;
            ?>
        </p>
        </div>
        <div class="form-group">
        <p>
            <?php
            if($row[4] == 'yes'){
                echo 'You will recive emails from us';
            }
            else{
                echo 'No emails will send to you';
            }   
            ?>
        </p>
        </div>
        <form method="POST">
        <button type="submit" class="btn btn-primary" name="back">back</button>
        </form>
        
        <?php
        if(isset($_POST['back'])){
        header("Location:viewusers.php");
        }
        ?>     
</div>
    </body>
</html>
