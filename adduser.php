<?php
     session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="css/adduser.css">
    <title>Add New User</title>
</head>
<?php
    include 'navbar.php';
?>
<?php
                
                if(isset($_SESSION['success']) && $_SESSION['success']!='')
                {
                    echo'<div class="alert alert-success text-center font-weight-bold" role="alert">'.$_SESSION['success'].'</div>';
                    unset($_SESSION['success']);
                }
                if(isset($_SESSION['failure']) && $_SESSION['failure']!='')
                {
                    echo'<div class="alert alert-danger text-center font-weight-bold" role="alert">'.$_SESSION['failure'].'</div>';
                    unset($_SESSION['failure']);
                }
            
            
?>
<body>
    <div class="container-fluid bg" style="padding-left:60px;padding-top:48px">
       <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <form class="form-container" action="insert.php" method="POST">
                <h2 class="text font-weight-bold text-center">Create New User</h2><br>
                    <div class="form-group">
                        <label for="name" class="font-weight-bold"><h5>Full Name</h5></label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your Full Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><h5>Email ID</h5></label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter valid Email ID" required>
                    </div>
                    <div class="form-group">
                        <label for="gender"><h5>Gender</h5></label>
                        <select type="checkbox" name="gender"class="form-control" id="gender" required>
                        <option value="">Select</option>    
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                       </select>
                    </div>
                    <div class="form-group">
                        <label for="balance"><h5>Initial Balance</h5></label>
                        <input type="text" name="balance" class="form-control" id="balance" placeholder="Enter Initial Balance" required>
                    </div>
                    <br>
                    <div class="text-center">
                       <input type="submit" name="submit" class="btn btn-outline-primary btn-rounded btn-block" data-mdb-ripple-color="dark" value="submit">
                       </div>       
                </form>     
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>