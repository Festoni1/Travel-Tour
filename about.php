<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- swipper css link -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
    <script>
  window.addEventListener('load', () => {
    const slides = document.querySelectorAll('.reviews .swiper-slide');
    let maxHeight = 0;

    slides.forEach(slide => {
      slide.style.height = 'auto'; // Reset first
      if (slide.offsetHeight > maxHeight) {
        maxHeight = slide.offsetHeight;
      }
    });

    slides.forEach(slide => {
      slide.style.height = maxHeight + 'px';
    });
  });
</script>
</head>
<body>
    <!-- header section starts -->
    <section class="header">
        <a href="home.php" class="logo">travel.</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends -->
    <div class="heading" style="background:url(images/header-bg.jpg) no-repeat">
        <h1>about us</h1>
    </div>


    <!-- about section starts here  -->
        <section class="about">
            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>why choose us</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, id dicta. 
                Doloribus in cum magni voluptate eius aspernatur possimus necessitatibus.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, officiis aliquam quo numquam voluptate ab?</p>

            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide service</span>
                </div>
            </div>
            </div>
        </section>
    <!-- about section ends here  -->


    <!-- reviews section starts here  -->
     <div class="reviews">
     <h3>clients reviews</h3> 
        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae in illum exercitationem possimus consequatur soluta atque placeat sunt autem sint consequuntur quisquam error earum, at temporibus a quo. Sunt, sequi.</p>
                    <h3>john doe</h3>
                    <span>traveler</span>
                    <img src="images/pic-1.jpg" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit veniam id quibusdam, autem exercitationem molestias vero eaque atque tempore pariatur quaerat tempora magnam nam minus excepturi aperiam inventore? Optio aut architecto quisquam modi itaque minima omnis molestiae necessitatibus ab sit.</p>
                    <h3>john doe</h3>
                    <span>traveler</span>
                    <img src="images/pic-2.jpg" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas necessitatibus consequatur odio nulla neque deleniti cumque quibusdam rerum iste atque aliquam, laboriosam eligendi quia dolores, hic accusantium officiis vero temporibus. Debitis asperiores modi placeat voluptatibus.</p>
                    <h3>john doe</h3>
                    <span>traveler</span>
                    <img src="images/pic-3.jpg" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta quidem expedita maxime, quos fugiat ratione?</p>
                    <h3>john doe</h3>
                    <span>traveler</span>
                    <img src="images/pic-4.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero architecto similique fuga, soluta perferendis, vel autem sit facilis quia veritatis eveniet, temporibus cumque animi sint!</p>
                    <h3>john doe</h3>
                    <span>traveler</span>
                    <img src="images/pic-5.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos soluta rerum minus explicabo eligendi perspiciatis odio optio, adipisci mollitia laboriosam?</p>
                    <h3>john doe</h3>
                    <span>traveler</span>
                    <img src="images/pic-6.png" alt="">
                </div>
            </div>
            <div class="swiper-scrollbar"></div>
        </div>
     </div>
    <!-- reviews section ends here  -->


    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php.php"><i class="fas fa-angle-right"></i> about</a>
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
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +381-63-1701373</a>
            <a href="#"><i class="fas fa-phone"></i> +381-62-1451363</a>
            <a href="#"><i class="fas fa-envelope"></i> feston.ahmeti@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> Presheve, Serbia - 17523</a>
            </div>

            <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>

        </div>

        <div class="credit">created by <span>feston ahmeti</span> | all rights reserved!</div>
    </section>

    <!-- footer section ends -->




    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="js/script.js"></script>
    
</body>
</html>