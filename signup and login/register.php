<?php
extract($_POST);
include("database.php");
$sql=mysqli_query($conn,"SELECT * FROM reg where Email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
else if(isset($_POST['save']))
{
   
       $query= "INSERT INTO reg (Full_Name, Email, Phone_No, Password)VALUES ('$full_name',  '$email', $phone, '$pass')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: login.php?status=success");
    }
    else
    {
		echo "Error.Please try again";
	}


?>
<?php

include("database.php");
	
	if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['pass'])){
		@$Full_name=$_POST['full_name'];
		@$Email=$_POST['email'];
		@$Phone=$_POST['phone'];
		@$Password=$_POST['pass'];
		
		
		$sql="INSERT INTO reg(`Full_Name`,`Email`,`Phone_No`,`Password`) VALUES ('$Full_name','$Email','$Password');";
		
		if(mysqli_Query($connx,$sql)){
				$_SESSION['Email']=$_POST['Email'];
				header("Location:index.php");
		}
		else{
			echo"<script>alert('Signup Failed!')</script>";
		}
		
	}


?>