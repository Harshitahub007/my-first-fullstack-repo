<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> PetalsWorld | Home </title>
    <link rel="stylesheet" href="Petals.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>  
    

<header>

    <div id="navbar">
        <a href="index.php">
        <img src ="images/PetalsWorld-logo.jpg"> 
        </a>

        <div class="details-icons">
        <a href="index.php">
            <span>
                <i class="fa-solid fa-house" ></i>
                <b>Home</b>
            </span>
        </a>

        <a href="">
            <span>
                <i class="fa-solid fa-circle-info" ></i>
                <b>About</b>
            </span>
            
        </a>
        <a href="">
            <span>
                <i class="fa-solid fa-phone"></i>
                <b>Contact us</b>

            </span>
        </a>
        </div>
        <div class="nav-icons">

        <form action="products.php" method="GET" class="search-container">
            <input type="text" name="search" id="search-input" placeholder="Search Flowers...">

        <button  style="background:none; border:none; cursor:pointer;">
            <i class="fa-solid fa-magnifying-glass" id="search-btn"></i>
        </button>

        </form>
          
            
            <a href="">
            <div id ="crt">
                <i class="fa-solid fa-cart-shopping"></i> 
               <span id="cart-count">0</span>
            </div>
            </a>

            <a href="">
            <span id ="acc-box">
                <i class="fa-solid fa-circle-user"></i>
                <a href="signup.php">
                <button class = "account_btn" >
                    <b>Account</b>
                </button>
            </span>
            </a>
        </div>
    </div>


</header>


<main>
    <div class="banner">
        <div class="content">

            <h1>Welcome To Petals World</h1>
            <p>Fresh Flowers for Every Moment</p>

            <a href="products.php" target = "_blank">
            <button class="shop-btn">See More...</button>
            </a>
        </div>
    </div>

    <h1 id="category">Categories</h1>

    <div class="cat-container">
        
        <div class = "cat-box">
            <a href = "products.php?category=Rose">
                <img src="images\colorful-rosesvase.jpg" alt="Roses">
            <p>Fresh Roses</p>
        </a>
        </div>

        <div class="cat-box">
        <a href="products.php?category=Orchid">
            <img src="images\orchid-flowers.avif" alt="Orchids">
            <p>Elegant Orchids</p>
        </a>
        </div>

        <div class="cat-box">
        <a href="products.php?category=Sunflower">
            <img src="images/sunflower_stem2.jpg" alt="Mixed">
            <p>  Bright Sunflowers</p>
        </a>
    </div>

        <div class="cat-box">
        <a href="products.php?category=Mixed">
            <img src="images\mix-flower-basket.jpg" alt="Mixed">
            <p>Mixed Flowers</p>
        </a>
    </div>

    </div>

    <section class="reviews-container">
    <h2 class="section-title">What Our Customers Say</h2>

    
    <div class="reviews-grid">
        <div class="review-card">
            <div class="review-text">
                <p>"The Bouquets from Petals World are always so fresh! Highly Recommended for Weddings."</p>
                <br>
                <b>- Ananya Sharma</b>
            </div>
            <img src="images/girl_review.avif" class="review-img">
        </div>


        <div class="review-card">
            <div class="review-text">
                <p>"Best flower shop in Delhi! The roses stayed fresh for a week. Amazing service."</p>
                <br>
                <b>- Shruti Verma</b>
            </div>
            <img src="images/girl_review2.avif" class="review-img">
        </div>
    </div>
</section>

<section id="services-box">
    <h4>Our Services</h4>
  <div id="services">
      
      <div class="service-img">
         <img class = "ser-img"src="images/dilivery-service.jpg" alt="Express Delivery">
         <h5>GET EXPRESS DELIVERY</h5>
      </div>
      <div class="service-img">  
          <img class = "ser-img"src="images/flower-message-card.jpg" alt="customize card">
           <h5>FREE CUSTOMIZE CARD</h5>
        </div>
      <div class="service-img">
          <img class = "ser-img"src="images/fresh-service.jpg" alt="Freshness">
          <h5>FRESH FLOWERS FROM FARM</h5>
        </div>
  </div>
</div>
</section>
        
<div class= "about-box">
    
    <div class="about-card">
        <div class="about">About Us</div>
        <p id="about-p">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias aliquid iste libero, maxime nihil nostrum, fugiat eos quasi deleniti sint ducimus fuga placeat magni repellat harum, laborum assumenda cumque iure?Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, inventore, aut accusamus sequi deserunt voluptatem consectetur nobis ratione aliquid enim corporis. Repellendus itaque reprehenderit voluptates voluptatem, illum nemo esse minima.
        </div>
        <div class="about-img">
            <img id = "about-img2" src = "images/about-flower-shop.jpg">
            
            <img id = "about-img" src = "images/shop-about.jpg" > 
        </div>
        
    </div>
    
    <footer>
    <div class="contact-box">
        
        <h5 id="contact-tag">Contact us</h5>
  <br><br>
  
  <div class="contact">
      <div id="email">
          <h6>
              <i class="fa-solid fa-envelope" style="color: rgb(250, 84, 191);"></i>
              Email:
            </h6>
            <a href="">petalsworld@gmail.com</a>
            <a href="">info@petalsworld.com</a>
        </div>

        <div id="call-chat">
            <h6>
                <i class="fa-solid fa-phone" style="color: rgb(250, 84, 191);"></i>
                Call us:
            </h6>
            <a href="">  +91-0001234567</a>
            <br>
            <a href=""> +91-9876543210</a>
        </div>
    </div>
    
    <div class="follow-us">
        
        <div class="social-follow">
            <h6>Follow Our Journey</h6>
            <br>
            <i class="fa-brands fa-facebook" style="color: rgb(250, 84, 191);"></i>  Facebook:
            
            <a href=""><b>petals_world.in</b></a>
            
            <br>
            
            <i class="fa-brands fa-instagram" style="color: rgb(250, 84, 191);"></i>  Instagram:
            <a href=""><b>@Petals_World001</b></a>
        </div>
        <div class="reach-us">
            <h6>Reach Us</h6>
          <br><br>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224346.54004883842!2d77.04417347155065!3d28.52725273882469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1776925402481!5m2!1sen!2sin"style="border:2px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

    </div>
    
</main>

        <div id="ending">
            © 2026 Petals World. All Rights Reserved.
        </div>
        
    </footer>
    
    <script src ="petals.js"></script>
</body>
</html>