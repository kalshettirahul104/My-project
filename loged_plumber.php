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
            <a href="#contact1"><img src="./original_wc.png" alt="Pipe Installation and Repair" class="same-size-img">Pipe Installation and Repair </a>
            <a href="#contact2"><img src="plumbing-service-with-plumber-workers-repair-maintenance-fix-home-and-cleaning-bathroom-equipment-in-flat-background-illustration-vector.jpg" alt="Leak Detection and Repair" class="same-size-img">Leak Detection and Repair</a>
            <a href="#contact3"><img src="man-plumber-cleaning-pipe-or-drain-with-plunger-vector-44481728.jpg" alt="Blockage" class="same-size-img">Blockage</a>
            <a href="#contact4"><img src="./istockphoto-513249616-612x612.jpg" alt="Emergency Plumbing Services" class="same-size-img">Emergency Plumbing Services</a>
        </section>

        <section id="contact1">
            <div class="service">
                <h2>Pipe Installation and Repair</h2>

                <img src="./4Q2EYRR2XMI6TMIL6BNCFZ2YMU.jpg" alt="Pipe Installation and Repair" class="custom-size-img">
                <p>
               
                 <b> "Expert pipe installation and repair services : </b> 
                
                        Your plumbing needs, our expertise."
                 </p>
                    <p><b><h4>Starting at ₹99/Service </h4></b></p>
            </div>
        </section>
        
        <section id="contact2">
            <div class="service">
                <h2>Leak Detection and Repair</h2>
                <img src="./hands-plumber-work-bathroom-plumbing-repair-service-leak-water-repair-plumbing_106035-63.jpg" alt="Leak Detection and Repair" class="custom-size-img">
                <p>
                    
                 
                <b> "Swift, precise pipe leak detection and repair : </b> Protect your home from water damage with our expert service."
</p>
                    <p><b><h4>Starting at ₹149/Service </h4></b></p>
            </div>
        </section>
        
        <section id="contact3">
            <div class="service">
                <h2>Blockage</h2>
                <img src="./3d-illustration-effect-powerful-chemical-600nw-1752041744.webp" alt="Blockage" class="custom-size-img">
                <p>
                    
                
               <b>
                "Blockage Service :  </b>
               
                   Clear blockages swiftly with our expert service. Keep your plumbing flowing smoothly and prevent backups with our professional assistance."
                </p>
                <p><b><h4>Starting at ₹399/Service </h4></b></p>
            </div>
        </section>

        <section id="contact4">
            <div class="service">
                <h2>Emergency Plumbing Services</h2>
                <img src="./need-an-emergency-plumber.jpeg" alt="Emergency Plumbing Services" class="custom-size-img">
                <p>
                  

                   <b> "Emergency plumbing problems? </b> We're here to help, anytime. Trust us to fix your issue quickly and effectively."
                </p>
                <p><b><h4>Starting at ₹499/Service </h4></b></p>
            </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Crafting Homes. All rights reserved.</p>
    </footer>
    <a href="./plumbing_book_form.php" class="btn">Book Now</a>
   </body>
</html>
