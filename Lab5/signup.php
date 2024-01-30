<html> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <body>
    <div class="container">
        <h2>User Registration Form</h2>
        <hr>
        <p>please fill this form to signup</p>

        <form action="" method="POST">
        <div class="form-group">
            <label class="form-label">UserName</label>
            <input class="form-control w-50" type="text" name="name" value="">
        </div>

        <div class="form-group">
            <label class="form-label">Password</label>
            <input class="form-control w-50" type="password" name="password" >
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
        </div>
        </form>
        </div> 
    </body>
</html>
<?php
require 'configration.php';
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    // echo $name;
    $pass = $_POST['password'];
    // echo $pass;

    //insert signup data into db
    $query = "INSERT INTO useraccount(username , password)
    VALUES('$name' , '$pass')";
    mysqli_query($con , $query);
    header("location:login.php");
    exit();
}


?>