<html>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <body>
    <div class="container">
        <h2>User Registration Form</h2>
        <hr>
        <p>please fill this form and submit to add user record to database</p>

        <form action="viewusers.php" method="GET">
        <div class="form-group">
            <label for="" class="form-label">Name</label>
            <input class="form-control w-50" type="text" name="name">
        </div>

        <div class="form-group">
            <label for="" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
            <div class="form-group">
            <label for="">Gender</label><br>
            <input type="radio" name="gender"  value="female" class="form-check-input">
            <label for="" class="form-check-label" >Female</label><br>
            <input type="radio" name="gender"  value="male" class="form-check-input">   
            <label for="" class="form-check-label">Male</label>
            
        </div>
            <div class="form-group">
            <input type="checkbox" name="check" class="form-check-input" value="yes">
            <label for="" class="form-check-label">Recive emails from us</label>  
            </div>   
            <div class="form-group">
        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
        <button type="cancle" class="btn btn-default">Cancle</button>
        </div>
        </form>
</div> 
    </body>
</html>

