<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <title>Index Page</title>
</head> 
<?php
    include 'navbar.php';
?> 
<body style="background-color:#F1F1F1">
<div class="container" style="margin-top:8%">
    <div class="row">
        <div class="col-md-3 col-sm-10">
            <div class="card text-center">
             <div class="card-block">
             <img src="img/AddUser.png" style="height:153px" alt="" class="img-fluid">
                 <div class="card-title"><h4>Create New Users</h4></div>
                 <div class="card-text">
                     <p>You can Create New User here.</p>
                 </div>
             <a style="margin-top:10px" href="adduser.php" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-color="dark">Create</a>     
            </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-7 t-5">
            <div class="card text-center">
             <div class="card-block">
               <img src="img/removeuser.png" style="height:153px" alt="" class="img-fluid">
                 <div class="card-title">
                     <h4>Remove Users</h4>
                 </div>
                 <div class="card-text">
                     <p>You can Remove the User here.</p>
                 </div>
                <a style="margin-top:10px" href="removeuser.php" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-color="dark">Remove</a>    
             </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-7">
            <div class="card text-center">
             <div class="card-block">
               <img src="img/transfer.png" alt="" class="img-fluid">
                 <div class="card-title">
                     <h4>Make a Transaction</h4>
                 </div>
                 <div class="card-text">
                     <p>You can Transfer money here.</p>
                 </div>
             <a style="margin-top:15px" href="all_users.php" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-color="dark">Transact</a>    
             </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-7">
            <div class="card text-center">
             <div class="card-block">
                 <div class="card-title">
                 <img src="img/history.png" style="height:152px" alt="" class="img-fluid">
                     <h4>Transaction History</h4>
                 </div>
                 <div class="card-text">
                     <p>You can view Transact History here.</p>
                 </div>
             <a style="margin-top:10px" href="Transaction_history.php" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-color="dark">History</a>    
             </div>
            </div>
        </div>
        
     </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.col-md-3 ').hover(
                function(){
                    $(this).animate({
                        marginTop:"-=1%",
                    },200);
                },
                function(){
                    $(this).animate({
                        marginTop:"0%"
                    },200);
                }
            );
        });
    </script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <?php
         include 'footer.php';
    ?>         
</body> 

</html>