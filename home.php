<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>home</title>


        <!--swiper css link-->
        <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
       
 
        <!--font awesome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!--css link-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <!--header section start-->
    <section class ="header">
    <a href="home.php" class="logo">Travel</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars">
        
    </div>

    </section>



<!--header ends-->
<!--home starts-->
<section class="home">
    <div class=" swiper home-slider">

    <div class="swiper-wrapper">
   
          <div class="swiper-slide slide" style="background:url(images/img1.jpg) no-repeat">
            <div class="content">
                <span>Explore,discover,travel</span>
                <h3>Travel the world</h3>
                <a href="package.php" class="btn">Discover more</a>
            </div>
          </div>

          <div class=" swiper-slide slide" style="background:url(murdeshwar.jpg) no-repeat">
            <div class="content">
                <span>Explore,discover,travel</span>
                <h3>Discover the new places</h3>
                <a href="package.php" class="btn">Discover more</a>
            </div>
          </div>

          <div class="swiper-slide slide" style="background:url(img3.jpg) no-repeat">
            <div class="content">
                <span>Explore,discover,travel</span>
                <h3>Make your tour worthwhile</h3>
                <a href="package.php" class="btn">Discover more</a>
            </div>
          </div>
</div>  

<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>

</div>

</section>


<!--home end-->

<!--services start-->

<section class="services">
    <h1 class="heading-title">Our services</h1>
<div class="box-container">
    <div class="box">
        <img src="adventure.jpg" alt="">
        <h3>Adventure</h3>
    </div>

    <div class="box">
        <img src="tour guide.jpg" alt="">
        <h3>Tour guide</h3>
    </div>

    <div class="box">
        <img src="trekking.jpg" alt="">
        <h3>Trekking</h3>
    </div>

    <div class="box">
        <img src="camp fire.jpg" alt="">
        <h3>Camp fire</h3>
    </div>

    <div class="box">
        <img src="camping.jpg" alt="">
        <h3>Camping</h3>
    </div>

</div>

</section>



<!--services end-->



<!--home about section starts-->

<section class="home-about">
    <div class="image">
     <img src="images/abt.jpg" alt="">
    </div>

    <div class="content">
     <h3>About us </h3>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
        ullamco eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
        sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur 
        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor 
        sit amet, consectetur,adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
    
    </p>
     <a href="about.php" class="btn">Read more</a>
    </div>
</section>
<!--home about section ends-->


<!--home packages starts-->
<section class="home-packages">
    <h1 class="heading-title">Our packages</h1>
    <div class="box-container">

    <div class="box">
    <div class="image">
        <img src="images/pack1.jpg" alt="">
    </div>
    <div class="content">
    <h3>Adventure & Tour</h3>
    <p>Lorem ipsum dolor sit ,numquam eius modi tempora incidunt ut labore 
    et </p>
    <a href="book.php" class="btn">Book Now</a>
    </div>
    </div>


    <div class="box">
    <div class="image">
        <img src="images/pack2.jpg" alt="">
    </div>
    <div class="content">
     <h3>Adventure & Tour</h3>
     <p>Lorem ipsum dolor sit ,numquam eius modi tempora incidunt ut labore 
    et </p>
    <a href="book.php" class="btn">Book Now</a>
    </div>
    </div>


    <div class="box">
    <div class="image">
        <img src="images/pack3.jpg" alt="">
    </div>
    <div class="content">
     <h3>Adventure & Tour</h3>
     <p>Lorem ipsum dolor sit ,numquam eius modi tempora incidunt ut labore 
    et </p>
    <a href="book.php" class="btn">Book Now</a>
    </div>
    </div>


    </div>

    <div class="load-more"><a href="package.php" class="btn">Load more</a></div>
</section>
<!--home packages ends-->

<!--home-offers starts-->
<section class="home-offer">
    <div class="content">
    <h3>Upto 40% Off</h3>
    <p>Neque porro quisquam est, qui dolorem ipsum quia 
        dolor sit amet, consectetur, adipisci velit, sed quia non 
        modi tempora incidunt ut labore dolor sit ,numquam eius
        .”</p>
    <p></p>
    <p></p>
    <a href="book.php" class="btn">Book Now</a>
    </div>
</section>


<!--home-offers ends-->








<!--footer start-->
<section class="footer">
<div class="box-container">

<div class="box">
<h3>Quick links</h3>
<a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
<a href="about.php"><i class="fas fa-angle-right"></i>About</a>
<a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
<a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
</div>

<div class="box">
<h3>Extra links</h3>
<a href="#"><i class="fas fa-angle-right"></i>Ask questions</a>
<a href="#"><i class="fas fa-angle-right"></i>About us</a>
<a href="#"><i class="fas fa-angle-right"></i>Privacy policy</a>
<a href="#"><i class="fas fa-angle-right"></i>Terms of use</a>
</div>

<div class="box">
<h3>Contact links</h3>
<a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
<a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
<a href="#"><i class="fas fa-envelope"></i>priyankanaik@gmail.com</a>
<a href="#"><i class="fas fa-map"></i>mumbai-india</a>
</div>

<div class="box">
<h3>Follow us</h3>
<a href="#"><i class="fab fa-facebook"></i>facebook</a>
<a href="#"><i class="fab fa-instagram"></i>instagram</a>
<a href="#"><i class="fab fa-twitter"></i>twitter</a>
</div>

</div>
<div class="cred">Created by<span> Ms.Priyanka</span> | All rights reserved ! </div>

</section>



   <!--swiper js link-->
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   
   
   
   <script src="script.js"></script>

    </body>
</html>