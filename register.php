<?php session_start(); ?>

<?php
    include('connect/connection.php');

    if(isset($_POST["register"])){
        $name = $_POST["name"];
        $address = $_POST["address"];
        $dob = $_POST["dob"];
        $mno = $_POST["mno"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $check_query = mysqli_query($connect, "SELECT * FROM login where email ='$email'");
        $rowCount = mysqli_num_rows($check_query);

        if(!empty($email) && !empty($password)){
            if($rowCount > 0){
                ?>
                <script>
                    alert("User with email already exist!");
                </script>
                <?php
            }else{
                $password_hash = password_hash($password, PASSWORD_BCRYPT);
            
                $result = mysqli_query($connect, "INSERT INTO login (name,address,dob, mno, email, password, cpassword, status) VALUES ('$name','$address','$dob','$mno','$email','$password_hash','$cpassword', 0)");
    
                if($result){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    

                    $mail->Username='ssv041801@gmail.com';// your email id
                    $mail->Password='Ssv12346$';// password
    
                    $mail->setFrom('ssv041801@gmail.com', 'OTP Verification');//your email id in the quotes left empty
                    $mail->addAddress($_POST["email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Your verify code";
                    $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>
                    <br><br>
                    <p>With regrads,</p>
                    <b>Food Delivery System</b>";
    
                            if(!$mail->send()){
                                ?>
                                    <script>
                                        alert("<?php echo "Register Failed, Invalid Email "?>");
                                    </script>
                                <?php
                            }else{
                                ?>
                                <script>
                                    alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
                                    window.location.replace('verification.php');
                                </script>
                                <?php
                            }
                }
            }
        }
    }

?>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    
	<meta charset="UTF-8">
	<title> Login Form </title>
	<link href="3.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="Favicon.png">
<script type="text/javascript"> 
function validate_form(thisform) 
{ 
	var pass1= thisform.password.value; 
	var pass2= thisform.cpassword.value;
    if(pass1!=pass2)
		{ 
			alert("Password mismatched! enter the correct password!"); 
			return false;
		}
    else {
        return true;
    }
}</script>
</head>
<body Background="4.png">

	<div class="form-box">
	<div>
		<div class="header-text">SIGN UP</div>
	</div>
    <br>
	<div class="login-content">      
        <form onsubmit="return validate_form(this)"  action="#" method="POST" >
        <div class="input-div pass">
				  <div class="i"> 
					   <i class="fas fa-user"></i>
				  </div>
				  <div class="div">
					   <h5>
                       <input type="text" placeholder="Name" id="name" class="form-control" name="name" required>
                                   
					</h5>
                   
			   </div>
			</div>
            <div class="input-div pass">
				  <div class="i"> 
					   <i class="fas fa-house-user"></i>
				  </div>
				  <div class="div">
					   <h5>
                       <input type="text" placeholder="Address" id="address" class="form-control" name="address" required>
                                   
					</h5>
                   
			   </div>
			</div>
            <div class="input-div pass">
				  <div class="i"> 
					   <i class="fas fa-calendar-alt"></i> 
				  </div>
				  <div class="div">
					   <h5>
                       <input type="date" placeholder="Date Of Birth" id="dob" class="form-control" name="dob" required>
                                   
					</h5>
                   
			   </div>
			</div>
            <div class="input-div pass">
				  <div class="i"> 
					  <i class="fas fa-phone-square-alt"></i>
				  </div>
				  <div class="div">
					   <h5>
                       <input type="bigint" placeholder="Mobile Number" id="mno" class="form-control" name="mno" required>
                                   
					</h5>
                   
			   </div>
			</div>

			   <div class="input-div pass">
				  <div class="i"> 
                  <i class="fas fa-envelope"></i>
				  </div>
				  <div class="div">
					   <h5>
                       <input type="varchar" placeholder="Email_id" id="email_address" class="form-control" name="email" required autofocus>
                                   
					</h5>
                   
			   </div>
			</div>
            <div class="input-div pass">
				  <div class="i">
                  <i class="fas fa-lock"></i>
				  </div>
				  <div class="div">
					<h5>
                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                    
				</div>
			   </div>
            <div class="input-div pass">
				  <div class="i"> 
					   <i class="fas fa-lock"></i>
				  </div>
				  <div class="div">
					   <h5>
                       <input type="password" placeholder="Confirm Password" id="cpassword" class="form-control" name="cpassword" required>
                                   
					</h5>
                   
			   </div>
			</div>
            <br> <br><br><br><br> <br><br><br>
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" value="Register" name="register">
                            </div>

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

