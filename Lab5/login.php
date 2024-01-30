<html> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <body>
    <div class="container">
        <div class="row mt-4">
            <div class="col">
        <h2>LogIn Form</h2>
        <hr>
        <p>please fill this form to login</p>

        <form action="" method="POST">
        <div class="form-group">
            <label class="form-label">UserName</label>
            <input class="form-control w-50" type="text" name="name" value="">
        </div>

        <div class="form-group">
            <label class="form-label">Password</label>
            <input class="form-control w-50" type="password" name="password" >
        </div>
        <div class="form-group mt-4">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
        </form>
</div>
        <div class="col w-50">
            <img src="login.jpg" class="w-100">
        </div>
        </div> 
</div> 
    </body>
</html>

<?php
include 'configration.php';
session_start();

if (isset($_POST['login'])) {
    $inputName = $_POST['name'];
    $inputPassword = $_POST['password'];

    $sql = "SELECT username,password FROM useraccount";
    $result = mysqli_query($con, $sql);

    
    if ($result) {
        while ($data = mysqli_fetch_row($result)) {
            if ($data[0] == $inputName) {
                $storedPassword = $data[1];
                if ($data[1] == $inputPassword) {
                $_SESSION['username'] = $inputName;
                echo "login successfully";
                header("location:home.php");
                break;
                }
            }
            
           
        }
            echo "<h2>No user found signup first</h2>";
           
    } else {

        echo "Error: " . mysqli_error($con);
    }

   
    mysqli_close($con);
  
}
?>
