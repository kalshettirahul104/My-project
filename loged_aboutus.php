<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aboutus.css">
    <title>About Us - Crafting Homes</title>
    <link rel="icon" type="image/x-icon" href="./logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <nav>
        <ul>
            <li><a href="./temploged.php">Home</a></li>
            <li><a href="./loged_service.php">Services</a></li>
            <li class="active"><a href="./loged_aboutus.php">About Us</a></li>
            <li><a href="./loged_contact.php">Contact</a></li>
            <li> <a href="###"> <i class="fa fa-fw fa-user"></i>Welcome,
                <?php  
                 session_start();
                echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : ''; 
                ?>
             </a></li>
             <li class="nav-right"><a href="home.html">Logout</a></li>
        </ul>
    </nav>

    <header>
        <h1>About Crafting Homes</h1>
    </header>

    <section class="about">
        <h2>Who We Are</h2>
        <p>Welcome to Crafting Homes, your trusted partner for a wide range of home services. We are dedicated to providing high-quality solutions to meet your home improvement needs.</p>

        <h2>Our Mission</h2>
        <p>At Crafting Homes, our mission is to deliver exceptional services that enhance the comfort and beauty of your home. We strive to exceed your expectations through professionalism, reliability, and craftsmanship.</p>

        <h2>Meet the Team</h2>
        <p>Get to know the passionate individuals behind Crafting Homes. Our team is comprised of skilled professionals who are committed to delivering excellence in every project.</p>

        <!-- Add more sections as needed -->
    </section>

    <footer>
        <p>&copy; 2024 Crafting Homes. All rights reserved.</p>
    </footer>

</body>
</html>
