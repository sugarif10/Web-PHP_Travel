<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>book</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<section class="header">

    <a href="home.php" class="logo">travel.</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background: url(images/header-bg-3.png) no-repeat">
    <h1>book now</h1>
</div>

<!--booking section starts-->

<section class="booking">
    <h2 class="heading-title">book your trip</h2>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>Name: </span>
                <input type="text" placeholder="enter your name" name="name">
            </div>

            <div class="inputBox">
                <span>Email: </span>
                <input type="email" placeholder="enter your email" name="email">
            </div>

            <div class="inputBox">
                <span>Phone: </span>
                <input type="number" placeholder="enter your phone" name="phone">
            </div>

            <div class="inputBox">
                <span>Address: </span>
                <input type="text" placeholder="enter your address" name="address">
            </div>

            <div class="inputBox">
                <span>Where to: </span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>

            <div class="inputBox">
                <span>How many: </span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>

            <div class="inputBox">
                <span>Arrivals: </span>
                <input type="date" name="arrivals">
            </div>

            <div class="inputBox">
                <span>Leaving: </span>
                <input type="date" name="leaving">
            </div>

        </div>

        <input type="submit" value="submit" name="send" class="btn">

    </form>
</section>

<!--booking section ends-->

<!--footer section starts-->

<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-phone"></i> +62-896-4334-0660</a>
            <a href="#"><i class="fas fa-phone"></i> +62-812-9692-0565</a>
            <a href="#"><i class="fas fa-envelope"></i> agus.rifaldi@outlook.com</a>
            <a href="#"><i class="fas fa-map"></i> Tangerang, Indonesia - 15520</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>

    </div>

    <div class="credit"> created by <span>Agus Rifaldi</span> | all rights reserved </div>
</section>


<!--footer section ends-->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!--custom js file link-->
<script src="js/script.js"></script>

</body>
</html>