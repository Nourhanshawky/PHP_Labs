<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
    <title>Index page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='style.css'>
    <script src='main.js'></script>
    
</head>
<body style="margin: 0;">

    <div>
        <?php
    // Start the session
    session_start();

    // Check if the username is set in the session
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "<h2>Hello, $username!</h2>";
    } else {
        echo "<h2>Hello, Guest!</h2>";
    }
    ?>
    </div>
     <a href="roadmap.html">
    <img src="indeximg.jpg" alt="this is a likable backgroud" width="100%" height="400px">
</a>
<hr>
<h4 style="color: darkblue; text-align: center;" >copyrigt 2021 by Noha Salah 	&reg; . All Rights Reserved</h4>
<form method="POST" action="">
<input type="submit" value="Logout" name="logout" class="btn btn-primary">
</form>
   
<?php
if (isset($_POST['logout'])) {
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
    header('location:login.php');
}
?>


</body>
</html>