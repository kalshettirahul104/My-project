
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<link rel="stylesheet" href="./admin_login.css">
</head>
<body>
   
  <form  action="" method="post"  id="registrationForm">
  <div class="form-structor">
    <div class="signup">
      <h2 class="form-title" id="signup"><span>or</span>Admin login</h2>
      <div class="form-holder">
      <input type="text" id="adminid" name="adminid" class="input" placeholder="admin id" />
          <input type="password" id="password" name="password" class="input" placeholder="Password" />
      </div>
      <button class="submit-btn">Log in</button>
    </div>
  </form>
  
  <!-- <form id="login-form" action="login.php" method="POST">

    <div class="login slide-up">
      <div class="center">
        <h2 class="form-title" id="login"><span>or</span>Log in</h2>
        <div class="form-holder">
          <input type="email" id="email" name="email" class="input" placeholder="Email" />
          <input type="password" id="password" name="password" class="input" placeholder="Password" />
        </div>
        <button class="submit-btn">Log in</button>
      </div>
    </div>
    </form> -->
  </div>
  <script src="./login.js"></script>
</body>
</html>

<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username and password from the form
    $adminid = $_POST["adminid"];
    $usrpasswd = $_POST["password"];

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "1899";
    $database = "crafhomedb";




    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "connected <br>";
    // Prepare SQL query to check if the username exists
    $sql = "SELECT * FROM crafhomedb.admin WHERE  admin_id = '$adminid' and password ='$usrpasswd'";
    $result = mysqli_query($conn,$sql) or die ("con't execute");
    // echo $_SESSION['user_email'];
     echo $adminid;
     echo " pass word is $usrpasswd";
    

    if ($result->num_rows == 1) {
        // User exists, fetch the row
       echo  $row = mysqli_fetch_assoc($result);
        echo $row['password'];

        // Redirect to the home page
        header("Location: admin.php");
        exit();
    } else {

        // User does not exist
        echo "Invalid username or password.";
    }

    // Close connection
    $conn->close();
}
?>
