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

</head>
<body>
    
<!-- header section starts      -->

<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i> HUNGREZY</a>

    <nav class="navbar">
        <a class="active" href="#home">Home</a>
        <a href="#dishes">Restaurant</a>
        <a href="#about">About</a>
        <a href="#menu">Dishes</a>
        <a href="#review">Review</a>

    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i  id="search-icon"></i>
        <a href="admin.php" class="fas fa-user"></a>
        <a href="#" class="fas fa-home"></a>
        <a href="carte/index.php" class="fas fa-shopping-cart"></a>
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
               
                <div class="image">
                    <img src="images/home132.png" alt="">
                </div>
                <div class="content">
                    <span>Kinara's Special</span>
                    <h3>Chicken Tandoori</h3>
                    <p>Whole Red Tandoori Chicken cooked in the clay oven!</p>
                    <a href="carte/KINARA.php" class="btn">order now</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/home7897.png" alt="">
                </div>
                <div class="content">
                    <span>Sharda's Special</span>
                    <h3>Chicken Xacuti</h3>
                    <p>Goemkarachi Shan Chicken Xacuti Amchi Mahan!</p>
                    <a href="carte/sharda.php" class="btn">order now</a>
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/home9508.png" alt="">
                </div>
                <div class="content">
                    <span>Mickey's Special</span>
                    <h3>Chicken Biryani</h3>
                    <p>Feel The Rich Taste of Biryani!</p>
                    <a href="carte/mickeys.php" class="btn">order now</a>
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/home142.png" alt="">
                </div>
                <div class="content">
                    <span>Ritz's Special</span>
                    <h3>Fish Thali</h3>
                    <p>Ruchik Best Fish Thali Amchi Best!</p>
                    <a href="carte/ritz.php" class="btn">order now</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>
<br>
<br>
<!-- home section ends -->

<!-- dishes section starts  -->

<section class="dishes" id="dishes">

    <h3 class="sub-heading"> Our Recommedation </h3>
    <h1 class="heading"> Popular Restaurant </h1>

    <div class="box-container">

        <div class="box">
            <a href="carte/woodland.php" class="fas fa-eye"></a>
            <img  src="images/1.png" alt="">
            <h3>Woodland</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        <div class="box">

            <a href="carte/sizzle.php" class="fas fa-eye"></a>
            <img src="images/521.jpeg" alt="">
            <h3>Sizzle Smoke</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        <div class="box">

            <a href="carte/bistro.php" class="fas fa-eye"></a>
            <img src="images/522.jpeg" alt="">
            <h3>Bistro</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">

            <a href="carte/lalit.php" class="fas fa-eye"></a>
            <img src="images/111111.png" alt="">
            <h3>The Lalit</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>

        </div>
        <div class="box">

            <a href="carte/palms.php" class="fas fa-eye"></a>
            <img src="images/22222.jpg" alt="">
            <h3>The Palms </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>


        <div class="box">

            <a href="carte/latitude.php" class="fas fa-eye"></a>
            <img src="images/222.png" alt="">
            <h3>Latitude</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

        <div class="box">

            <a href="carte/sush.php" class="fas fa-eye"></a>
            <img src="images/11111.jpg" alt="">
            <h3>sush</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="box">

            <a href="carte/index.php" class="fas fa-eye"></a>
            <img src="images/symbol.jpg" alt="">
            <h3>O Coqueiro</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="box">

            <a href="carte/taj.php" class="fas fa-eye"></a>
            <img src="images/taj.jpeg" alt="">
            <h3>TAJ</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>

        </div>

        <div class="box">

            <a href="carte/hotbowl.php" class="fas fa-eye"></a>
            <img src="images/250.png" alt="">
            <h3>Hot Bowl</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- dishes section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h3 class="sub-heading"> about us </h3>
    <h1 class="heading"> why choose us? </h1>

    <div class="row">

        <div class="image">
            <img src="images/323.gif" alt="">
        </div>

        <div class="content">
            <h3>Hungrezy</h3>
            
            <p>HUNGREZY as the name suggest hunger we try to deliver the foood fresh, on time and also we try our best to deliver to the locations where there is no proper restaurants </p>
            <p>We aim to deliver food to each and every house in the remotest area so that everyone feels connected and so that they can also enjoy the delicious</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>free delivery</span>
                </div>
                <div class="icons">
                <i class="fas fa-rupee-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">
    <h1 class="heading"> today's speciality </h1>

    <div class="box-container">



        <div class="box">
            <div class="image">
                <img src="images/M23.jfif" alt="">
 
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Blueberry Juice</h3>
                <p>Blueberry Juice Is A Refreshing Drink Made From Fresh Blueberries.</p>
                <a href="carte/index.php" class="btn">add to cart</a>
                <span class="price">₹120.00</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/6541.jpeg" alt="">
      
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Chicken Kurkure</h3>
                <p>It Is A Dish Made Of Chicken Pieces Coated With Flour And Pan-Fried Or Deep Fried.</p>
                <a href="carte/index.php" class="btn">add to cart</a>
                <span class="price">₹180.00</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/MC2.jfif" alt="">
          
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Prawn Curry Rice</h3>
                <p>Flavourful Dish Made Of Fresh Prawns Served With Rice.</p>
                <a href="carte/index.php" class="btn">add to cart</a>
                <span class="price">₹400.00</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/D7.jpeg" alt="">
   
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>

                </div>
                <h3>Serradura</h3>
                <p>Portuguese Dish Layering Crushed Cookies With Sweet Whipping Cream.</p>
                <a href="carte/index.php" class="btn">add to cart</a>
                <span class="price">₹100.00</span>
            </div>
        </div>
    </div>

</section>

<!-- menu section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h3 class="sub-heading"> customer's review </h3>
    <h1 class="heading"> what they say </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/311.jpg" alt="">
                    <div class="user-info">
                        <h3>Vedant Malkarnekar</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Hungrezy has a vast network, means it has its delivery service not only in urban areas but also in remote areas, almost every location you can access its services. It recommend you the near by restraunt, food , beverages etc by there high rating and also take care of hygiene which is very important.</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/311.png" alt="">
                    <div class="user-info">
                        <h3>Vedant Malkarnekar</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-alt"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Hungrezy is one of the best eater online website.I always use this website when I want to eat something.My family members and my neighbour are use this website.The food quality is very much satisfactory and very much fresh.My first order was came at few minutes, it was very hot, fresh and smell very strong.</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/311.png" alt="">
                    <div class="user-info">
                        <h3>Vedant Malkarnekar</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                    </div>
                </div>
                <p>I had not given the correct address and I requested to change it, no hassle, I spoke to someone named Sharvani when I was in gurgaon and she handled the entire thing, even explaining the new address to the delivery guy and then called me and gave me a confirmation. This is a good service through Hungrezy</p>
            </div>


        </div>

    </div>
    
</section>

<!-- review section ends -->



<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>locations</h3>
            <a>Margao</a>
            <a>Ponda</a>
            <a>Panjim</a>
            <a>Curchorem</a>
            <a>Candolim</a>
        </div>

        <div class="box">
            
            <h3>quick links</h3>
            <a href="#dishes">Restaurant</a>
            <a href="#about">About</a>
            <a href="#menu">Dishes</a>
            <a href="#review">Review</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a>+91 9607035161</a>
            <a>hungrezy@gmail.com</a>
            <a>Margao</a>
            <a>Goa, india - 403601</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
        </div>

    </div>

    <div class="credit">Devloped by <span>Team Hungrezy</span> </div>

</section>

<!-- footer section ends -->

<!-- loader part  -->
<div class="loader-container">
    <img src="images/loader.gif" alt="">
</div>





















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
