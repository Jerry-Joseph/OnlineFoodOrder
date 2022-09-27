<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';
    $sql=mysqli_query($conn,"SELECT * FROM reg where Email='$email' and Password= '$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["ID"] = $row['id'];
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["Full_Name"]=$row['Full_Name'];
        $_SESSION["Phone_No"]=$row['Phone_No']; 
        header("Location:home.php");
    }

    else
    {
        echo"<script>alert('Invalid Email ID/Password')</script>";
        
    }
}
?>