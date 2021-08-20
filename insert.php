<?php
    session_start();
    $conn=mysqli_connect('localhost','root','','sparks_bank');
    if($conn)
    {
        echo" connected to database";
    }
    else{
        echo"no conected to database";
    }
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $balance=$_POST['balance'];

        $query="INSERT INTO user(name,email,gender,balance) VALUES ('$name','$email','$gender','$balance')";
        $result=mysqli_query($conn,$query);

        if($result)
        {
            $_SESSION['success']="Data inserted successfully";
            header('Location:adduser.php');
        }
        else
        {
            $_SESSION['failed']="Data not inserted";
            header('Location:adduser.php');
        }
    }
?>