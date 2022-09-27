<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewreport" content="width=device=width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ole:400">
    <link rel="stylesheet" href="login.css">
</head>
<body class="section">
<div class="imgp">
    <img src="assets/images/pexels-karolina-grabowska-6660125.jpg">
</div>
<div class="Content">
  <div class="formbox">
      <h2>Sign Up</h2>
      <form action="register.php" name="myform" method="post">
          <div class="input1">
              <input type="text" name="full_name" placeholder="Full name" required>
              <input type="email" name="email" placeholder="Email Address" required>
              <input type="text" name="phone" placeholder="Phone No:" required>
              <input type="password" name="pass" placeholder="Password" required>
             
              <input type="submit" name="save" value="Create Account"  name="" onclick="return validateform()">
          </div> <p class="Login_link">
                  Already have an account? <a href="login.php">Login</a>

              </p>
      </form>
  </div>
</div>
<script>
    function validateform(){  
var name=document.myform.full_name.value;  
var password=document.myform.pass.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  

</script>
</body>
</html>