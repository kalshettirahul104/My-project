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
            <li> <a href="./userinfo.phpS"><i class="fa fa-fw fa-user"></i> Welcome,
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
            <a href="#contact1"><img src="./150264918-professional-air-conditioners-service-maintenance-installation-and-repair-cartoon-master-electrician.jpg" alt="Electrical Installation and Repairs" class="same-size-img">Electrical Installation <br>and Repairs</a>
            <a href="#contact2"><img src="./maxresdefault.jpg" alt="Electrical Wiring and Rewiring" class="same-size-img">Electrical Wiring <br>and Rewiring</a>
            <a href="#contact3"><img src="./electric-man-icon-and-logo-free-vector.jpg" alt="Emergency Electrical Services" class="same-size-img">Emergency Electrical <br>Services</a>
            <a href="#contact4"><img src="./male-electrician-engineer-with-cable-thinking-vector-32003108.jpg" alt="Looking for something else?" class="same-size-img">Looking for something else?</a>
        </section>

        <section id="contact1">
            <div class="service">
                <h2>Electrical Installation and Repairs</h2>

                <img src="./istockphoto-928084674-612x612.jpg" alt="Electrical Installation and Repairs" class="custom-size-img">
                <p>
               
                 <b> "Professional electrical services : </b> 
                 "Professional electrical services : From installations to repairs, we ensure your electrical systems are safe and efficient. Trust us to handle all your electrical needs with expertise and precision." </p>
                    <p><b><h4>Starting at ₹199/Service </h4></b></p>
            </div>
        </section>
        
        <section id="contact2">
            <div class="service">
                <h2>Electrical Wiring and Rewiring</h2>
                <img src="Maximize-Profits-with-Efficient-Electrical-Systems.jpeg.jpg" alt="Electrical Wiring and Rewiring" class="custom-size-img">
                <p>
                    
                 <b> "Professional electrical wiring and rewiring : </b> 
                  Safe, efficient solutions tailored to you."
</p>
                    <p><b><h4>Starting at ₹119/Service </h4></b></p>
            </div>
        </section>
        
        <section id="contact3">
            <div class="service">
                <h2>Emergency Electrical Services</h2>
                <img src="./Sun-City-24-Hour-Emergency-Electricians.jpg" alt="Emergency Electrical Services" class="custom-size-img">
                <p>
                    
                
               <b>
                "24/7 emergency electrical services : </b>
                Quick response, reliable solutions when you need them most."
                </p>
                <p><b><h4>Starting at ₹499/Service </h4></b></p>
            </div>
        </section>

        <section id="contact4">
            <div class="service">
                <h2>Looking for something else?</h2>
                <img src="./male-electrician-looking-circuit-board-thinking_23-2148087627.avif" alt="Looking for something else?" class="custom-size-img">
                <p>
                  
               <b>  "Need a different electrical service? </b>  Let us know your requirements, and we'll provide the solution 
                </p>
                <p><b><h4>Starting at ₹99/Service </h4></b></p>
            </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Crafting Homes. All rights reserved.</p>
    </footer>
    <a href="./electric_book_form.php" class="btn">Book Now</a>
</body>
</html>
