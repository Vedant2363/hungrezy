<?php 
include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<body><br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center border rounded bg-light my-5">
        <h1>MY CART</h1>
      </div>

      <div class="col-lg-9">
        <table class="table">
          <thead class="text-center">
            <tr>
              <th scope="col">Serial No.</th>
              <th scope="col">Item Name</th>
              <th scope="col">Item Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>              
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php 
              if(isset($_SESSION['cart']))
              {
                foreach($_SESSION['cart'] as $key => $value)
                {
                  $sr=$key+1;
                  echo"
                    <tr>
                      <td>$sr</td>
                      <td>$value[Item_Name]</td>
                      <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                      <td>
                        <form action='manage_cart.php' method='POST'>
                          <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                          <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                        </form>
                      </td>
                      <td class='itotal'></td>
                      <td>
                        <form action='manage_cart.php' method='POST'>
                          <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                          <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                        </form>
                      </td>
                    </tr>
                  ";
                }
              }
            ?>
          </tbody>
        </table>
      </div>
      
      <div class="col-lg-3">
        <div class="border bg-light rounded p-4">
          <h4>Grand Total:</h4>
          <h5 class="text-right" id="gtotal"></h5>
          

          <br>
          <?php 
            if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
            {
          ?>
          <form action="purchase.php" method="POST">
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" name="full_name" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Mobile No</label>
              <input type="number" name="phone_no" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" name="address" class="form-control" required>
              <button onclick="getLocation()">Locate now</button>

            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="pay_mode" value="EPAY" id="flexRadioDefault2" disabled checked>
              <label class="form-check-label" for="flexRadioDefault2">
                E-PAY [RAZORPAY]
              </label>
            </div>
            <br>
            <button class="btn btn-primary btn-block" name="purchase">CONFIRM</button>
          </form>
          <?php
            }
          ?>
        </div>
      </div>

    </div>
  </div>

<p id="demo" style="display:none"></p>
<script>

  var gt=0;
  var iprice=document.getElementsByClassName('iprice');
  var iquantity=document.getElementsByClassName('iquantity');
  var itotal=document.getElementsByClassName('itotal');
  var gtotal=document.getElementById('gtotal');

  function subTotal()
  {
    gt=0;
    for(i=0;i<iprice.length;i++)
    {
      itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

      gt=gt+(iprice[i].value)*(iquantity[i].value);

    }
    gtotal.innerText=gt;
    document.cookie = "gt="+gt;
  }
  

  subTotal();


</script>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
  let data = document.getElementById('demo').innerText;
console.log(data);
document.querySelector('body > div > div > div.col-lg-3 > div > form > div:nth-child(3) > input').value = data;
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
}
</script>
</body>
</html>