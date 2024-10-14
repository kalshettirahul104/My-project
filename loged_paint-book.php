<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painting Services</title>
    <link rel="stylesheet" href="paint.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
        <ul>
            <li class="active"><a href="./temploged.php">Home</a></li>
            <li><a href="./loged_service.php">Services</a></li>
            <li><a href="./loged_aboutus.php">About Us</a></li>
            <li><a href="./loged_contact.php">Contact</a></li>
            <li> <a href="./userinfo.php"><i class="fa fa-fw fa-user"></i> Welcome,
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
        <h1> Crafting  Homes</h1>
        <p>Your one-stop solution for home services, Precision in Every Detail, Perfection in Every Service.</p>
    </header>
    <div class="container">
        <h2>Our Services:</h2>
        <section id="logos">
            <a href="#contact1"><img src="./INTERIOR_PAINT.webp" alt="Interior Painting" class="same-size-img">Interior Painting</a>
            <a href="#contact2"><img src="./exterior.png" alt="Exterior Painting" class="same-size-img">Exterior Painting</a>
            <a href="#contact3"><img src="./onewall.png" alt="One Wall Painting" class="same-size-img">One Wall Painting</a>
            <a href="#contact4"><img src="./waterproofing.jpg" alt="Waterproofing" class="same-size-img">Waterproofing</a>
        </section>

        <section id="contact1">
            <div class="service">
                <h2>Interior Painting</h2>
                <img src="./interior.jpeg" alt="Interior Painting" class="custom-size-img">
                <p>Budget paints starting at 5 Rs/sq.ft.<br>
                    Complete Post Painting Cleanup<br>
                    1-2 Day Quick Service</p>
            </div>
        </section>
        
        <section id="contact2">
            <div class="service">
                <h2>Exterior Painting</h2>
                <img src="./exterior.jpg" alt="Exterior Painting" class="custom-size-img">
                <p>Boost your home's curb appeal and protect it from the elements with our professional exterior painting services. We use high-quality paints and materials to ensure long-lasting results that enhance the beauty and value of your property.</p>
            </div>
        </section>
        
        <section id="contact3">
            <div class="service">
                <h2>One Wall Painting</h2>
                <img src="./one_wall_pant.jpg" alt="One Wall Painting" class="custom-size-img">
                <p>Add personality and visual interest to any room with our one wall painting service. Whether you want to create a focal point, define a space, or experiment with bold colors and patterns, our experienced painters will help you achieve the look you envision.</p>
            </div>
        </section>

        <section id="contact4">
            <div class="service">
                <h2>Waterproofing</h2>
                <img src="./Waterproof.jpg" alt="Waterproofing" class="custom-size-img">
                <p>Protect your surfaces from water damage and moisture infiltration with our waterproofing solutions. From basements and foundations to roofs and decks, we offer a range of waterproofing products and techniques to safeguard your property and ensure peace of mind.</p>
            </div>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Crafting Homes. All rights reserved.</p>
    </footer>

    <!-- <button id="bookNowButton">Book Now</button> -->
    <a href="./paint_booking_form.php" class="btn">Book Now</a>

    <script src=""></script>
</body>
</html>
