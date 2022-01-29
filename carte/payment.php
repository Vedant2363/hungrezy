<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HUNGREZY</title>

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/styl.css">

  <title>HUNGREZY</title>
</head>

<header>

  <a href="#" class="logo"><i class="fas fa-utensils"></i> HUNGREZY</a>


</header>
<style>
body {
  margin-top:100px;
  margin-left: auto;
  margin-right: auto;
  background-image: url('payment.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<style>
.myDiv{
  background-color: rgba(255,0,0,0.4);
	border: 3px solid rgba(255, 255, 255, 0.384);
	margin: 35% auto;
  margin-left: auto;
  margin-right: auto;
  float: center;
	border-radius: 10px;
	box-shadow: 0 0 10px rgba(255,0,0,1);
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	color:#fff;
	width: 200px;

  padding: 12px 70px;
	height: 50px;
	
  }


/* .myDiv {
    float: center;
    margin-left: auto;
  margin-right: auto;
  width: 80px;
  background-color:red;
  border: 3px solid #73AD21;
  padding: 10px;
} */
</style>
<?php

 $apiKey = "rzp_test_TF22uyxvkYyGm2";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>


<body>

    <div class="myDiv">
<form action="../tick.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" //  API Key 
    data-amount="<?php echo $_COOKIE['gt'] * 100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"
    data-name="Hungrezy"
    data-description="Food Delivery System"
    data-image="logo.png"
    data-theme.color="#5de82a"
></script>
</form>
</div>
</body>