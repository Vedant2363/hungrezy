
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

  <nav class="navbar">
      <a class="active" href="#home">Menu</a>


  </nav>
  <?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
          $count=count($_SESSION['cart']);
        }
      ?>
  <div class="icons">
      <i class="fas fa-bars" id="menu-bars"></i>
      <i class="fas fa-search" id="search-icon"></i>
      <a href="#" class="fas fa-heart"></a>
      <a href="mycart.php" class="fas fa-shopping-cart"></a>
      


    
  </div>

</header>
<body>


  
  <section class="menu" id="menu">
    <br>
    <br> 
    <br>
    <br>
    <h1 class="heading"> Beverages </h1>
  

    <form action="manage_cart.php" method="POST">
    <div class="box">
      <div class="image">
          <img src="images/m32.jpg" alt="">
          <a href="#" class="fas fa-heart"></a>
      </div>
      <div class="content">
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Gobi Manchurian</h3>
          <p>Gobi Manchurian is a bunch of tree in the bowl.</p>
          <span class="price">₹120.00</span>
          <button type="submit"  name="Add_To_Cart" class="btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="Gobi Manchurian">
          <input type="hidden" name="Price" value="650">
      </div>
  </div>
</form>


     


  </section>


  <script src="app.js"></script>
</body>

</html>