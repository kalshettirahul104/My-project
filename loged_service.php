<!-- services.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="services.css">
    <title>Our Services - Crafting Homes</title>
    <link rel="icon" type="image/x-icon" href="./logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <nav>
        <ul>
            <li><a href="./temploged.php">Home</a></li>
            <li class="active"><a href="./loged_service.php">Services</a></li>
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

    <section class="service-details" id="painting-details">
        <h2>Painting Service</h2>
        <p>Transform your living spaces with our professional painting services. Our skilled painters use high-quality paints and techniques to bring your vision to life. From accent walls to full room makeovers, we've got you covered.</p>

        <h3>Pricing</h3>
        <p>Contact us for a personalized quote based on your specific requirements.</p>

        <a href="./loged_paint-book.php" class="btn">Apply Now</a>
    </section>

    <section class="service-details" id="cleaning-details">
        <h2>House Cleaning Service</h2>
        <p>Experience a spotless home with our professional house cleaning services. Our trained cleaning staff uses eco-friendly products and advanced techniques to ensure a thorough cleaning. From regular maintenance to deep cleaning, we've got your home covered.</p>

        <h3>Pricing</h3>
        <p>Contact us for a personalized quote based on your specific requirements.</p>

        <a href="./loged_cleaning.php" class="btn">Apply Now</a>
    </section>

    <section class="service-details" id="electrician-details">
        <h2>Electrician Service</h2>
        <p>Ensure the safety and functionality of your electrical systems with our expert electrician services. From installations to repairs, our skilled electricians provide reliable solutions for your home or business.</p>

        <h3>Pricing</h3>
        <p>Contact us for a personalized quote based on your specific requirements.</p>

        <a href="./loged_electric.php" class="btn">Apply Now</a>
    </section>

    <section class="service-details" id="flooring-details">
        <h2>Flooring Service</h2>
        <p>Enhance your home's aesthetics with our professional flooring services. Whether it's tile, wood, or marble, our skilled technicians will install or repair your floors with precision and care.</p>

        <h3>Pricing</h3>
        <p>Contact us for a personalized quote based on your specific requirements.</p>

        <a href="./loged_flooring.php" class="btn">Apply Now</a>
    </section>

    <section class="service-details" id="carpenter-details">
        <h2>Carpenter Service</h2>
        <p>Experience expert carpentry services for your home. Our skilled carpenters can handle a variety of tasks, from furniture assembly to custom woodwork. Enhance your living space with our carpentry expertise.</p>

        <h3>Pricing</h3>
        <p>Contact us for a personalized quote based on your specific requirements.</p>

        <a href="./loged_carpenter.php" class="btn">Apply Now</a>
    </section>

    <section class="service-details" id="plumbing-details">
        <h2>Plumbing Service</h2>
        <p>Ensure your home's plumbing is in top-notch condition with our professional plumbing services. From repairs to installations, our skilled plumbers provide efficient solutions for your plumbing needs.</p>

        <h3>Pricing</h3>
        <p>Contact us for a personalized quote based on your specific requirements.</p>

        <a href="./loged_plumber.php" class="btn">Apply Now</a>
    </section>

    <!-- Add more sections for other services -->
    <!-- Include additional service sections using the same pattern -->

    <footer>
        <p>&copy; 2024 Crafting Homes. All rights reserved.</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
