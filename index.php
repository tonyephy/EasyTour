<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<title>web based Tourism management system</title>

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!-- custom css file link -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <!-- header section starts -->
  <header>
    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>Tour</span>plan</a>

    <nav class="navbar">
      <a href="#home">Home</a>
      <a href="#book">Book</a>
      <a href="#packages">Packages</a>
      <a href="#contact">Contacts</a>
      <a href="logout.php" style="color:red;">Log Out</a>
    </nav>

    <div class="icons">
      <i class="fas fa-search" id="search-btn"></i>
          </div>

    <form action="" class="search-bar-container">
      <input type="search" name="" id="search-bar" placeholder="search here...">
      <label for="search-bar" class="fas fa-search"></label>
    </form>

  </header>
  <!-- header section ends -->

  

  <!-- home section starts -->
  <section class="home" id="home">

    <div class="content">
 
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>

      <h3>adventure is worthwhile</h3>
      <p>dicover new places with us, adventure awaits</p>
      <a href="" class="btn">discover more</a>
    
   
    <?php if (isset($user)): ?>         
    <?php else: ?>
       
    <?php endif; ?>
 
    </div>

    <div class="controls">
      <span class="vid-btn active" data-src="images/vid-5.mp4"></span>
      <span class="vid-btn" data-src="images/vid-2.mp4"></span>
      <span class="vid-btn" data-src="images/vid-3.mp4"></span>
      <span class="vid-btn" data-src="images/vid-4.mp4"></span>
      <span class="vid-btn" data-src="images/vid-1.mp4"></span>
    </div>

    <div class="video-container">
      <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

  </section>
  <!-- home section ends -->


<!-- book section starts -->
  <section class="book" id="book">

    <h1 class="heading">
      <span>b</span>
      <span>o</span>
      <span>o</span>
      <span>k</span>
      <span class="space"></span>
      <span>n</span>
      <span>o</span>
      <span>w</span>
    </h1>

    <div class="row">

      <div class="image">
        <img src="images/book-img.svg" alt="">
      </div>

      <form action="">
        <div class="inputBox">
          <h3>where to visit</h3>
          <input type="text" name="" id="name" placeholder="place name">
        </div>
        <div class="inputBox">
          <h3>Expected tourist</h3>
          <input type="number" name="" id="num" placeholder="number of guests">
        </div>
        <div class="inputBox">
          <h3>arrivals</h3>
          <input type="date" name="" id="day">
        </div>
        <div class="inputBox">
          <h3>leaving</h3>
          <input type="date" name="" id="number">
        </div>
        <input type="submit" value="book now" class="btn">
      </form>

    </div>

  </section>

  <!-- book section ends -->
<!-- contact section starts -->
  <section class="contact" id="contact">

    <h1 class="heading"><span>contact</span> us </h1>

    <form action="" data-aos="zoom">

      <div class="inputBox">
        <input type="text" name="" id="" placeholder="name" data-aos="fade-up">
        <input type="email" name="" id="" placeholder="email" data-aos="fade-up">
      </div>

      <div class="inputBox">
        <input type="number" name="" id="" placeholder="number" data-aos="fade-up">
        <input type="text" name="" id="" placeholder="subject" data-aos="fade-up">
      </div>

      <textarea name="" placeholder="your message" id="" cols="30" rows="10" data-aos="fade-up"></textarea>

      <input type="submit" value="send message" class="btn">

    </form>

  </section>
  <!-- contact section ends  -->
<!-- packages section starts -->

  <section class="packages" id="packages">

    <h1 class="heading">
      <span>p</span>
      <span>a</span>
      <span>c</span>
      <span>k</span>
      <span>a</span>
      <span>g</span>
      <span>e</span>
      <span>s</span>
    </h1>

    <div class="box-container">

      <div class="box">
        <img src="images/p-1.jpg" alt="">
        <div class="content">
          <h3><i class="fas fa-map-marker-alt"></i>mumbai</h3>
          <p>Mumbai (formerly called Bombay) is a densely populated city on India’s west coast. A financial center, it's India's largest city. On the Mumbai Harbour waterfront stands the iconic Gateway of India stone arch, built by the British Raj in 1924. Offshore, nearby Elephanta Island holds ancient cave temples dedicated to the Hindu god Shiva. The city's also famous as the heart of the Bollywood film industry.</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="price">$90.00 <span>$120.00</span></div>
          <a href="#" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <img src="images/p-2.jpg" alt="">
        <div class="content">
          <h3><i class="fas fa-map-marker-alt"></i>hawaii</h3>
          <p>Hawaii is an island state of the United States, in the Pacific Ocean about 2,000 miles southwest of the U.S. mainland. It is the only state not on the North American mainland, the only state that is an archipelago, and the only state in the tropics.</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="price">$90.00 <span>$120.00</span></div>
          <a href="#" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <img src="images/p-3.jpg" alt="">
        <div class="content">
          <h3><i class="fas fa-map-marker-alt"></i>sychelles</h3>
            <p>The Seychelles is an archipelago of 115 islands in the Indian Ocean, off East Africa. It's home to numerous beaches, coral reefs and nature reserves, as well as rare animals such as giant Aldabra tortoises. Mahé, a hub for visiting the other islands, is home to capital Victoria. It also has the mountain rainforests of Morne Seychellois National Park and beaches, including Beau Vallon and Anse Takamaka. 
            </p>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="price">$90.00 <span>$120.00</span></div>
          <a href="#" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <img src="images/p-4.jpg" alt="">
        <div class="content">
          <h3><i class="fas fa-map-marker-alt"></i>paris</h3>
          <p>Paris, France's capital, is a major European city and a global center for art, fashion, gastronomy and culture. Its 19th-century cityscape is crisscrossed by wide boulevards and the River Seine. Beyond such landmarks as the Eiffel Tower and the 12th-century, Gothic Notre-Dame cathedral, the city is known for its cafe culture and designer boutiques along the Rue du Faubourg Saint-Honoré.</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="price">$90.00 <span>$120.00</span></div>
          <a href="#" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <img src="images/p-5.jpg" alt="">
        <div class="content">
          <h3><i class="fas fa-map-marker-alt"></i>tokyo</h3>
          <p>Tokyo, Japan’s busy capital, mixes the ultramodern and the traditional, from neon-lit skyscrapers to historic temples. The opulent Meiji Shinto Shrine is known for its towering gate and surrounding woods. The Imperial Palace sits amid large public gardens. The city's many museums offer exhibits ranging from classical art (in the Tokyo National Museum) to a reconstructed kabuki theater (in the Edo-Tokyo Museum). 
          </p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="price">$90.00 <span>$120.00</span></div>
          <a href="#" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <img src="images/p-6.jpg" alt="">
        <div class="content">
          <h3><i class="fas fa-map-marker-alt"></i>Egypt</h3>
          <p>Egypt, a country linking northeast Africa with the Middle East, dates to the time of the pharaohs. Millennia-old monuments sit along the fertile Nile River Valley, including Giza's colossal Pyramids and Great Sphinx as well as Luxor's hieroglyph-lined Karnak Temple and Valley of the Kings tombs. The capital, Cairo, is home to Ottoman landmarks like Muhammad Ali Mosque and the Egyptian Museum, a trove of antiquities.</p>
          
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="price">$90.00 <span>$120.00</span></div>
          <a href="#" class="btn">book now</a>
        </div>
      </div>

    </div>

  </section>

  <!-- packages section ends -->
  <!-- brand section -->


  <!-- footer section -->
  <section class="footer">

    <div class="box-container">

      <div class="box" data-aos="fade-up">
        <h3>our main branches</h3>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> Europe</a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> Russia </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> Japan </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> France </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> Canada </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> kenya</a>
      </div>

      <div class="box" data-aos="fade-up">
        <h3>quick links</h3>
        <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> packages </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> pricing </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> contact </a>
      </div>

      <div class="box" data-aos="fade-up">
          <h3>contact info</h3>
          <a href="#"> <i class="fas fa-phone"></i> WhatsApp</a>
          <a href="#"> <i class="fas fa-phone"></i>+254758002042</a>
          <a href="#"> <i class="fas fa-envelop"></i> tonylvan77@gmail.com </a>
          <a href="#"> <i class="fas fa-map-marker-alt"></i> Nairobi, kenya - 23034 </a>
      </div>

      <div class="box" data-aos="fade-up">
          <h3>follow us</h3>
          <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
          <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
          <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
          <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
      </div>
    </div>

    <div class="credit"> creadet by <span>Kabarak WebDesigners</span> | all rights reserved </div>

  </section>
  <!-- footer section end-->

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- custom js file link -->
  <script src="js/script.js"></script>

    
    
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    
