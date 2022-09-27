<?php
 include("database.php");
 session_start();

 $id=$_SESSION["ID"];

    $conn=mysqli_connect("localhost","root","","register");
	
	if(isset($_POST["submit"])){
		$ptitle=$_POST["title"];
        $pdesc=$_POST["description"];
		$pcost=$_POST["cost"];
		$psell=$_POST["sell"];
		$pcount=$_POST["count"];
		$pimg=$_FILES["file"]["name"];
		$sql="INSERT INTO product VALUES('$ptitle', '$pdesc','$pcost','$psell','$pcount','$pimg','$id')";
		
		if(mysqli_query($conn,$sql)){
			echo "Success";
			
	}
	else{
		echo "failed";
	}
	}
	?>