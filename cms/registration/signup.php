<?php
   include('../action.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">PERFORMER SIGNUP</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" required />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="usn" id="name" placeholder="USN" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="sem" id="sem" placeholder="Sem"required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="section" id="section" placeholder="Your Section "required/>
                        </div>
                        <div>
                            Gender: <input type="radio" name="gender" value="Male">Male 
                                    <input type="radio" name="gender" value="Female">Female
                        </div>
                                             
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email "required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="psw" id="password" placeholder="Password"required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="repsw" id="re_password" placeholder="Repeat your password" required/>
                        </div>
                        <div class="form-group">
                        <input type="submit" name="signup" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>