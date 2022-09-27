 <?php
include("database.php");
session_start();
$sql=mysqli_query($conn,"SELECT * from product");
?>

<html>
    <head>
    <link rel="stylesheet" href="buy.css">
    </head>
    <body><?php
	       while($row=mysqli_fetch_assoc($sql)){
			   $ptitle=$row["title"];
               $pdesc=$row["descrip"];
			   $psell=$row["sell"];
                $pimg=$row["img"];
     $cart="<a href='CartDB.php?Pro_name={$ptitle}'><span class='material-symbols-outlined'>add_shopping_cart</span></a>";
			   $wish="<a href='WishlistDB.php?Pro_name={$ptitle}'><span class='material-symbols-outlined'>favorite</span></a>";
	         echo '<div class="container1">
	 <a href=""><img src="'.$pimg.'" alt="image" width="200px" height="200px"/></a><br><br>
	 <div class="text">';
	 echo $wish;
	  echo '<h6>'.$ptitle.'</h6>
	          <h5>$'.$psell.'</h5>';
	echo $cart;
			 echo '</div>
			  </div>';
			  }
			  
			 
			  ?>
            </body>
              </html>