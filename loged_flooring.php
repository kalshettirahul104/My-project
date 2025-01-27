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
            <a href="#contact1"><img src="./floor-installation-cartoon-illustration-with-repairman-laying-professional-parquet-wood-or-tile-floors-in-house-flooring-renovation-design-vector.jpg" alt="Installation" class="same-size-img">Wood flooring</a>
            <a href="#contact2"><img src="./tile_floor_logo.jpg" alt="Refinishing and Restoration" class="same-size-img">Tile Flooring</a>
            <a href="#contact3"><img src="./marbel_logo.jpg" alt="Repair" class="same-size-img">Marbel Flooring </a>
            <a href="#contact4"><img src="0_hCKcf61ql2Rk1oY5.png" alt="Sealing and Coating" class="same-size-img">Refinishing & Repair</a>
        </section>

        <section id="contact1">
            <div class="service">
                <h2>Wood Flooring</h2>

                <img src="./wood_flr.jpg" alt="wood flooring" class="custom-size-img">
                <p>
               
                 <b> "Expert tile flooring installation : </b> Transform your space with precision and quality craftsmanship. From selection to installation, we ensure a flawless finish every time." </p>
                    <p><b><h4>Starting at ₹199/Service </h4></b></p>
            </div>
        </section>
        
        <section id="contact2">
            <div class="service">
                <h2>Tile Flooring </h2>
                <img src="./istockphoto-1133604763-612x612.jpg" alt="Refinishing and Restoration" class="custom-size-img">
                <p>
                    
                 <b> "Refinishing and Restoration : </b> 
                 Renew your space with our refinishing and restoration services. From bringing old woodwork back to life to refreshing worn surfaces, we revitalize your home's beauty."
</p>
                    <p><b><h4>Starting at ₹149/Service </h4></b></p>
            </div>
        </section>
        
        <section id="contact3">
            <div class="service">
                <h2>Marbel Flooring</h2>
                <img src="./Marble.jpg" alt="Repair" class="custom-size-img">
                <p>
                    
                
               <b> "Repair your floor : </b>
               Tile repair made easy. From fixing cracks to replacing damaged tiles, we restore your surfaces to their original beauty with skill and precision."
                </p>
                <p><b><h4>Starting at ₹99/Service </h4></b></p>
            </div>
        </section>

        <section id="contact4">
            <div class="service">
                <h2>Refinishing & Repair</h2>
                <img src="./repair_ref.jpg" alt="Sealing and Coating" class="custom-size-img">
                <p>
                  
               <b> "Seeking specialized flooring services? </b> Seal in beauty, protect for life. Our sealing and coating services offer 
               lasting protection and enhanced aesthetics for your surfaces. Trust us to safeguard your space with quality expertise."
                </p>
                <p><b><h4>Starting at ₹99/Service </h4></b></p>
            </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Crafting Homes. All rights reserved.</p>
    </footer>
    <a href="./flooring_book_form.php" class="btn">Book Now</a>
</body>
</html>
