<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>

  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- custom css file link -->
  <link rel="stylesheet" href="css/style.css">

  <!-- swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
  <!-- HEADER -->
  <section class="header">
    <a href="index.php" class="logo">travel</a>

    <nav class="navbar">
      <a href="index.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
    </nav>

    <div class="fas fa-bars" id="menu-btn"></div>
  </section>

  <!-- HOME -->
  <section class="home">

    <div class="swiper home-slider">

      <div class="swiper-wrapper">

        <div class="slide swiper-slide" style="background: url(images/home-slide-1.jpg) no-repeat;">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>travel arround the world</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="slide swiper-slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>discover the new places</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="slide swiper-slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>make your tour worthwhile</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

      </div>

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

    </div>

  </section>

  <!-- SERVICES -->
  <section class="services">

    <h1 class="heading-title">our services</h1>

    <div class="box-container">

      <div class="box">
        <img src="images/icon-1.png" alt="">
        <h3>adventures</h3>
      </div>

      <div class="box">
        <img src="images/icon-2.png" alt="">
        <h3>tour guide</h3>
      </div>

      <div class="box">
        <img src="images/icon-3.png" alt="">
        <h3>trekking</h3>
      </div>

      <div class="box">
        <img src="images/icon-4.png" alt="">
        <h3>camp fire</h3>
      </div>

      <div class="box">
        <img src="images/icon-5.png" alt="">
        <h3>off road</h3>
      </div>

      <div class="box">
        <img src="images/icon-6.png" alt="">
        <h3>camping</h3>
      </div>

    </div>

  </section>

  <!-- ABOUT -->
  <section class="home-about">

    <div class="image">
      <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
      <h3>about us</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam totam quas aspernatur rerum voluptatem reiciendis eligendi dolorum explicabo molestias soluta dicta quasi accusantium adipisci, perspiciatis hic fugiat nostrum velit error.</p>
      <a href="about.php" class="btn">read more</a>
    </div>

  </section>

  <!-- PACKAGES -->
  <section class="packages">

    <h1 class="heading-title">our packages</h1>

    <div class="box-container">

      <div class="box">
        <div class="image">
          <img src="images/img-1.jpg" alt="">
        </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          <a href="book.php" class="btn">boor now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/img-2.jpg" alt="">
        </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          <a href="book.php" class="btn">boor now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/img-3.jpg" alt="">
        </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          <a href="book.php" class="btn">boor now</a>
        </div>
      </div>

    </div>

    <div class="load-more">
      <a href="package.php" class="btn">load more</a>
    </div>

  </section>

  <!-- OFFER -->
  <section class="offer">
    <div class="content">
      <h3>upto 50% off</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum velit error eligendi! Suscipit, voluptas commodi illum dolor harum dolorem quaerat ex! Temporibus excepturi voluptas tenetur id, neque rem pariatur veritatis.</p>
      <a href="book.php" class="btn">book now</a>
    </div>
  </section>

  <!-- FOOTER -->
  <section class="footer">
    <div class="box-container">

      <div class="box">
        <h3>quick links</h3>
        <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
        <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> ask privacy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +123 456 789</a>
        <a href="#"> <i class="fas fa-phone"></i> +123 456 789</a>
        <a href="#"> <i class="fas fa-envelope"></i> contact@contact.com</a>
        <a href="#"> <i class="fas fa-angle-right"></i> recife, brazil, 99999</a>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href=""><i class="fab fa-facebook-f"></i>facebook</a>
        <a href=""><i class="fab fa-twitter"></i>twitter</a>
        <a href=""><i class="fab fa-instagram"></i>instagram</a>
        <a href=""><i class="fab fa-linkedin"></i>linkedin</a>
      </div>

    </div>

    <div class="credit">
      <p>created by <span>mr. web design</span> | all rights reserved.</p>
    </div>
  </section>

  <!-- swiper js file -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <!-- custon js file -->
  <script src="./js/script.js"></script>
</body>

</html>