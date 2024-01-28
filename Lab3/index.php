<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .error{
            color:red;
        }
    </style>
    
    <body>
        <h1>Application name: AAST_BIS class registration</h1>
        <form  style="width:50%; padding-left:40px" action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
        Name: <input class="form-control" type="text" name="name" value="<?php echo $_GET["name"]?>">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $name = isset($_GET["name"]) ? $_GET["name"] : '';

            if (empty($name)) {
                echo "<span class='error'>* required field</span>";
            }
        }
        ?>
                <br><br>
        E-mail: <input class="form-control"type="email" name="email" value="<?php echo $_GET["email"]?>">
        <?php
                if (isset($_GET["submit"])) {
                $email = $_GET["email"];
                if(empty($email)){
                    echo "<span style=color:red>* required field</span>";
                }
            }
                ?>
        <br><br>
        Group number : <input type="number" name="group_num" value="<?php echo $_GET["group_num"]?>">
        <br><br>
        Class Details: <textarea name="details" cols="30" rows="10"></textarea><br><br>
        Gender: <input type="radio" name="gender" value="female">Female
       <input type="radio" name="gender" value="male">Male  <br><br>

       Select Courses: <select name="courses[]" multiple>
            <option value="PHP">PHP</option>
            <option value="Java Script">Java Script</option>
            <option value="MySQL">MySQL</option>
            <option value="HTML">HTML</option>
            <option value="CSS">CSS</option>
            <option value="React">React</option>
        </select><br><br>
        Agree <input type="checkbox" name="agree" id="">
        <br><br>
        <input type="submit" value="Submit" name="submit">

    </form>
    </body>
</html>

<?php

echo "<h2>Your Given values are as:</h2>";

if (isset($_GET["submit"])) {
    $name = $_GET["name"];
    $email = $_GET["email"];
    $group = $_GET["group_num"];
    $details = $_GET["details"];
    if (!empty($name || $email || $group || $details ) ){
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $group;
        echo "<br>";
        echo $details;
        echo "<br>";
    }
    if (isset($_GET["courses"])) {
        foreach ($_GET["courses"] as $courses ){
            echo $courses."<br>";
        }
    }
    if (isset($_GET["gender"])) {
        echo $_GET["gender"];
        echo "<br>";
    }
}

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $name = $_GET["name"];
            $email = $_GET["email"];
          }
       

?>