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
            <a href="#contact1"><img src="./little-cartoon-carpenter-working-with-woods_29937-4321.avif" alt="Installation" class="same-size-img">Installation</a>
            <a href="#contact2"><img src="./cartoon-dad-son-doing-carpentry-work-father-boy-working-with-wood-woodworking-tools-diy-repair-garage-workshop-interior-flat-vector-illustration-family-woodwork-concept-banner_527337-58.avif" alt="Repairs and Renovations" class="same-size-img">Repairs and Renovations</a>
            <a href="#contact3"><img src="./carpentry-workshop-cartoon-carpenter-character-sawing-wood-board-making-wooden-furniture-craftsman-timber-with-tools-woodworking-studio-vector-illustration_102902-7424.jpg" alt="Custom Carpentry" class="same-size-img">Custom Carpentry</a>
            <a href="#contact4"><img src="./illustration-of-a-teenage-guy-thinking-over-a-woodworking-problem-RJE7GM.jpg" alt="Looking for something else?" class="same-size-img">Looking for something else?</a>
        </section>

        <section id="contact1">
            <div class="service">
                <h2>Installation</h2>

                <img src="./install.jpg" alt="Installation" class="custom-size-img">
                <p>
               
                 <b>"Professional carpentry installation : </b></service:b>
                 Transform your home with our expert carpentry installation service. From custom cabinets to elegant trim work,
                  we bring skill and precision to every detail. Elevate your space today."</p>
                    <p><b><h4>Starting at ₹199/Service </h4></b></p>
            </div>
        </section>
        
        <section id="contact2">
            <div class="service">
                <h2>Repairs and Renovations</h2>
                <img src="./repair.jpg" alt="Repairs and Renovations" class="custom-size-img">
                <p>
                    
                 <b> "Expert carpentry repairs and renovations :</b> Fixing cracked or warped wood, repairing squeaky floors, 
                   and replacing rotted or termite-damaged wood. We also specialize in renovations and remodeling to upgrade your space's appearance and functionality."
</p>
                    <p><b><h4>Starting at ₹149/Service </h4></b></p>
            </div>
        </section>
        
        <section id="contact3">
            <div class="service">
                <h2>Custom Carpentry</h2>
                <img src="./Woodworking-Carpenter-Services-Custom-Carpentry-Service-Provider-UAE-DUBAI.jpg" alt="Custom Carpentry" class="custom-size-img">
                <p>
                    
                
               <b> "Custom carpentry : </b>Tailored woodwork to match your unique vision and needs. 
                  From custom cabinets to specialty pieces, we bring creativity and precision to every project."
                </p>
                <p><b><h4>Starting at ₹99/Service </h4></b></p>
            </div>
        </section>

        <section id="contact4">
            <div class="service">
                <h2>Looking for something else?</h2>
                <img src="./Looking for something else.jpeg.jpg" alt="Looking for something else?" class="custom-size-img">
                <p>
                  
               <b> "Seeking specialized carpentry services? </b>Our expertise spans custom designs, 
                 installations, and repairs. Let us bring craftsmanship and creativity to your project."
                </p>
                <p><b><h4>Starting at ₹99/Service </h4></b></p>
            </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Crafting Homes. All rights reserved.</p>
    </footer>
    <a href="./carpenter_book_form.php" class="btn">Book Now</a>
</body>
</html>
