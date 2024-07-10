<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

    <!-- header section starts -->

    <section class="header">

    <a href="home.php" class="logo">R-Travelo.</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>   
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>



    <!-- header section Ends -->





    <!-- home section starts -->
    <section class="home">

    <div class="content">
        <h3>Adventure is worthwhile</h3>
        <p>discover new places with us, adventure awaits</p>
        <a href="#" class="btn">Discover more</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

    </section>
    <!-- home section Ends -->






    <!-- services section starts -->

    <section class="services">

        <h1 class="heading-title"> our services </h1>

        <div class="box-container">
            <div class="box">
                <img src="images/adventure.gif" alt="" srcset="">
                <h3>Adventure</h3>
            </div>

            <div class="box">
                <img src="images/tour-guide.gif" alt="" srcset="">
                <h3>Tour guide</h3>
            </div>

            <div class="box">
                <img src="images/trekking.gif" alt="" srcset="">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="images/camp-fire.gif" alt="" srcset="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="images/offroad.gif" alt="" srcset="">
                <h3>Off road</h3>
            </div>

            <div class="box">
                <img src="images/camping.gif" alt="" srcset="">
                <h3>camping</h3>
            </div>

        </div>

    </section>



    <!-- services section Ends -->


    <!-- home about section starts -->

    <section class="home-about">

        <div class="image">
            <img src="images/about.jpg" alt="">
        </div>

        <div class="content">
            <h3>
                about us
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ipsam animi debitis beatae dolorum
                consectetur accusamus atque sit ipsum repellat? Quibusdam illo, eum officia quisquam accusamus placeat
                aut magni pariatur.</p>
            <a href="about.php" class="btn">read more</a>
        </div>

    </section>



    <!-- home about section Ends -->


    <!-- home package section starts -->

    <section class="home-packages">

        <h1 class="heading-title"> our packages </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/taj-mahal.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non, laboriosam.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/tower.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non, laboriosam.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/maldives.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non, laboriosam.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

        </div>

        <div class="load-more">
            <a href="package.php" class="btn">load more</a>
        </div>
    </section>


    <!-- home package section Ends -->






    <!-- home offer section starts -->

    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In deleniti neque molestiae nisi delectus illo est vero impedit, fugit dignissimos!</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>




    <!-- home offer section Ends -->








    <!-- footer section start -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
            </div>


            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
            </div>


            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +123-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> xyz@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> Dhanbad, India - 828100 </a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#"> <i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"> <i class="fab fa-twitter"></i>X (Twitter)</a>
                <a href="#"> <i class="fab fa-linkedin"></i>Linkedin</a>
            </div>

        </div>

        <div class="credit"> Created by <span>Rishi Sharma</span> | all rights reserved ! </div>

    </section>

    <!-- footer section Ends -->







    
    <!-- custom js file link -->
    <script src="js/script.js"></script>
    
    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="module">
     import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

     const swiper = new Swiper(...)
</script>
</body>

</html>