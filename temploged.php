<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="try.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>Crafting Homes</title>
    <link rel="icon" type="image/x-icon" href="./logo.jpg">
    
</head>
<body>
    <nav>
        <ul>
            <li class="active"><a href="./temploged.php">Home</a></li>
            <li><a href="./loged_service.php">Services</a></li>
            <li><a href="./loged_aboutus.php">About Us</a></li>
            <li><a href="./loged_contact.php">Contact</a></li>
            
            <li> <a href="./userinfo.php"> Welcome,
               <?php  
                 session_start();
                echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : ''; 
                ?>
             </a></li>
             <li class="nav-right"><a href="home.html">Logout</a></li>
            
        </ul>
    </nav>

    <header>
        <img src="./logo1.jpg" alt="crafting home logo " class="logo">
        <h1>Crafting Homes</h1>
        <p>Your one-stop solution for home services</p>
    </header>

    <section class="services" id="home">
        <!-- Service 1: Painting -->
        <div class="service-card" id="painting" data-service="painting">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./painting1.jpg" alt="Painting Service Image 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="./painting2.jpg" alt="Painting Service Image 2">
                    </div>
                    <div class="swiper-slide">
                        <img src="./painting3.jpg" alt="Painting Service Image 2">
                    </div>
                    <div class="swiper-slide">
                        <img src="./painting4.jpg" alt="Painting Service Image 2">
                    </div>
                    <!-- Add more swiper-slide divs for additional images -->
                </div>
                <!-- Add Navigation and Pagination -->
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                <!-- <div class="swiper-pagination"></div> -->
            </div>
            <div class="card-info">
                <h2>Painting</h2>
                <p>Transform your living spaces with our professional painting services.</p>
                <a href="./loged_paint-book.php" class="btn"> Explore </a>
            </div>
        </div>

        <!-- Service 2: carpenter -->
        <div class="service-card" id="carpenter" data-service="carpenter">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./carpenter1.jpeg" alt="carpenter Service Image 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="./carpenter2.jpg" alt="carpenter Service Image 2">
                    </div>
                    <div class="swiper-slide">
                        <img src="./Carpenter3.jpeg" alt="carpenter Service  Image 3">
                    </div>
                    <div class="swiper-slide">
                        <img src="./carpentry4.jpg" alt="carpenter Service  Image 4">
                    </div>

                    <!-- Add more swiper-slide divs for additional images -->
                </div>
                <!-- Add Navigation and Pagination -->
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                <!-- <div class="swiper-pagination"></div> -->
            </div>
            <div class="card-info">
                <h2>carpenter</h2>
                <p>Experience expert carpentry services for your home.</p>
                <a href="./loged_carpenter.php" class="btn">Explore</a>
            </div>
        </div>

        <!-- Add more service cards as needed -->
                <!-- Service 3: hous cleaning -->
                <div class="service-card" id="cleaning" data-service="cleaning">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="./cleaning1.jpg" alt="House Cleaning Service Image 1">
                            </div>
                            <div class="swiper-slide">
                                <img src="./cleaning2.jpeg" alt="House Cleaning Service Image 2">
                            </div>
                            <div class="swiper-slide">
                                <img src="./cleaning3.jpg" alt="House Cleaning Service Image 2">
                            </div>
                            <div class="swiper-slide">
                                <img src="./cleaning4.jpeg" alt="House Cleaning Service Image 2">
                            </div>
        
                            <!-- Add more swiper-slide divs for additional images -->
                        </div>
                        <!-- Add Navigation and Pagination -->
                        <!-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> -->
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>
                    <div class="card-info">
                        <h2>house cleaning</h2>
                        <p>Experience a spotless home with our professional house cleaning services.</p>
                        <a href="./loged_cleaning.php" class="btn">Explore</a>
                    </div>
                </div>

                        <!-- Service 4: plumbing -->
        <div class="service-card" id="plumbing" data-service="plumbing">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./Plumbing1.jpg" alt=" plumbing Service Image 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="./plumbing2.jpg" alt="plumbing Service Image 2">
                    </div>
                    <div class="swiper-slide">
                        <img src="./plumbing3.jpeg" alt="plumbing Service Image 3">
                    </div>
                    <div class="swiper-slide">
                        <img src="./plumbing4.jpg" alt="plumbing Service Image 4">
                    </div>

                    <!-- Add more swiper-slide divs for additional images -->
                </div>
                <!-- Add Navigation and Pagination -->
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                <!-- <div class="swiper-pagination"></div> -->
            </div>
            <div class="card-info">
                <h2>plumbing</h2>
                <p>Ensure your home's plumbing is in top-notch condition with our professional plumbing services. </p>
                <a href="./loged_plumber.php" class="btn">Explore</a>
            </div>
        </div>

                <!-- Service 5:flooring  -->
                <div class="service-card" id="flooring" data-service="flooring">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="./tile_florring1.jpg" alt="flooring Service Image 1">
                            </div>
                            <div class="swiper-slide">
                                <img src="./tile_floring2.jpg" alt="flooring Service Image 2">
                            </div>
                            <div class="swiper-slide">
                                <img src="./marval_floring.jpg" alt="flooring Service Image 3">
                            </div>
                            <div class="swiper-slide">
                                <img src="./flooring4.jpg" alt="flooring Service Image 4">
                            </div>
        
                            <!-- Add more swiper-slide divs for additional images -->
                        </div>
                        <!-- Add Navigation and Pagination -->
                        <!-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> -->
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>
                    <div class="card-info">
                        <h2> FLOORING </h2>
                        <p>Enhance your home's aesthetics with our professional flooring services. </p>
                        <a href="./loged_flooring.php" class="btn">Explore</a>
                    </div>
                </div>


                        <!-- Service 6: electric -->
        <div class="service-card" id="electric" data-service="electric">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./electrical1.jpeg" alt="House Cleaning Service Image 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="./electrical2.jpg" alt="House Cleaning Service Image 2">
                    </div>
                    <div class="swiper-slide">
                        <img src="./Electrician3-.jpg" alt="House Cleaning Service Image 2">
                    </div>
                    <div class="swiper-slide">
                        <img src="./electric4.jpg" alt="House Cleaning Service Image 2">
                    </div>

                    <!-- Add more swiper-slide divs for additional images -->
                </div>
                <!-- Add Navigation and Pagination -->
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                <!-- <div class="swiper-pagination"></div> -->
            </div>
            <div class="card-info">
                <h2>Electriction </h2>
                <p>Ensure the safety and functionality of your electrical systems with our expert electrician services. </p>
                <a href="./loged_electric.php" class="btn">Explore</a>
            </div>
        </div>
        

    </section>

    <footer>
        <p>&copy; 2024 Crafting Homes. All rights reserved.</p>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./home.js"></script>

</body>
</html>
