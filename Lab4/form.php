<?php
$con = new mysqli('localhost','root','','users');
if(!$con){
    echo 'connection failed';
}
if (isset($_GET['id'])) {
    $recordId = $_GET['id'];
    $selected_data = "SELECT  username , email ,gender, mailstatus from userdata WHERE userid=$recordId";
$result = mysqli_query($con,$selected_data);
if(! $result ) {
    die('Could not retrieve data: ' . mysqli_error($con));
 }
 
 $row= mysqli_fetch_row($result);

 }

//  mysqli_close($con);
?>
<html> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <body>
    <div class="container">
        <h2>User Registration Form</h2>
        <hr>
        <p>please fill this form and submit to add user record to database</p>

        <form action="viewusers.php" method="GET">

        <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
        <div class="form-group">
            <label class="form-label">Name</label>
            <input class="form-control w-50" type="text" name="name" value=" <?php
            if(isset($_GET['id']))
            {echo $row[0];  
            }
            ?>">
        </div>

        <div class="form-group">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control"value=" <?php
            if(isset($_GET['id']))
            {echo $row[1];}
            ?>">
        </div>
            <div class="form-group">
            <label>Gender</label><br>
            <input type="radio" name="gender"  value="female" class="form-check-input"
            <?php if(isset($_GET['id']) && $row[2] === 'female') echo 'checked'; ?>>
            <label class="form-check-label" >Female</label><br>

            <input type="radio" name="gender"  value="male" class="form-check-input"
           <?php if(isset($_GET['id']) && $row[2] === 'male') echo 'checked'; ?>>   
            <label class="form-check-label">Male</label>
            
        </div>
            <div class="form-group">
            <input type="checkbox" name="check" class="form-check-input" value="yes"
            <?php if(isset($_GET['id']) && $row[3] === 'yes') echo 'checked'; ?>>
            <label class="form-check-label">Recive emails from us</label>  
            </div>   
            <div class="form-group">
        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
        <button type="button" class="btn btn-default">Cancle</button>
        </div>
        </form>
</div> 
    </body>
</html>
