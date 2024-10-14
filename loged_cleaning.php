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
            <li> <a href="###"><i class="fa fa-fw fa-user"></i> Welcome,
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
            <a href="#contact1"><img src="./kitchen1.avif" alt="Kitchen cleaning" class="same-size-img">Kitchen cleaning</a>
            <a href="#contact2"><img src="./bathroom.png" alt="Bathroom cleaning" class="same-size-img">Bathroom cleaning</a>
            <a href="#contact3"><img src="./sofa1.jpg" alt="Sofa & Carpet Cleaning" class="same-size-img">Sofa & Carpet Cleaning</a>
            <a href="#contact4"><img src="./homee.avif" alt="Full Home Cleaning" class="same-size-img">Full Home Cleaning</a>
        </section>

        <section id="contact1">
            <div class="service">
                <h2>Kitchen cleaning</h2>

                <img src="./kitchen cleaning.jpg" alt="Kitchen cleaning" class="custom-size-img">
                <p>
                "Professional kitchen cleaning service:
                    We sanitize countertops, appliances, sinks, and floors for a sparkling, 
                    hygienic cooking space. Let us handle the grime, you enjoy the shine!"</p>
                    <p><b><h4>Starting at ₹1299/Service </h4></b></p>
            </div>
        </section>
        
        <section id="contact2">
            <div class="service">
                <h2>Bathroom cleaning</h2>
                <img src="./Bathroom cleaning.webp" alt="Bathroom cleaning" class="custom-size-img">
                <p>
                    "Bathroom cleaning specialists: We scrub, sanitize, and deodorize showers, toilets, sinks, and floors for a fresh and sparkling bathroom. 
                    Let us take care of the dirty work while you relax in a clean oasis."</p>
                    <p><b><h4>Starting at ₹499/Service </h4></b></p>
            </div>
        </section>
        
        <section id="contact3">
            <div class="service">
                <h2>Sofa & Carpet Cleaning</h2>
                <img src="./sofa cleaning.jpg" alt="Sofa & Carpet Cleaning" class="custom-size-img">
                <p>
                    
                 "Revitalize your home with our sofa & carpet cleaning service: We deep clean and refresh upholstery and carpets, removing stains, odors, and allergens. 
                  Experience the comfort of a clean, rejuvenated living space."
                </p>
                <p><b><h4>Starting at ₹399/Service </h4></b></p>
            </div>
        </section>

        <section id="contact4">
            <div class="service">
                <h2>Full Home Cleaning</h2>
                <img src="./Home cleaning.webp" alt="Full Home Cleaning" class="custom-size-img">
                <p>
                  
                 "Experience the ultimate in cleanliness with our full home cleaning service: From top to bottom, we leave no corner untouched, 
                 ensuring your entire home shines with freshness and comfort. 
                 Let us transform your space into a sanctuary of cleanliness and relaxation."
                </p>
                <p><b><h4>Starting at ₹3999/Service </h4></b></p>
            </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Crafting Homes. All rights reserved.</p>
    </footer>
    <a href="./cleaning_book_form.php" class="btn">Book Now</a>

    <script src="./booking_form.js"></script>
</body>
</html>
