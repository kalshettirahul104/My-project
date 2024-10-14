<!-- contactus.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./contact.css">
    <title>Contact Us - Crafting Homes</title>
    <link rel="icon" type="image/x-icon" href="./logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <nav>
        <ul>
            <li><a href="./temploged.php">Home</a></li>
            <li><a href="./loged_service.php">Services</a></li>
            <li><a href="./loged_aboutus.php">About Us</a></li>
            <li class="active"><a href="./loged_contact.php">Contact</a></li>
           
            <li class="user-name"> <a href="###"><i class="fa fa-fw fa-user"></i> Welcome :
                <?php  
                 session_start();
                echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : ''; 
                ?>
             </a></li>
             <li class="nav-right"><a href="home.html">Logout</a></li>
        </ul>
    </nav>

    <section class="contact-form">
        <h2>Contact Us</h2>
        <p>Have questions or need assistance? Reach out to us!</p>

        <div class="contact-details">
            <p><strong>Phone:</strong> 8789165481 / 7276394398 <a href="tel:+91 8789165481"> call</a></p>
            <p><strong>Email:</strong> carafting_homes@gmail.com <a href="mailto:pappu2803@gmail.com "> mail</a></p>
        </div>

        <form action="./loged_contect_form.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit" class="btn">Submit</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Crafting Homes. All rights reserved.</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
