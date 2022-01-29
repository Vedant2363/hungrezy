<?php

 $apiKey = "rzp_test_TF22uyxvkYyGm2";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys


    data-amount="<?php echo $_POST['gt'] * 100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.


    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-buttontext="Pay with Razorpay"
    data-name="Hungrezy"
    data-description="Food Delivery System"
    data-image="logo.png"
    data-theme.color="#5de82a"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
