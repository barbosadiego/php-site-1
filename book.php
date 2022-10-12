<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>about</title>

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

  <div class="heading" style="background: url(images/header-bg-3.png) no-repeat;">
    <h1>book</h1>
  </div>

  <!-- BOOKING -->
  <section class="booking">

    <h1 class="heading-title">book your trip!</h1>

    <form action="book_form.php" class="book-form">

      <div class="flex">

        <div class="input-box">
          <span>name:</span>
          <input type="text" placeholder="enter your name" name="name">
        </div>
        <div class="input-box">
          <span>email:</span>
          <input type="email" placeholder="enter your email" name="email">
        </div>
        <div class="input-box">
          <span>phone:</span>
          <input type="number" placeholder="enter your phone" name="phone">
        </div>
        <div class="input-box">
          <span>address:</span>
          <input type="text" placeholder="enter your address" name="address">
        </div>
        <div class="input-box">
          <span>where to:</span>
          <input type="text" placeholder="place you want to visit" name="location">
        </div>
        <div class="input-box">
          <span>how many:</span>
          <input type="number" placeholder="number of guests" name="guests">
        </div>
        <div class="input-box">
          <span>arrivals:</span>
          <input type="date" name="arrivals">
        </div>
        <div class="input-box">
          <span>leaving:</span>
          <input type="date" name="leaving">
        </div>

      </div>

      <input type="submit" value="submit" class="btn" name="send">

    </form>

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

    <div class="credit"><p>created by <span>mr. web design</span> | all rights reserved.</p></div>
  </section>

  <!-- swiper js file -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <!-- custon js file -->
  <script src="./js/script.js"></script>
</body>

</html>