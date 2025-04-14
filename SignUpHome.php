<?php
include("database.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home1.css">
</head>

<!--This is the home page -->

<body>

   <header>
      <nav id="header">
         <img src="pic/Logo2.1.jpg" alt="img" id="logo">
         <ul>
            <li><a id="navigation" href="location.php">Locations</a></li>
            <li><a id="navigation" href="about.php">About</a></li>
            <li><a id="navigation" href=contact.php">Contact</a></li>
            <li><a id="navigation" href="SignUp.php">Sign Up</a></li>
         </ul>
         <button id="order"><a href="checkout.php">Order Now</a></button>
            
         </nav>
            
   </header>

   <main><!--,,,,,,,,,,,,,,,,,,,,Home,,,,,,,,,,,,,,,,,,,-->
      
      <section class="home">
         <h1 id="t1">
            Handcrafted Pizza, Family Tradition
         </h1>

         <p1 id="t1">
            Experience the authentic taste of family recipes passed down through generations, made with the freshest ingredients and love in every slice.
         </p1>

         <br>
         <button href="menu.php">Explore ore menu</button>
         <button href="checkout.php">Order Now</button>
         <br>
      </section>
         

      <hr><!--,,,,,,,,,,,,,,,,,,,,Why choose us,,,,,,,,,,,,,,,,,,,-->
      <div class="choose">
         <h2>Why Choose US</h2>
         <p>At Slice of Life, we're committed to providing the best pizza experience with every order.</p>
         <div id="box1">
            <h3>Fresh Ingredients</h3>
            <p>We use only the freshest ingredients to ensure every bite is bursting with flavor.</p>
         </div>
         <div id="box2">
            <h3>Family Recipes</h3>
            <p>Our recipes have been passed down through generations, ensuring a taste of tradition in every slice.</p>
         </div>
         <div id="box3">
            <h3>Fast Delivery</h3>
            <p>We pride ourselves on quick and reliable delivery, so you can enjoy your pizza hot and fresh.</p>
         </div>
         <div id="box4">
            <h3>Order Anytime</h3>
            <p>Our online ordering system is available 24/7 for your convenience.</p>
         </div>
      </div>
         

      <hr><!--,,,,,,,,,,,,,,,,,,,,Our Most Popular Pizzas,,,,,,,,,,,,,,,,,,,-->

      <div class="popular">
         <h2>Our Most Popular Pizzas</h2>
         <p>These crowd favorites have won the hearts of our customers. Try them yourself and see what the hype is all about!</p>
         <button><a href="menu.php">View the full menu</a></button>
         <span>
            <div id="box5">
               <img src="pic/Pizza14.PNG" alt="img" id="img4">
               <h3>Pepperoni</h3>
               <button href="menu.php">Order Now</button>
            </div>
            <div id="box6">
               <img src="pic/Pizza18.PNG" alt="img" id="img4">
               <h3>Neapolitan Margherita</h3>
               <button href="menu.php">Order Now</button>
            </div>
            <div id="box7">
               <img src="pic/Pizza19.PNG" alt="img" id="img4">
               <h3>NY Margherita</h3>
               <button href="menu.php">Order Now</button>
            </div>
         </span>
         <br>
         <button href="menu.php">View Full Menu</button>
      </div>
        

      <hr><!--,,,,,,,,,,,,,,,,,,,,What Our Customers Say,,,,,,,,,,,,,,,,,,,-->
         
      <div class="customers">
         <h2>What Our Customers Say</h2>
         <p>Don't just take our word for it. Here's what our customers have to say about their Slice of Life experience.</p>
         <span>
            <div id="box8">
               <h3>Sarah Johnson-
                  Local Food Blogger
               </h3>
               <p>"The best pizza in Cape Town! The crust is perfectly crispy on the outside and chewy on the inside. Absolutely worth a visit!"</p>
            </div>
            <div id="box9">
               <h3>David Smith-
               Food Enthusiast</h3>
               <p>"I've tried pizza all over the world, and Slice of Life is truly exceptional. The fresh ingredients and traditional techniques make all the difference."</p>
            </div>
            <div id="box10">
               <h3>
                  Emily Williams-
                  Regular Customer
               </h3>
               <p>"The service is as amazing as the pizza. Always hot, always on time, and always delicious. My family's favorite for our Friday pizza nights!"</p>
            </div>
         </span>
      </div>

      <hr><!--,,,,,,,,,,,,,,,,,,,,Find Us Near You,,,,,,,,,,,,,,,,,,,-->
         
      <div class="locations">
         <h2>Find Us Near You</h2>
         <p>With multiple locations across Cape Town, there's always a Slice of Life pizzeria near you. Check out our stores and find the one closest to you.</p>
         <h3>Store Locations</h3>
         <div id="box11">
               <h4>David Smith-
               Food Enthusiast</h4>
               <p>"I've tried pizza all over the world, and Slice of Life is truly exceptional. The fresh ingredients and traditional techniques make all the difference."</p>
            </div>
            <div id="box12">
               <h4>David Smith-
               Food Enthusiast</h4>
               <p>"I've tried pizza all over the world, and Slice of Life is truly exceptional. The fresh ingredients and traditional techniques make all the difference."</p>
            </div>
            <div id="box13">
               <h4>David Smith-
               Food Enthusiast</h4>
               <p>"I've tried pizza all over the world, and Slice of Life is truly exceptional. The fresh ingredients and traditional techniques make all the difference."</p>
            </div>
            <button href="location.php">View all locations</button>

         <hr><!--,,,,,,,,,,,,,,,,,,,,Ready to Experience the Best Pizza in Cape Town?,,,,,,,,,,,,,,,,,,,-->
         <h2>Ready to Experience the Best Pizza in Cape Town?</h2>
         <p>Join the Slice of Life family today. Order online for delivery or pickup and taste the tradition, quality, and love in every slice.</p>
         <button href="menu.php">View Menu</button>
         <button href="Checkout.php">Order Now</button>
      </div>

      <hr><!--,,,,,,,,,,,,,,,,,,,,About,,,,,,,,,,,,,,,,,,,-->
         
      <div class="about">
         <h3>Find Us Near You</h3>
         <p>A family-owned pizzeria built on tradition, great flavors, and a commitment to quality since 1995. Expanding across Cape Town to bring our delicious pizza to you.</p>
         <br>
         <h3>Quick Links</h3>
         <p>Our Menu
            Locations
            About Us
            Careers
            Contact Us
         </p>
         <br>
         <h3>Contact Us</h3>
         <p>
            8 Main Street, Cape Town, Western Cape, South Africa
            +27 21 555 1234
            info@sliceoflife.co.za
         </p>
         <br>
         <h3>Opening Hours</h3>
         <p>
         Monday - Thursday    11:00 - 22:00
         Friday - Saturday    11:00 - 23:00
         Sunday               12:00 - 21:00
         </p>
         <br>
         <hr>
      </div>

   </main>

   <footer>
      <p>Copyright &copy; 2023 Slice of Life. All rights reserved.</p>
      <p>Website by Group ZN1</p>
      <p>Follow us on social media: Facebook | Instagram | Twitter</p>
   </footer>

</body>

</html>