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
    <link rel="stylesheet" href="home2.css">
</head>

<!--This is the home page -->

<body>

    <div class="homepage"> <!-- Changes wanted: created a header, main and footer  -->


        <!-- tags: 
        hmtl(small-(location)) 
        css(small-btn[79], large[83], section-title[88]) -->
        
        <!-- Header Section -->

         <header class="header">

            <div class="container">
               <div class="logo">
                  <img src="pic/Logo2.1.jpg" alt="Slice of Life Logo" class="logo-image" />
                  <div class="logo-text">
                     <h1>Slice of Life</h1>
                     <p className="tagline">Family owned since 1995</p>
                  </div>

                  <nav class="main-nav">
                     <ul>
                        <li><a href="home.php" class="active">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href=contact.php">Contact</a></li>
                        <li><a href="info.php">Profile</a></li>
                        <li><a href="logOut.php">Log Out</a></li>
                        <!--Need to create a sign up version and login version but leave thats for next week-->
                        <li><a href="menu.php" class="order-btn">Order Online</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
        </header>

    
        <!-----------------------------------Home Section ---------------------------- -->
        <section class="home">
          <div class="container">
            <div class="home-content">
              <h2> Each Slice Is A Taste Of Life</h2>
              <p>Experience an authentic slice from across the world, where each slice can be catered to your liking</p>
              <div class="home-buttons">
                <a href="menu.php" class="btn primary-btn">Explore menu</a>
                <a href="checkout.php" class="btn secondary-btn">Order Now</a>
              </div>
            </div>
          </div>
        </section>
    
        <!---------------------------Why Choose Us---------------------------------------->
        <section class="features">

          <div class="container">
            <div class="feature-box">
              <div class="feature-icon">🍕</div>
              <h3>Quality Ingredients</h3>
              <p>We use only the freshest, locally-sourced ingredients for our pizzas.</p>
            </div>

            <div class="feature-box">
              <div class="feature-icon">🏠</div>
              <h3>Family Tradition</h3>
              <p>Our recipes have been in the family for over three generations.</p>
            </div>

            <div class="feature-box">
              <div class="feature-icon">🛵</div>
              <h3>Fast Delivery</h3>
              <p>Hot and fresh pizza delivered to your doorstep within 30 minutes.</p>
            </div>
          </div>

        </section>
    
        <!------------------------------Popular Items ----------------------------->
        <section class="popular-items">
          <div class="container">
            <h2 class="section-title">Our Most Popular Pizzas</h2>
            <!--Need to style this p tag-->
            <p class="popular-p">These crowd favorites have won the hearts of our customers. Try them yourself and see what the hype is all about!</p>
            <div class="pizza-grid">

              <div class="pizza-card">
                <div class="pizza-img pizza-1"></div>
                <h3>Pepperoni</h3>
                <p>Fresh tomatoes sauce, mozzarella and our homemade pepperoni</p>
                <span class="price">R119.99</span>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
              </div>

              <div class="pizza-card">
                <div class="pizza-img pizza-2"></div>
                <h3>Neapolitan Margherita</h3>
                <p>Mozzarella, Fresha tomatoes and basil</p>
                <span class="price">R99.99</span>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
              </div>

              <div class="pizza-card">
                <div class="pizza-img pizza-3"></div>
                <h3>CPT Margherita</h3>
                <p>Fresh tomatoes and mozzarella, what more can u ask for</p>
                <span class="price">R89.99</span>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
              </div>

              <div class="pizza-card">
                <div class="pizza-img pizza-4"></div>
                <h3>Cape Flats</h3>
                <p>Freshly grounded meat, bell peppers, mozzarella and our secret sauce</p>
                <span class="price">R129.99</span>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
              </div>

            </div>
            <div class="view-more">
              <a href="menu.php" class="btn secondary-btn">View the Full Menu</a>
            </div>
          </div>
        </section>
    
        <!----------------------  About Section ---------------->

        <section class="about">
          <div class="container">
            <div class="about-content">
              <h2 class="section-title">Our Story</h2>
              <p>Slice of Life was founded in 1995 by the Rossi family who brought their authentic Italian recipes from Naples to Cape Town. What started as a small corner pizzeria has grown into a beloved local chain, without ever compromising on quality or tradition.</p>
              <p>We're proud to be expanding across the Western Cape while maintaining the same care and attention to detail in every pizza we make.</p>
              <a href="#" class="btn primary-btn">Learn More About Us</a>
            </div>
            <div class="about-image"></div>
          </div>
        </section>

    
        <!------------------What our customers say ------------------>

        <section class="testimonials">
          <div class="container">
            <h2 class="section-title2">What Our Customers Say</h2>
            <div class="testimonial-slider">

              <div class="testimonial">
                <div class="quote">"Best pizza in Cape Town, hands down! The crust is perfect and the toppings are always fresh."</div>
                <div class="customer">- Sarah M.</div>
                <div class="stars">★★★★★</div>
              </div>

              <div class="testimonial">
                <div class="quote">"I've been ordering from Slice of Life for years. Their delivery is always on time and the pizza is still hot!"</div>
                <div class="customer">- James T.</div>
                <div class="stars">★★★★★</div>
              </div>

              <div class="testimonial">
                <div class="quote">"The Cape Town Special pizza changed my life. I can't go back to regular pizza anymore!"</div>
                <div class="customer">- Nomsa K.</div>
                <div class="stars">★★★★★</div>
              </div>

            </div>
          </div>
        </section>
    

        <!--     ---------      Locations    ---------         -->

        <section class="locations">
          
          <div class="container"> 
            <h2 class="section-title">Find Us</h2> 
            <p class="locations-p">We have multiple locations across Cape Town and the Western Cape. Find the one nearest to you!</p>
            
            <div class="locations-grid">

              <div class="location-card">
                <h3>Sea Point</h3>
                <p>123 Main Road<br />Sea Point, Cape Town</p>
                <p>Open daily: 11am - 10pm</p>
                <a href="#" class="btn small-btn">Directions</a>
              </div>

              <div class="location-card">
                <h3>Gardens</h3>
                <p>45 Kloof Street<br />Gardens, Cape Town</p>
                <p>Open daily: 11am - 11pm</p>
                <a href="#" class="btn small-btn">Directions</a>
              </div>

              <div class="location-card">
                <h3>Woodstock</h3>
                <p>78 Albert Road<br />Woodstock, Cape Town</p>
                <p>Open daily: 11am - 10pm</p>
                <a href="#" class="btn small-btn">Directions</a>
              </div>

              <div class="location-card coming-soon">
                <h3>Stellenbosch</h3>
                <p>Coming Soon!</p>
              </div>

            </div>
          </div>
        </section>
    
        <!--           CTA Section             -->

        <section class="cta">

          <div class="container">
            <h2>Ready to order your perfect slice?</h2>
            <a href="#" class="btn primary-btn large">Order Online Now</a>
            <p>or call us: <a href="tel:0215550123" class="phone">021 555 0123</a></p>
          </div>
          
        </section>
    
        <!-- Footer -->
        <footer class="footer">
          <div class="container">
            <div class="footer-sections">

              <div class="footer-section">
                
                <h3>Slice of Life</h3>
                <p>Family-owned pizza with a tradition of excellence since 1995.</p>
                
                <div class="social-icons">
                  <a href="#" class="social-icon">📱</a>
                  <a href="#" class="social-icon">📘</a>
                  <a href="#" class="social-icon">📸</a>
                </div>
              </div>

              <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                <li><a href="home.php">Home</a></li>
              <li><a href="menu.php">Menu</a></li>
              <li><a href="locatioin.php">Locations</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="contact.php">Contact</a></li>
                </ul>
              </div>

              <div class="footer-section">
                <h4>Contact Us</h4>
                <p>Email: info@sliceoflife.co.za</p>
                <p>Phone: 021 555 0123</p>
                <p>Head Office: 123 Main Road, Sea Point, Cape Town</p>
              </div>

              <div class="footer-section">
                <h4>Opening Hours</h4>
                <p>Monday - Thursday: 11am - 10pm</p>
                <p>Friday - Saturday: 11am - 11pm</p>
                <p>Sunday: 12pm - 9pm</p>
              </div>
            </div>

            <div class="copyright">
              <p>&copy; 2025 Slice of Life Pizzeria. All rights reserved.</p>
            </div>
          </div>
        </footer>
      </div>
</body>

</html>