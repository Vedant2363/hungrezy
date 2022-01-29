<?php
    include('connect/connection.php');

    if(isset($_POST["login"])){
        $email = mysqli_real_escape_string($connect, trim($_POST['email']));
        $password = trim($_POST['password']);

        $sql = mysqli_query($connect, "SELECT * FROM login where email = '$email'");
        $count = mysqli_num_rows($sql);

            if($count > 0){
                $fetch = mysqli_fetch_assoc($sql);
                $hashpassword = $fetch["password"];
    
                if($fetch["status"] == 0){
                    ?>
                    <script>
                        alert("Please verify email account before login.");
                    </script>
                    <?php
                }else if(password_verify($password, $hashpassword)){
                    ?>
                    <script>
                        location.href = "2.php";
                        alert("login in successfully");
                        
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("email or password invalid, please try again.");
                    </script>
                    <?php
                }
            }
                
    }

?>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    
	<meta charset="UTF-8">
	<title> Login Form </title>
	<link href="1.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="stylee.css">

    <link rel="icon" href="Favicon.png">


</head>
<body Background="4.png">

	<div class="form-box">
	<div>
		<div class="header-text">LOGIN</div>
	</div>
    <br>
	<div class="login-content">
		<form  action="#" method="POST" name="login">

			   <div class="input-div one">
				  <div class="i">
						  <i class="fas fa-user"></i>
				  </div>
				  <div class="div">
					<h5>
                    <input type="text" placeholder="Username" id="email_address" class="form-control" name="email" required autofocus>
				</div>
			   </div>
			   <div class="input-div pass">
				  <div class="i"> 
					   <i class="fas fa-lock"></i>
				  </div>
				  <div class="div">
					   <h5>
                       <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                   
					</h5>
                   
			   </div>
			</div>
<br>
                            <div  action="demo.html"class="col-md-6 offset-md-4">
                                <input type="submit" value="Login" name="login">
                            </div>

<br><br><span>Register Now!! <a href="register.php">SIGNUP</a></span>

		</form>
	</div>
</div>

</body>
</html>
<script>
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    toggle.addEventListener('click', function(){
        if(password.type === "password"){
            password.type = 'text';
        }else{
            password.type = 'password';
        }
        this.classList.toggle('bi-eye');
    });
</script>



	