<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewreport" content="width=device=width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="login.css">
</head>
<body class="section">
<div class="imgp">
    <img src="assets/images/pexels-anna-guerrero-1957011.jpg">
</div>
<div class="Content">
    <div class="formbox">
        <h2>Login</h2>
        <form action="loginProcess.php" method="post">
            <div class="input1">
                <input type="text" name="email" placeholder="Email Address" required>
                <input type="password" name="pass"  placeholder="Password" required>
                
                <input type="submit" name="save" value="Sign In"  name="">
            </div> <p class="Login_link">
                    Don't have an account? <a href="Signup.php">Create an account</a>

                </p>
        </form>
    </div>
</div>
</body>
</html> 