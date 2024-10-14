<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Page</title>
<!-- <link rel="stylesheet" href="admin.css"> Link to external CSS file -->
<style>
/* Global styles */
body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  display: flex;
  min-height: 100vh;
}

/* Style for side navigation */
.sidenav {
  height: 100vh; 
  width: 250px; 
  background-color: #333; /* Dark gray color */
  padding-top: 60px; 
  overflow-y: auto;
}

.sidenav a {
  display: block;
  padding: 16px 20px;
  text-decoration: none;
  color: #fff;
  transition: background-color 0.3s;
}

.sidenav a:hover {
  background-color: #555; /* Darker gray color */
}

/* Style for content section */
.content {
  flex: 1;
  padding: 20px;
  margin-top: 20px; /* Add margin from the top */
}

/* Style for header */
header {
  width: 100%;
  background-color: #007bff; /* Blue color */
  color: #fff;
  padding: 20px 0;
  text-align: center;
  margin-top: 20px; /* Add margin from the top */
  position: relative; /* Ensure relative positioning for the absolute element */
}

/* Style for logout link */
header a {
  position: absolute;
  top: 20px;
  right: 20px;
  color: #fff;
  text-decoration: none;
}

/* Style for footer */
footer {
  background-color: #333; /* Dark gray color */
  color: #fff;
  text-align: center;
  padding: 20px;
}

.footer-content {
  display: flex;
  justify-content: space-between;
}

.footer-content > div {
  flex: 1;
}

.footer-content h3 {
  margin-top: 0;
}

.contact-info, .useful-links, .feedback-form {
  text-align: left;
}

.contact-info p, .useful-links ul, .feedback-form textarea, .feedback-form button {
  margin-top: 10px;
}

.useful-links ul {
  padding-left: 0;
}

.useful-links li {
  list-style: none;
  margin-bottom: 5px;
}

.legal-info p {
  margin: 5px 0;
}

.logo {
    max-width: 130px; /* Adjusted size */
    position:absolute;
    top:auto; /* Adjusted position */
    left: 20px; /* Adjusted position */
    top: 5px;
    border-radius: 50%;
}

</style>
</head>
<body>
  
<header> <!-- Header -->
  <h1><img src="./logo1.jpg" alt="crafting home logo " class="logo">  Admin Panel   <a href="./home.html">log out </a></h1>
</header>

<div class="container">
  <!-- Side navigation -->
  <div class="sidenav">
    <a href="#" onclick="showPage('./welcomeadmin.php')"> Dashboard</a>
    <a href="#" onclick="showPage('./admin_paint.php')">Painting services bookings</a>
    <a href="#" onclick="showPage('./admin_carpenter.php')">Carpenter services bookings</a>
    <a href="#" onclick="showPage('./admin_cleaning.php')">House cleaning services</a>
    <a href="#" onclick="showPage('./admin_plumbing.php')">Plumber Services bookings</a>
    <a href="#" onclick="showPage('./admin_electric.php')">Electrician service bookings</a>
    <a href="#" onclick="showPage('./admin_flooring.php')">Flooring services bookings</a>
  </div>

  <!-- Content section -->
  <div class="content"> <!-- Content container -->
    <iframe id="adminFrame" src="./welcomeadmin.php" frameborder="0" style="width: 100%; height: 100%;"></iframe>
  </div>
</div>

<!-- Footer -->
<footer>
  <div class="footer-content">
    <div class="contact-info">
      <h3>Contact Us</h3>
      <p>Email: admin@example.com</p>
      <p>Phone: +123-456-7890</p>
    </div>
    <div class="useful-links">
      <h3>Useful Links</h3>
      <ul>
        <li><a href="#">Documentation</a></li>
        <li><a href="#">FAQs</a></li>
      </ul>
    </div>
  
  <div class="legal-info">
    <p>&copy; 2024 Admin Panel. All rights reserved.</p>
  </div>

</footer>

<!-- JavaScript for setting iframe src -->
<script>
function showPage(url) {
  document.getElementById("adminFrame").src = url;
}
</script>

</body>
</html>
